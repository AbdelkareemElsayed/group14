<?php 
  require './dashboard/helpers/dbConnection.php';
  require './dashboard/helpers/functions.php';

################################################################################################################
  $sql = "select articles.* , categories.title as cat_title ,  users.name as UserName , users.image as UserImage  from articles inner join categories on articles.cat_id = categories.id  inner join users on articles.addedBy = users.id ";
  $op = DoQuery($sql);
################################################################################################################


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themeht.com/loptus/html/blog-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 12:21:01 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="HTML5 Template" />
<meta name="author" content="www.themeht.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Loptus - Digital Marketing Agency Responsive HTML5 Template</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="resources/images/favicon.ico" />

<!-- inject css start -->

<!--== bootstrap -->
<link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

<!--== animate -->
<link href="resources/css/animate.css" rel="stylesheet" type="text/css" />

<!--== fontawesome -->
<link href="resources/css/fontawesome-all.css" rel="stylesheet" type="text/css" />

<!--== themify -->
<link href="resources/css/themify-icons.css" rel="stylesheet" type="text/css" />

<!--== audioplayer -->
<link href="resources/css/audioplayer/plyr.css" rel="stylesheet" type="text/css" />

<!--== magnific-popup -->
<link href="resources/css/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

<!--== owl-carousel -->
<link href="resources/css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />

<!--== base -->
<link href="resources/css/base.css" rel="stylesheet" type="text/css" />

<!--== shortcodes -->
<link href="resources/css/shortcodes.css" rel="stylesheet" type="text/css" />

<!--== default-theme -->
<link href="resources/css/style.css" rel="stylesheet" type="text/css" />

<!--== responsive -->
<link href="resources/css/responsive.css" rel="stylesheet" type="text/css" />

<!-- inject css end -->

</head>

<body>

<!-- page wrapper start -->

<div class="page-wrapper">

<!-- preloader start -->

<div id="ht-preloader">
  <div class="loader clear-loader">
    <div class="loader-text">Loading</div>
    <div class="loader-dots"> <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>

<!-- preloader end -->


<!--header start-->

