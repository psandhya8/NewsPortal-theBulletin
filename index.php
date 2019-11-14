    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>The Bulletin</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/Bulletin-logo">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    
    <?php     
        session_start();
        $con=mysqli_connect('localhost','root','') or die(mysql_error());  
        mysqli_select_db($con,'news_portal') or die("cannot select DB");

        $query=mysqli_query($con,"SELECT * FROM latest_post WHERE post_id='1'"); 
        $numrows=mysqli_num_rows($query);

        while($row=mysqli_fetch_assoc($query))
        {  
            $posttitle=$row['post_title'];
            $posttype=$row['post_type'];   
            $postdate=$row['post_date'];   
        }
        $query1=mysqli_query($con,"SELECT * FROM latest_post WHERE post_id='2'"); 
        $numrows1=mysqli_num_rows($query1);

        while($row=mysqli_fetch_assoc($query1))
        {  
            $posttitle1=$row['post_title'];
            $posttype1=$row['post_type'];   
            $postdate1=$row['post_date'];   
        }
        
        $query2=mysqli_query($con,"SELECT * FROM latest_post WHERE post_id='3'"); 
        $numrows2=mysqli_num_rows($query2);

        while($row=mysqli_fetch_assoc($query2))
        {  
            $posttitle2=$row['post_title'];
            $posttype2=$row['post_type'];   
            $postdate2=$row['post_date'];   
        }

        $array = array(); 

        $query3=mysqli_query($con,"SELECT * FROM latest_post WHERE post_type='Travel'"); 
        $numrows2=mysqli_num_rows($query3);

        while($row = mysqli_fetch_assoc($query3))
        {
            $array[] = $row;
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
    <?php include'header.php'; 
                          if($_SESSION["admin_enable"] == 1)
                            {
//                            echo '<a href="submit-post.php" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Post</span></a>';
                            }
                            else
                            {
                            }
                            
    ?>
    <!-- ##### Header Area End ##### -->


    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/mpost1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="single-post.php"><?php echo date('F, Y', strtotime($postdate)) . '/'; ?> </a>
                                <a href="single-post.php"><?php echo $posttype; ?></a>
                                 <a href="single-post.php"><?php echo $posttitle; ?></a>
                            </div>
                            <a href="index.php" class="post-title" data-animation="fadeInUp" data-delay="300ms">The Bulletin.com</a>
<!--                            <a href="index.php" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/mpost2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="single-post.php"> <?php echo date('F, Y', strtotime($postdate1)) . '/'; ?> </a>
                                <a href="single-post.php"><?php echo $posttype1; ?></a>
                                <a href="single-post.php"><?php echo $posttitle1; ?></a>
                            </div>
                            <a href="index.php" class="post-title" data-animation="fadeInUp" data-delay="300ms">The Bulletin.com</a>
<!--                            <a href="index.php" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(img/bg-img/mpost3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="single-post.php"> <?php echo date('F, Y', strtotime($postdate2)) . '/'; ?> </a>
                                <a href="single-post.php"><?php echo $posttype2; ?></a>
                                <a href="single-post.php"><?php echo $posttitle2; ?></a>
                            </div>
                            <a href="index.php" class="post-title" data-animation="fadeInUp" data-delay="300ms">The Bulletin.com</a>
<!--                            <a href="index.php" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
             
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Latest Posts</h5>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/4.jpeg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.php" class="post-title"><?php echo $array[0]['post_title']; ?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 700</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 91</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 54</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/5.jpeg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.php" class="post-title"><?php echo $array[1]['post_title']; ?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 907</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 123</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 98</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/6.jpeg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.php" class="post-title"><?php echo $array[2]['post_title']; ?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1032</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 32</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 10</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/7.jpeg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.php" class="post-title"><?php echo $array[3]['post_title']; ?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 543</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 234</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 109</a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <img src="img/bg-img/8.jpeg" alt="">
                    </div>
                    <div class="post-content">
                        <a href="single-post.php" class="post-title"><?php echo $array[4]['post_title']; ?></a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 327</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 94</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 74</a>
                        </div>
                    </div>
                </div>
                
                <br>
                <br>
                <br>
                
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Advertisements</h5>
                </div>
            
            <br>
            <br>
            
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add.jpeg" alt=""></a>
            </div>

            <br>
            <br>
            <br>

                 <!-- Sidebar Widget -->
                 <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add1.jpeg" alt=""></a>
            </div>
                
            <br>
            <br>
            <br>

             <!-- Sidebar Widget -->
             <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add2.jpeg" alt=""></a>
            </div>
            
            </div>    
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>TRENDING NOW</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/19.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="video-post.php" class="post-title">Big Savings On Gas While You Travel</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/20.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">TV Show</a>
                            <a href="video-post.php" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/21.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Sports</a>
                            <a href="video-post.php" class="post-title">The Health Benefits Of Sunglasses</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/19.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Video</a>
                            <a href="video-post.php" class="post-title">Big Savings On Gas While You Travel</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/20.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">TV Show</a>
                            <a href="video-post.php" class="post-title">A Guide To Rocky Mountain Vacations</a>
                        </div>
                    </div>

                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="img/bg-img/21.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Sports</a>
                            <a href="video-post.php" class="post-title">The Health Benefits Of Sunglasses</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Featured Videos</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="img/bg-img/22.jpg" alt="">
                                    <a href="video-post.php" class="video-play"><i class="fa fa-play"></i></a>
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">MAY 8, 2018</a>
                                        <a href="archive.php">lifestyle</a>
                                    </div>
                                    <a href="video-post.php" class="post-title">A Closer Look At Our Front Porch Items From Lowe’s</a>
                                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                            <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/23.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/24.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/25.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">American Standards And European Culture How To Avoid</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/26.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">Mother Earth Hosts Our Travels</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/27.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single--slide">
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/23.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">Global Resorts Network Grn Putting Timeshares To Shame</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/24.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/25.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">American Standards And European Culture How To Avoid</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/26.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">Mother Earth Hosts Our Travels</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="img/bg-img/27.jpg" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.php" class="post-title">From Wetlands To Canals And Dams Amsterdam Is Alive</a>
                                            <div class="post-meta d-flex">
                                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Most Viewed Articles -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Most Viewed Articles</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/28.jpg" alt="">
                            <a href="video-post.php" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">A Guide To Rocky Mountain Vacations</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/29.jpg" alt="">
                            <a href="video-post.php" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/30.jpg" alt="">
                            <a href="video-post.php" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/28.jpg" alt="">
                            <a href="video-post.php" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">A Guide To Rocky Mountain Vacations</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/29.jpg" alt="">
                            <a href="video-post.php" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <img src="img/bg-img/30.jpg" alt="">
                            <a href="video-post.php" class="video-play"><i class="fa fa-play"></i></a>
                            <span class="video-duration">09:27</span>
                        </div>
                        <div class="post-content">
                            <a href="single-post.php" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/" class="facebook-fans" target="_blank"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="https://twitter.com/" class="twitter-followers" target="_blank"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="https://www.youtube.com/" class="youtube-subscribers" target="_blank"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="https://www.google.com/" class="google-followers" target="_blank"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Categories</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</span> <span>35</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</span> <span>30</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</span> <span>13</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</span> <span>06</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</span> <span>28</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</span> <span>08</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</span> <span>13</span></a></li>
                </ul>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Hot Channels</h5>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="img/bg-img/14.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.php" class="channel-title">TV Show</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="img/bg-img/15.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.php" class="channel-title">Game Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="img/bg-img/16.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.php" class="channel-title">Sport Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="img/bg-img/17.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.php" class="channel-title">Travel Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>

                <!-- Single YouTube Channel -->
                <div class="single-youtube-channel d-flex">
                    <div class="youtube-channel-thumbnail">
                        <img src="img/bg-img/18.jpg" alt="">
                    </div>
                    <div class="youtube-channel-content">
                        <a href="single-post.php" class="channel-title">LifeStyle Channel</a>
                        <a href="#" class="btn subscribe-btn"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Subscribe</a>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>

                <div class="newsletter-form">
                    <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                    <form action="#" method="get">
                        <input type="search" name="widget-search" placeholder="Enter your email">
                        <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

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