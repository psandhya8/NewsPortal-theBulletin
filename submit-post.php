<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Mag - Video &amp; Magazine HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    
<?php
 session_start();
 $con = mysqli_connect('localhost','root','','news_portal') or die('Unable To connect');
    if(isset($_POST['upload']))
{
    $poid = $_POST["pid"];
    $titl = $_POST["title"];
    $cate = $_POST["category"];
    $desc = $_POST["description"];
    $dat = $_POST["date"];

    $sql1 = "INSERT INTO news_article (news_id,news_title,news_type,news_desc,news_date) VALUES ('$poid', '$titl', '$cate', '$desc', '$dat')";
    $sql2 = "INSERT INTO latest_post (post_id,post_title,post_type,post_desc,post_date) VALUES ('$poid', '$titl', '$cate', '$desc', '$dat')";
    $sql3 = "DELETE FROM latest_post WHERE post_id = '".$poid."'";
    $sql4 = "DELETE FROM news_article WHERE news_id = '".$poid."'";

    $flag = 1;

    if(mysqli_query($con, $sql3) && mysqli_query($con, $sql4))
    {
        $flag = 1;
    }
    else 
    {
        $flag = 0;
        echo "<script type='text/javascript'>alert('ERROR! Post cannot be submitted!!!')</script>";
    }

    if($flag == 1 && mysqli_query($con, $sql1) && mysqli_query($con, $sql2))
    {
        echo "<script type='text/javascript'>alert('Post submitted successfully!!!')</script>";
    }
    else 
    {
        echo "<script type='text/javascript'>alert('ERROR! Post cannot be submitted!!!')</script>";
    }
}
?>
</head>

<body>
    
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <?php include'header.php';?>
    
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/40.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Submit Post</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Submit Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Video Submit Area Start ##### -->
    <div class="video-submit-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <!-- Video Submit Content -->
                    <div class="video-submit-content mb-50 p-30 bg-white box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Submit your post</h5>
                        </div>

                        <div class="video-info mt-30">
                            <form action="#" method="post">
                                <div class="form-group">
                                    <label for="upload-file">Upload Your File</label>
                                    <input type="file" class="form-control-file" id="upload-file">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Post ID (Enter a value only between 4 and 8)</label>
                                    <input type="text" class="form-control" name="pid">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Post Title</label>
                                    <input type="text" class="form-control" name="title">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Post Category</label>
                                    <input type="text" class="form-control" name="category">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Post Description</label>
                                    <input type="text" class="form-control" name="description">
                                </div>
                                <div class="form-group">
                                    <label for="upload-file">Post Date</label>
                                    <input type="text" class="form-control" name="date">
                                </div>
                                <button type="submit" name="upload" class="btn mag-btn mt-30"><i class="fa fa-cloud-upload"></i> Upload your Post</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Video Submit Area End ##### -->

    <?php include'footer.php';?>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>