<header id="site-header" class="header">
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Navbar -->
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="index-2.html">
              <img id="logo-img" class="img-center" src="resources/images/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> <span></span>
              <span></span>
              <span></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto mr-auto">
                <!-- Home -->
                <li class="nav-item dropdown" data-toggle="hover"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a href="index-2.html">Home 1</a>
                      </li>
                      <li><a href="index-3.html">Home 2</a>
                      </li>
                      <li><a href="index-4.html">Home 3</a>
                      </li>
                      <li><a href="index-5.html">Home 4</a>
                      </li>
                      <li><a href="index-6.html">Home 5</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item dropdown" data-toggle="hover"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a href="about-us.html">About Us 1</a>
                      </li>
                      <li><a href="about-us-2.html">About Us 2</a>
                      </li>
                      <li><a href="team.html">Team</a>
                      </li>
                      <li><a href="team-single.html">Team Single</a>
                      </li>
                      <li><a href="faq.html">Faq</a>
                      </li>
                      <li class="dropdown dropdown-submenu" data-toggle="hover"> <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Case Studies
                    </a>
                        <ul class="dropdown-menu">
                          <li><a href="case-studies-grid-2.html">Case Studies Column 2</a>
                          </li>
                          <li><a href="case-studies-grid-3.html">Case Studies Column 3</a>
                          </li>
                          <li><a href="case-studies-fullwidth.html">Case Studies FullWidth</a>
                          </li>
                          <li><a href="case-studies-single.html">Case Studies Single</a>
                          </li>
                        </ul>
                      </li>
                      <li class="dropdown dropdown-submenu" data-toggle="hover"> <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      feature
                    </a>
                        <ul class="dropdown-menu">
                          <li><a href="shortcode-accordions.html">Accordion</a>
                          </li>
                          <li><a href="shortcode-blog-post.html">Blog Post</a>
                          </li>
                          <li><a href="shortcode-counter.html">Counter</a>
                          </li>
                          <li><a href="shortcode-feature-box.html">Featured Box</a>
                          </li>
                          <li><a href="shortcode-pricing.html">Pricing Table</a>
                          </li>
                          <li><a href="shortcode-team.html">Team</a>
                          </li>
                          <li><a href="shortcode-testimonial.html">Testimonials</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="coming-soon.html">Coming Soon</a>
                      </li>
                      <li><a href="error-404.html">Error 404</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item dropdown" data-toggle="hover"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a href="service.html">Service 1</a>
                      </li>
                      <li><a href="service-2.html">Service 2</a>
                      </li>
                      <li><a href="service-single.html">Service Single</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item dropdown" data-toggle="hover"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Project</a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a href="project-grid-2.html">Project Grid 2</a>
                      </li>
                      <li><a href="project-grid-3.html">Project Grid 3</a>
                      </li>
                      <li> <a href="project-fullwidth.html">Project FullWidth</a>
                      </li>
                      <li> <a href="project-details.html">Project Details</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item dropdown" data-toggle="hover"> <a class="nav-link active dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a href="blog-classic.html">Blog Classic</a>
                      </li>
                      <li><a href="blog-grid-2.html">Blog Grid 2</a>
                      </li>
                      <li><a href="blog-grid-3.html">Blog Grid 3</a>
                      </li>
                      <li><a href="blog-left-sidebar.html">Blog left sidebar</a>
                      </li>
                      <li><a href="blog-right-sidebar.html">Blog right sidebar</a>
                      </li>
                      <li><a href="blog-details.html">Blog Single</a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item dropdown" data-toggle="hover"> <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                  <div class="dropdown-menu">
                    <ul class="list-unstyled">
                      <li><a href="contact.html">Contact us 1</a>
                      </li>
                      <li><a href="contact-2.html">Contact us 2</a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
            <div class="right-nav align-items-center d-flex justify-content-end list-inline"> <a class="btn btn-white btn-sm" href="login.html">Login</a>
              <div class="search">
                <div class="search-content">
                  <div class="search-button"> <i class="fas fa-search"></i>
                  </div>
                  <form id="search-form" class="search-form">
                    <input type="search" class="search-input" placeholder="Search Here...">
                  </form>
                </div>
              </div> <a href="#" class="ht-nav-toggle"><span></span></a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

<nav id="ht-main-nav"> <a href="#" class="ht-nav-toggle active"><span></span></a>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img class="img-fluid side-logo mb-3" src="resources/images/logo.png" alt="">
        <p class="mb-5">Loptus - Digital Marketing Agency Responsive HTML5 Template is Most PowerFull template 2018 For Everyone, Start working with an company that provide everything you need to generate awareness.</p>
        <div class="form-info">
          <h4 class="title">Contact info</h4>
          <ul class="contact-info list-unstyled mt-4">
            <li class="mb-4"><i class="flaticon-location"></i><span>Address:</span>
              <p>423B, Road Wordwide Country, USA</p>
            </li>
            <li class="mb-4"><i class="flaticon-call"></i><span>Phone:</span><a href="tel:+912345678900">+91-234-567-8900</a>
            </li>
            <li><i class="flaticon-email"></i><span>Email</span><a href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>
            </li>
          </ul>
        </div>
        <div class="social-icons social-colored mt-5">
          <ul class="list-inline">
            <li class="mb-2 social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="mb-2 social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="mb-2 social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
            </li>
            <li class="mb-2 social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</nav>

<!--header end-->


<!--page title start-->

<section class="page-title o-hidden text-center grey-bg bg-contain animatedBackground" data-bg-img="resources/images/pattern/05.png">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-12">
        <h1 class="title">Blog Grid 2</h1>
        <nav aria-label="breadcrumb" class="page-breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Blog</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog Grid 2</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <div class="page-title-pattern"><img class="img-fluid" src="images/bg/06.png" alt=""></div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">

