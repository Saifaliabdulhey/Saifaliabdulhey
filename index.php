
<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:app.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toursim Guide</title>

    <!-- Custom style -->
    <link rel="stylesheet" href="./CSS/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="./CSS/all.css">

    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="./CSS/owl.carousel.min.css">
    <link rel="stylesheet" href="./CSS/owl.theme.default.min.css">

    <!-- AOS Library -->
    <link rel="stylesheet" href="./CSS/aos.css">

</head>
<body>
    <!---------------------- navigation ------------------------>
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="logout.php" class="text-gray sepriated">Logout</a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="">Home</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Category</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Archive</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Pages</a>
                    </li>
                    <li class="nav-link">
                        <a href="">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!---------x-------------- Navigation End -------x------------->
   
    <!----------------------- main site section ------------------------->
    <main>
        <!-- site title -->
        <section class="site-title">
            <div class="site-background"  data-aos="fade-up" data-aos-delay="100">
                <h3>Tours And Travels</h3>
                <h1>Most Beautiful Place On Earth</h1>
                <button class="btn">Explore</button>
            </div>
        </section>
        <!-- End of site title -->

        <!-- Blog Carousel -->
        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="./assets/Blog-post/1.jpg" alt="post-1">
                        <div class="blog-title">
   
                            <a class="btn btn-blog" href="french.php">French</a>
          
                        </div>    
                       </div>  
                       <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                        <img src="./assets/Blog-post/3.jpg" alt="post-1">
                    <div class="blog-title">
                        <a class="btn btn-blog" href="russia.php">Russia</a>
  
                    </div>    
                   </div>        
                   <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                    <img src="./assets/Blog-post/2.jpg" alt=post-1">
                <div class="blog-title">
            
                    <a class="btn btn-blog" href="china.php">China</a>
                   
                </div>    
               </div> 
               <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                <img src="./assets/Blog-post/4.jpg"  alt="post-1">
            <div class="blog-title">

                <a class="btn btn-blog" href="usa.php">U.S.A</a>
               
            </div>    
           </div>                              
            </div>   
            <div class="owl-navigation" data-aos="fade-down"
            data-aos-easing="linear"
            data-aos-duration="1500">
                <span class="owl-nav-prev" data-aos="fade-down"
                data-aos-easing="linear"
                data-aos-duration="1500">

                </span>
            </div>     
                </div>
            </div>
        </section>
        <!-- End of Blog Carousel -->

        <!-- Site Content -->
        <section class="container">
            <div class="site-content">
                <div class="post">
                    <div class="post-content"  data-aos="fade-right" data-aos-delay="200">
                        <div class="post-image"  data-aos="fade-left" data-aos-delay="200">
                            <div>
                                <img src="./assets/Blog-post/blog1.png" class="img" alt="Blog1"  data-aos="fade-right" data-aos-delay="200">
                            </div>
                            <div class="post-info flex-row"  data-aos="fade-in" data-aos-delay="200">
                                <span><i class="fas fa-user text-gray"  data-aos="fade-right" data-aos-delay="200"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"  data-aos="fade-right" data-aos-delay="200"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                <span  data-aos="fade-right" data-aos-delay="200">&nbsp;&nbsp;3 comments</span>
                            </div>
                        </div>
                        <div class="post-title" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                            <a href="#" data-aos="fade-down" data-aos-delay="200">All human beings on the earth should have fun because the worls is mess!</a>
                            <p>The Universe, seen as the place and time where all our worlds coexist and interact,
                                 can be better, more enjoyable and even happier, if the differences between these worlds
                                  become parts of unifying bridges instead of bricks in dividing walls.
                                </p>
                                <button class="btn post-btn" data-aos="fade-down" data-aos-delay="300">Read More &nbsp;<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    
                    <div class="post-content" data-aos="fade-left">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog2.png" class="img" alt="Blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                <span>&nbsp;&nbsp;3 comments</span>
                            </div>
                        </div>
                        <div class="post-title" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                            <a href="#">All human beings on the earth should have fun because the worls is mess!</a>
                            <p>The Universe, seen as the place and time where all our worlds coexist and interact,
                                 can be better, more enjoyable and even happier, if the differences between these worlds
                                  become parts of unifying bridges instead of bricks in dividing walls.
                                </p>
                                <button class="btn post-btn">Read More &nbsp;<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    
                    <div class="post-content" data-aos="zoom-in-up">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog3.png" class="img" alt="Blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                <span>&nbsp;&nbsp;3 comments</span>
                            </div>
                        </div>
                        <div class="post-title" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                            <a href="#">All human beings on the earth should have fun because the worls is mess!</a>
                            <p>The Universe, seen as the place and time where all our worlds coexist and interact,
                                 can be better, more enjoyable and even happier, if the differences between these worlds
                                  become parts of unifying bridges instead of bricks in dividing walls.
                                </p>
                                <button class="btn post-btn">Read More &nbsp;<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    
                    <div class="post-content" data-aos="zoom-in">
                        <div class="post-image">
                            <div>
                                <img src="./assets/Blog-post/blog4.png" class="img" alt="Blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                <span>&nbsp;&nbsp;3 comments</span>
                            </div>
                        </div>
                        <div class="post-title" data-aos="fade-down"
                        data-aos-easing="linear"
                        data-aos-duration="1500">
                            <a href="#">All human beings on the earth should have fun because the worls is mess!</a>
                            <p>The Universe, seen as the place and time where all our worlds coexist and interact,
                                 can be better, more enjoyable and even happier, if the differences between these worlds
                                  become parts of unifying bridges instead of bricks in dividing walls.
                                </p>
                                <button class="btn post-btn">Read More &nbsp;<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </div>
                    
                    <div class="pagination flex-row">
                        <a href="#" data-aos="flip-left" data-aos-delay="300"><i class="fas fa-chevron-left"></i></a>
                        <a href="#" class="page" data-aos="zoom-in-up" data-aos-delay="300">1</a>
                        <a href="#" class="page" data-aos="zoom-in-up" data-aos-delay="300">2</a>
                        <a href="#" class="page" data-aos="zoom-in-up" data-aos-delay="300">3</a>
                        <a href="#" data-aos="flip-left" data-aos-delay="300"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                <aside class="sidebar">
                    <div class="category">
                        <h1>Category</h1>
                        <ul class="category-list">
                            <li class="list-items change-color" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="100">
                                <a href="#">Software</a>
                                <span>(05)</span>
                            </li>
                            <li class="list-items change-color" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="200">
                                <a href="#">Technology</a>
                                <span>(02)</span>
                            </li>
                            <li class="list-items change-color" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="300">
                                <a href="#">shopping</a>
                                <span>(07)</span>
                            </li>
                            <li class="list-items change-color" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="400">
                                <a href="#">LifeStyle</a>
                                <span>(01)</span>
                            </li>
                            <li class="list-items" data-aos="fade-up"
                            data-aos-anchor-placement="center-bottom" data-aos-delay="500">
                                <a href="#">food</a>
                                <span>(08)</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <div class="post-content" data-aos="fade-up"
                        data-aos-anchor-placement="top-center">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-4.jpg" class="img" alt="Blog1">
                                </div>
                                <div class="post-info flex-row">
                                    
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                    <span>&nbsp;&nbsp;3 comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#" data-aos="fade-down"
                                data-aos-easing="linear"
                                data-aos-duration="1500">All human beings on the earth should have fun because the worls is mess!</a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="post-content" data-aos="fade-up"
                        data-aos-anchor-placement="top-center">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-1.jpg" class="img" alt="Blog1">
                                </div>
                                <div class="post-info flex-row">
                                    
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                    <span>&nbsp;&nbsp;3 comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#" data-aos="fade-down"
                                data-aos-easing="linear"
                                data-aos-duration="1500">All human beings on the earth should have fun because the worls is mess!</a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="post-content" data-aos="fade-up"
                        data-aos-anchor-placement="top-center">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-2.jpg" class="img" alt="Blog1">
                                </div>
                                <div class="post-info flex-row">
                                    
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                    <span>&nbsp;&nbsp;3 comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#" data-aos="fade-down"
                                data-aos-easing="linear"
                                data-aos-duration="1500">All human beings on the earth should have fun because the worls is mess!</a>
                            </div>
                        </div>
                    </div>
                    <div class="popular-post">
                        <div class="post-content" data-aos="fade-up"
                        data-aos-anchor-placement="top-center">
                            <div class="post-image">
                                <div>
                                    <img src="./assets/popular-post/m-blog-3.jpg" class="img" alt="Blog1">
                                </div>
                                <div class="post-info flex-row">
                                    
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp; February 2/10/2021</span>
                                    <span>&nbsp;&nbsp;3 comments</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="#" data-aos="fade-down"
                                data-aos-easing="linear"
                                data-aos-duration="1500">All human beings on the earth should have fun because the worls is mess!</a>
                            </div>
                        </div>
                    </div>
                    <div class="newsletter" data-aos="fade-down-left">
                        <h2>Newsletter</h2>
                        <div class="form-element" data-aos="fade-down-left">
                            <input type="text" class="input-element" placeholder="Email" data-aos="fade-down-left">
                            <button class="btn form-btn" data-aos="fade-down-left">Subscribe</button>
                        </div>
                    </div>
                    <div class="popular-tags">
                        <h2>Popular Tags</h2>
                        <div class="tags flex-row">
                            <span class="tag" data-aos="fade-down" data-aos-delay="100">Software</span>
                            <span class="tag" data-aos="fade-left" data-aos-delay="200">Technology</span>
                            <span class="tag" data-aos="fade-in" data-aos-delay="300">Illustration</span>
                            <span class="tag" data-aos="fade-right" data-aos-delay="400">Travel</span>
                            <span class="tag" data-aos="fade-left" data-aos-delay="500">Design</span>
                            <span class="tag" data-aos="fade-right" data-aos-delay="600">Lifestyle</span>
                            <span class="tag" data-aos="fade-in" data-aos-delay="700">Project</span>
                            <span class="tag" data-aos="fade-down" data-aos-delay="800">Love</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <!-- End of Site Content -->
    </main>

     <!-----------x------------ main site section ------------x------------->

     <!-- Footer -->
     <footer class="footer">
         <div class="container">
             <div class="about-us" data-aos="zoom-in" data-aos-delay="100">
                 <h2 data-aos="zoom-in">About Us</h2>
                 <p data-aos="fade-down"
                 data-aos-easing="linear"
                 data-aos-duration="1500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, tenetur dolor,
                      architecto non neque odio, soluta esse adipisci dicta obcaecati odit maxime
                       vitae ex sint possimus amet eveniet delectus rem.</p>
             </div>
             <div class="newsletter" data-aos="zoom-in" data-aos-delay="200">
                 <h2 data-aos="zoom-in">Newsletter</h2>
                 <p data-aos="zoom-in">Stay update with our latest</p>
                 <div class="form-element" data-aos="zoom-in">
                     <input type="text" placeholder="Email" data-aos="zoom-in"><span><i class="fas fa-chevron-right"></i>
                     </span>
                 </div>
             </div>
             <div class="instagram" data-aos="zoom-in-left" data-aos-delay="300">
                 <h2 data-aos="zoom-in">Instagram</h2>
                 <div class="flex-row" data-aos="zoom-in">
                     <img src="./assets/instagram/thumb-card3.png" alt="inst1" data-aos="zoom-in">
                     <img src="./assets/instagram/thumb-card4.png" alt="inst2" data-aos="zoom-in">
                     <img src="./assets/instagram/thumb-card5.png" alt="inst3" data-aos="zoom-in">
                 </div>
                 <div class="flex-row">
                     <img src="./assets/instagram/thumb-card6.png" alt="inst4" data-aos="zoom-in">
                     <img src="./assets/instagram/thumb-card7.png" alt="inst5" data-aos="zoom-in">
                     <img src="./assets/instagram/thumb-card8.png" alt="inst6" data-aos="zoom-in">
                 </div>
             </div>
             <div class="follow" data-aos="zoom-in-left" data-aos-delay="400">
                 <h2 data-aos="zoom-in">Follow Us</h2>
                 <p data-aos="zoom-in">Let us be social</p>
                 <div>
                     <i class="fab fa-facebook-f" data-aos="zoom-in"></i>
                     <i class="fab fa-twitter" data-aos="zoom-in"></i>
                     <i class="fab fa-instagram" data-aos="zoom-in"></i>
                     <i class="fab fa-youtube" data-aos="zoom-in"></i>
                 </div>
             </div>
         </div>

         <div class="rights flex-row">
             <h4 class="footer-text" data-aos="zoom-in" data-aos-delay="500">
                 Copyright ©2021 All rights recerved|Made by 
                 <a href="#" target="_black" data-aos="zoom-in">Daily Tuition <i class="fab fa-youtube"></i> channel</a>
             </h4>
         </div>

         <div class="move-up" data-aos="zoom-in-left" data-aos-delay="600" >
             <span data-aos="zoom-in"><i class="fas fa-arrow-circle-up fa-2x"></i></span>
         </div>
     </footer>
     <!-- End of Footer -->




    <!-- Jquery Library File -->
    <script src="./js/jquery3.5.1.min.js"></script>

        <!-- AOS Library js File -->
        <script src="./js/aos.js"></script>
        <script src="./js/login.js"></script>

    <!-- Custom JavaScript file -->
    <script src="./js/main.js"></script>

    <!-- Owl-Carousel js file -->
    <script src="./js/owl.carousel.min.js"></script>

</body>
</html>