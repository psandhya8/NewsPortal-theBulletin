<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>TheBulletin</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

   <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    
    <?php
        session_start();
        $message="";
        if(count($_POST)>0) 
        {
            $con = mysqli_connect('localhost','root','','news_portal') or die('Unable To connect');
            $result = mysqli_query($con,"SELECT * FROM login WHERE login_username='" . $_POST["user_name"] . "' and login_password = '". $_POST["password"]."'");
            $row  = mysqli_fetch_array($result);
            if(is_array($row)) 
            {
                $_SESSION["id"] = $row['login_id'];
                $_SESSION["username"] = $row['login_username'];
                $_SESSION["admin_enable"] = $row['admin_enable'];
                $_SESSION["flag"] = 0;
            } 
            else 
            {
                $message = "Invalid Username or Password!";
            }
        }
        if($_SESSION["flag"] == 0) 
        {
            header("Location:index.php");
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

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="index.php"class="nav-brand"><span>TheBulletin<span>.</span></span></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Login -->
                            <a href="login.php" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <?php
                            if($_SESSION["admin_enable"] == 1)
                            {
//                            echo '<a href="adduser.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Add User</span></a>';
                            echo '<a href="submit-post.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Post</span></a>';
                            }
                            $_SESSION["flag"] = 1;
                            $_SESSION["login"] = 1;
                            if($_SESSION["username"]) {
                            echo '<a href="logout.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Logout</span></a>';
                            }
                            else
                            {
                            }
                            ?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/cu1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Login Area Start ##### -->
    <div class="mag-login-area py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="login-content bg-white p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Great to have you back!</h5>
                        </div>

                        <form name="frmUser" action="" method="post">
                        <div class="message"><?php if($message!="") { echo $message; } ?></div>
                            <div class="form-group">
                                <input type="text" name="user_name" class="form-control" id="exampleInputEmail1" placeholder="Email or User Name">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn mag-btn mt-30">Login</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-heading" align="center">
    <h5>Do not have an account?</h5>
    <a href="register.php"><button type="submit" name="submit" class="btn mag-btn mt-30">Register</button></a>
    </div>


    <!-- ##### Login Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
        <?php include'footer.php';?>
    <!-- ##### Footer Area End ##### -->

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