<!--blog start-->

<section>
  <div class="container">
    <div class="row">
     



       <?php 
       
          while($data = mysqli_fetch_assoc($op)){
       ?>
    
    <div class="col-lg-6 col-md-6">
        <div class="post">
          <div class="post-image">
            <img class="img-fluid h-100 w-100" src="<?php echo url('Articles/uploads/'.$data['image'])?>" alt="">
          </div>
          <div class="post-desc">
            <div class="post-date"> <?php echo date('d',$data['date'])?> <span><?php echo date('F Y',$data['date'])?></span>
            </div>
            <div class="post-title">
              <h5><a href="blog-details.html"><?php echo $data['title'];?></a></h5>
            </div>
            <p><?php echo    substr($data['content'],0,80);?></p>
            <div class="post-author">
              <div class="post-author-img">
                <img class="img-fluid" src="<?php echo url('Admins/uploads/'.$data['UserImage'])?>" alt="">
              </div> <span><?php echo $data['UserName'];?></span>
            </div>
          </div>
        </div>
      </div>

     <?php } ?>
     




    </div>
  </div>
</section>

<!--blog end-->


<!--counter start-->

<section class="grey-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6">
        <div class="counter style-2">
          <img class="img-center" src="images/counter/01.png" alt=""> <span class="count-number" data-to="2304" data-speed="10000">2304</span>
          <h5>Project Done</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 xs-mt-5">
        <div class="counter style-2">
          <img class="img-center" src="images/counter/02.png" alt=""> <span class="count-number" data-to="2304" data-speed="10000">2304</span>
          <h5>Success Rate</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 sm-mt-5">
        <div class="counter style-2">
          <img class="img-center" src="images/counter/03.png" alt=""> <span class="count-number" data-to="2304" data-speed="10000">2304</span>
          <h5>Awards</h5>
        </div>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 sm-mt-5">
        <div class="counter style-2">
          <img class="img-center" src="images/counter/04.png" alt=""> <span class="count-number" data-to="2304" data-speed="10000">2304</span>
          <h5>Happy Client</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!--counter end-->


<!--client logo start-->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="ht-clients d-flex flex-wrap align-items-center text-center">
          <div class="clients-logo">
            <img class="img-center" src="images/client/07.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-center" src="images/client/08.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-center" src="images/client/09.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-center" src="images/client/10.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-center" src="images/client/11.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-center" src="images/client/12.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-center" src="images/client/12.png" alt="">
          </div>
          <div class="clients-logo">
            <img class="img-center" src="images/client/12.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--client logo end-->

</div>

<!--body content end--> 


<!--footer start-->

<footer class="footer white-bg pos-r o-hidden bg-contain" data-bg-img="images/pattern/01.png">
  <div class="round-p-animation"></div>
  <div class="primary-footer">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col-lg-4">
          <div class="ht-theme-info bg-contain bg-pos-r h-100 dark-bg text-white" data-bg-img="images/bg/02.png">
            <div class="footer-logo">
              <a href="index-2.html">
              <img class="img-center" src="images/logo-white.png" alt="">
              </a>
            </div>
            <p class="mb-3">Loptus Digital Marketing HTML5 Template Is fully responsible, Performance oriented theme, Build whatever you like with the Loptus, Loptus is the creative, modern HTML5 Template suitable for Your business.</p> <a class="btn-simple" href="#"><span>Read More <i class="fas fa-long-arrow-alt-right"></i></span></a>
            <div class="social-icons social-border circle social-hover mt-5">
              <h4 class="title">Follow Us</h4>
              <ul class="list-inline">
                <li class="social-facebook"><a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="social-twitter"><a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="social-gplus"><a href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
                <li class="social-linkedin"><a href="#"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="social-skype"><a href="#"><i class="fab fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-8 py-8 md-px-5">
          <div class="row">
            <div class="col-lg-6 col-md-6 footer-list">
              <h4 class="title">Useful Links</h4>
              <div class="row">
                <div class="col-sm-5">
                  <ul class="list-unstyled">
                    <li><a href="about-us.html">About Us</a>
                    </li>
                    <li><a href="service.html">Our Service</a>
                    </li>
                    <li><a href="case-studies-grid-3.html">Case Studies</a>
                    </li>
                    <li><a href="project-grid-3.html">Project</a>
                    </li>
                    <li><a href="faq.html">Faq</a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-7">
                  <ul class="list-unstyled">
                    <li><a href="team.html">Our Team</a>
                    </li>
                    <li><a href="blog-grid-3.html">Blog</a>
                    </li>
                    <li><a href="privacy-policy.html">Privacy Policy</a>
                    </li>
                    <li><a href="terms-and-conditions.html">Terms & Condition</a>
                    </li>
                    <li><a href="contact.html">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 sm-mt-5">
              <h4 class="title">Contact us</h4>
              <ul class="media-icon list-unstyled">
                <li>
                  <p class="mb-0">423B, Road Wordwide Country, USA</p>
                </li>
                <li><a href="mailto:themeht23@gmail.com">themeht23@gmail.com</a>
                </li>
                <li><a href="tel:+912345678900">+91-234-567-8900</a>
                </li>
                <li><a href="tel:+912345678900">+91-234-567-8900</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-10 col-md-12 mr-auto">
              <div class="align-items-center white-bg box-shadow px-3 py-3 radius d-md-flex justify-content-between">
                <h4 class="mb-0">NewsLetter</h4>
                <div class="subscribe-form sm-mt-2">
                  <form id="mc-form" class="group">
                    <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                    <input class="btn btn-theme" type="submit" name="subscribe" value="Subscribe">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer">
    <div class="container">
      <div class="copyright">
        <div class="row align-items-center">
          <div class="col-md-6"> <span>Copyright 2018 | All Rights Reserved</span>
          </div>
          <div class="col-md-6 text-md-right sm-mt-2"> <span>Loptus Theme by <a href="#">ThemeHt</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<!--footer end-->


</div>

<!-- page wrapper end -->


<!--back-to-top start-->

<div class="scroll-top"><a class="smoothscroll" href="#top"><i class="flaticon-upload"></i></a></div>

<!--back-to-top end-->

 
<!-- inject js start -->

<!--== jquery -->
<script src="resources/js/jquery.min.js"></script>

<!--== popper -->
<script src="resources/js/popper.min.js"></script>

<!--== bootstrap -->
<script src="resources/js/bootstrap.min.js"></script>

<!--== appear -->
<script src="resources/js/jquery.appear.js"></script> 

<!--== modernizr -->
<script src="resources/js/modernizr.js"></script> 

<!--== audioplayer -->
<script src="resources/js/audioplayer/plyr.min.js"></script>

<!--== magnific-popup -->
<script src="resources/js/magnific-popup/jquery.magnific-popup.min.js"></script> 

<!--== owl-carousel -->
<script src="resources/js/owl-carousel/owl.carousel.min.js"></script> 

<!--== counter -->
<script src="resources/js/counter/counter.js"></script> 

<!--== countdown -->
<script src="resources/js/countdown/jquery.countdown.min.js"></script> 

<!--== isotope -->
<script src="resources/js/isotope/isotope.pkgd.min.js"></script> 

<!--== mouse-parallax -->
<script src="resources/js/mouse-parallax/tweenmax.min.js"></script>
<script src="resources/js/mouse-parallax/jquery-parallax.js"></script> 

<!--== contact-form -->
<script src="resources/js/contact-form/contact-form.js"></script>

<!--== wow -->
<script src="resources/js/wow.min.js"></script>

<!--== theme-script -->
<script src="resources/js/theme-script.js"></script>

<!-- inject js end -->

</body>


<!-- Mirrored from themeht.com/loptus/html/blog-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Jun 2020 12:21:01 GMT -->
</html>