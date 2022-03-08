
<!-- 
    Developed By Frederick Ennin (CEO of Dollarsoft ) 
    Contact: +233556676471
    Email: dollarsoft463@gmail.com
    Website: http://www.dollarstir.com
    Youtube: http://www.youtube.com/DollarsoftCorporation
    Started on: saturday 11th April, 2020


-->

<?php

session_start();
$_SESSION['pid']= 1;

?>

<!DOCTYPE html>
<html>
<head>
        <title>Home | Eshba Logisitics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="eshba/plugins/bootstrap-3.3.6/css/bootstrap.min.css">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="eshba/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css">
        <!-- Fonts Css -->
        <link rel="stylesheet" type="text/css" href="eshba/plugins/font-awesome-4.6.1/css/font-awesome.min.css">
        
        <link rel="stylesheet" type="text/css" href="eshba/plugins/font-elegant/elegant.css">
        <!-- OwlCarousel2 Slider Css -->
        <link rel="stylesheet" type="text/css" href="eshba/plugins/owl.carousel.2/assets/owl.carousel.css">


        <!-- Animate Css -->       
        <link rel="stylesheet" type="text/css" href="eshba/css/animate.css">

        <!-- Main Css -->
        <link rel="stylesheet" type="text/css" href="eshba/css/theme.css">

      
        <!--[if lt IE 9]>
        <script src="assets/plugins/iesupport/html5shiv.js"></script>
        <?php include 'core.php';?>
        <script src="assets/plugins/iesupport/respond.js"></script>
        <![endif]-->
    </head>
    <body id="home">
        <!-- Preloader -->
        <div id="preloader">

            <div class="small1">
                <div class="small ball smallball1"></div>
                <div class="small ball smallball2"></div>
                <div class="small ball smallball3"></div>
                <div class="small ball smallball4"></div>
            </div>


            <div class="small2">
                <div class="small ball smallball5"></div>
                <div class="small ball smallball6"></div>
                <div class="small ball smallball7"></div>
                <div class="small ball smallball8"></div>
            </div>

            <div class="bigcon">
                <div class="big ball"></div>
            </div>

        </div>	
        <!-- /.Preloader -->	


        <!-- Main Wrapper -->        
        <main class="wrapper">

            <!-- Header -->
            <header class="header-main header-style3">

                <!-- Header Topbar -->
                <div class="top-bar2">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-md-2 col-sm-12">
                                <a class="navbar-logo" href="index.php"> <img src="eshba/img/logo/eshba-logo2.jpg" alt="logo" /> </a>
                            </div>
                            <div class="col-md-10 col-sm-12 fs-12 text-right">
                                <ul class="list-inline">
                                    <li> <h6 class="font2-light"> Come to office </h6> <p class="theme-clr  font2-title1"> Anwomaso, Kumasi - Ghana </p> </li>
                                    <li> <h6 class="font2-light"> Want to meet? </h6> <p class="theme-clr  font2-title1"> Mon-Sat,9am-6pm </p> </li>
                                    <li> <h6 class="font2-light"> Need a help? </h6> <p class="theme-clr font2-title1"> +233-544-883-0149 </p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                    <?php hnv();?>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->

            <!-- Content Wrapper -->
            <article> 
                <!-- Banner -->
                <section class="banner mask-overlay pad-120 white-clr">
                    <div class="container theme-container rel-div">
                        <img class="pt-10 effect animated fadeInLeft" alt="" src="eshba/img/icons/icon-1.png" />
                        <ul class="list-items fw-600 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">   
                            <li><a href="#">fast</a></li>
                            <li><a href="#">secured</a></li>
                            <li><a href="#">worldwide</a></li>
                        </ul>
                        <h2 class="section-title fs-48 effect animated wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> awesome logistics for <br> <span class="theme-clr"> courier </span> & <span class="theme-clr"> delivery </span> services </h2>
                    </div>
                    <div class="pad-50 visible-lg"></div>
                </section>
                <!-- /.Banner -->

                <!-- Track Product -->
                <section>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 track-prod clrbg-before wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">     
                                <h2 class="title-1"> track your product </h2> <span class="font2-light fs-12">Now you can track your product easily</span>
                                <div class="row">
                                    <form class="">
                                        <div class="col-md-7 col-sm-7">
                                            <div class="form-group">
                                                <input type="text" placeholder="Enter your product ID" required="" class="form-control box-shadow">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-sm-5">
                                            <div class="form-group">
                                                <a href="tracking.php"><button class="btn-1">track your product</button></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </section>
                <!-- /.Track Product -->

                <!-- About Us -->
                <section class="pad-80 about-wrap clrbg-before">
                    <span class="bg-text wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-us">
                                    <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> About Us </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Eshba is purely a customer based firm that specialises in logistics and warehousing services. 
                                        We have served our customers since 2017 with competitive services tailored to their satisfactory needs and approval</p>
                                    <ul class="feature">
                                        <li> 
                                            <img alt="" src="eshba/img/icons/icon-2.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">Fast delivery</h2> 
                                                <p>No delays in the delivery of your goods and items</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="eshba/img/icons/icon-3.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">secured service</h2> 
                                                <p>First class of secured delivery you can trust</p>                                            
                                            </div>  
                                        </li>
                                        <li> 
                                            <img alt="" src="eshba/img/icons/icon-1.png" class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" /> 
                                            <div class="feature-content wow rotateInDownRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                                <h2 class="title-1">door-to-door delivery</h2> 
                                                <p>Get you items delivered at your doorstep</p>                                            
                                            </div>  
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center">
                                <div class="pb-80 visible-lg"></div>
                                <img alt="" src="eshba/img/block/123.png" class="wow slideInRight" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.About Us -->

                <!-- Calculate Your Cost -->
                <section class="calculate pt-100">
                    <div class="theme-container container">  
                        <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> calculate </span>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="eshba/img/block/eshba-wycleff.jpg" alt="eshba-wycleff" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" > Forecast your courier cost </h2>
                                <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Please enter the details of your item to get the approximate cost  
                                </p>
                                <div class="calculate-form">
                                    <form class="row">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> height (cm): </label></div>
                                            <div class="col-sm-9"> <input type="text" placeholder="" class="form-control"> </div>                                        
                                        </div>
    <!--enter the point of collection to the point of delivery here-->
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> location: </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                                    <input type="text" placeholder="From" class="form-control from fw-600">
                                                </div>
                                                <div class="col-sm-6 no-pad">
                                                    <input type="text" placeholder="To" class="form-control to fw-600">
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Package: </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="form-group">
                                                    <select class="selectpicker form-control" data-live-search="true" data-width="100%"
                                                            data-toggle="tooltip" title="select your package">
                                                        <option>Fridge </option>
                                                        <option>Lugages</option>
                                                        <option>Jute Bags</option>
                                                        <options>Others</options>
                                                    </select>
                                                </div>                                           
                                            </div>                                        
                                        </div>                                    
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <div class="btn-1"> <span> Total Cost: </span> <span class="btn-1 dark"> GHC </span>  </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="pt-80 hidden-lg"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Calculate Your Cost -->

                <!-- Steps -->
                <section class="steps-wrap mask-overlay pad-80">                
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Order</h2> 
                                    <p class="gray-clr">Enter the details of the item. Our on-field personel will recieve the items at your call.</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Wait</h2> 
                                    <p class="gray-clr">Items will be processed for storage and transport</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Deliver</h2> 
                                    <p class="gray-clr">Your  item will be delivered at your doorstep in less than 14 weeks</p>                                            
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="eshba/img/block/step-img.png" alt="" /> </div>
                </section>
                <!-- /.Steps -->

                <!-- Product Delivery -->
                <section class="prod-delivery pad-120">
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-11 col-md-offset-1">
                                <div class="pt-120 rel-div">
                                    <div class="pb-50 hidden-xs"></div>
                                    <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Our Qualities <span class="theme-clr"> Mission  </span> and Vision </h2>
                                    <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">We at Eshba logitics believe in Efficiency, flexibility, compatibility, <br>composure, excellent
                                        customer services. <br>This is our hall mark of which we have been working with since 2017.
                                    </p>
                                    <p>We have a mission to be a unique logisitics and warehousing service providers through <br>
constatnt development, customer engagement and staff motivation</p>
<p>To be a leading name in the logistics and warehousing industry<br>
    with a special dedication to customer and worker satisfaction</p>
                                    <div class="pb-120 hidden-xs"></div>
                                </div>
                                <div class="delivery-img pt-10">
                                    <img alt="" src="eshba/img/block/delivery.png" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Product Delivery -->

                <!-- Testimonial -->
                <section class="testimonial mask-overlay">
                    <div class="theme-container container">               
                        <div class="testimonial-slider no-pagination pad-120">
                            <div class="item">
                                <div class="testimonial-img darkclr-border theme-clr font-2 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                    <img alt="eshbalogistics-efutu-audrey" src="eshba/img/block/eshbalogisitcs-audrey-afutu.png" />
                                    <span>,,</span>
                                </div>
                                <div class="testimonial-content">
                                    <p class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">  <i class="gray-clr fs-16">
                                            I am very satisfied with the services of Eshba logistics
                                        </i> </p>
                                    <h2 class="title-2 pt-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="white-clr fw-900"> Bushra Ahsani </a> </h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-img darkclr-border theme-clr font-2">
                                    <img alt="" src="eshba/img/block/eshbalogistics-elvis-yeboah-duako.png" />
                                    <span>,,</span>
                                </div>
                                <div class="testimonial-content">
                                    <p>  <i class="gray-clr fs-16">
      going home while I am graduationg, I am only thinking of ehsba logistics and warehousing company as the reliable and trusted company
      <br> to assist get all my stuffs with me.
                                        </i> </p>
                                    <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Arafat Usiph </a> </h2>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-img darkclr-border theme-clr font-2">
                                    <img alt="" src="eshba/img/block/eshbalogistics-usiph-arafat.png" />
                                    <span>,,</span>
                                </div>
                                <div class="testimonial-content">
                                    <p>  <i class="gray-clr fs-16">
                                            Eshba logistics and warehousing company is a great partner in times of stress to keep your luggages. 
                                            <br>They deliver on their promise
                                        </i> </p>
                                    <h2 class="title-2 pt-10"> <a href="#" class="white-clr fw-900"> Adusa Enerst</a> </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Testimonial -->

                <!-- Pricing & Plans -->
                <section class="pricing-wrap pt-120">                
                    <div class="theme-container container">    
                        <span class="bg-text center wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> Pricing </span>
                        <div class="title-wrap text-center  pb-50">
                            <h2 class="section-title wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">Pricing & plans</h2>
                            <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s">See our pricing & plans to get best service</p>
                        </div>
                        <div class="row">
                            <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".20s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">GHC 25 to 45</h2>
                                        <p>Keep with our warehouse</p>
                                        <div class="btn-1">basic</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Fridges: <span class="gray-clr">&LT; GHC 45</span> </li>
                                            <li> Lugages: <span class="gray-clr"> GHC 35</span> </li>
                                            <li> Jutebags: <span class="gray-clr"> GHC 30</span> </li>
                                            <li> Others: <span class="gray-clr"> GHC 25</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="basic-pricing.php" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                            <div class="col-md-4 active white-clr wow slideInUp" data-wow-offset="50" data-wow-delay=".25s">
                                <div class="pricing-box theme-clr-bg">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">GHC 100 to 400</h2>
                                        <p>Delivery within Ashanti, Sunyani and Brong Ahafo Regions</p>
                                        <div class="btn-1 dark">Premium</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Ashanti: <span class="white-clr"> GHC 100</span> </li>
                                            <li> Brong and Ahafo <span class="white-clr"> GHC 200</span> </li>
                                            <li> Greater Accra <span class="white-clr"> GHC 250</span> </li>
                                           
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="get-quote.php.php" class="title-1 white-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-md-4 wow slideInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">GHC 300 to 500</h2>
                                        <p>Other parts of Ghana</p>
                                        <div class="btn-1">standard</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Eastern: <span class="gray-clr"> GHC 280</span> </li>
                                            <li> Central: <span class="gray-clr"> GHC 350</span> </li>
                                            <li> Northern: <span class="gray-clr">GHC 400</span> </li>
                                            <li> Others: <span class="gray-clr">  GHC 500</span> </li>
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="get-quote.php.php" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                        </div>
                    </div>               
                </section>
                <!-- /.Pricing & Plans -->

                <!-- Contact us -->
                <section class="contact-wrap pad-120">   
                    <span class="bg-text wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> Contact </span>
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <div class="title-wrap">
                                    <h2 class="section-title wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s">contact us</h2>
                                    <p class="wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s" >Get in touch with us easily</p>
                                </div>
                                <ul class="contact-detail title-2">
                                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".20s"> <span>Head Office:</span> <p class="gray-clr"> +233-558-783-717 <br> +233-240-571-528 </p> </li>
                                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".25s"> <span>Accra:</span> <p class="gray-clr"> +233-501-590-149 <br>  </p> </li>
                                    <li class="wow slideInUp" data-wow-offset="50" data-wow-delay=".30s"> <span>Email</span> <p class="gray-clr"> support@eshbalogistics.com <br> info@eshbalogistics.com </p> </li>
                                </ul>
                            </div>                        
                        </div>
                    </div>               
                </section>
                <!-- /.Contact us -->
            </article>
            <!-- /.Content Wrapper -->

            <?php dm();?>


        </main>
        <!-- / Main Wrapper -->

        <!-- Top -->
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

        <!-- Popup: Login -->
        <div class="modal fade login-popup" id="login-popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">                
                <a class="close close-btn" data-dismiss="modal" aria-label="Close"> x </a>

                <div class="modal-content">   
                    <div class="login-wrap text-center">                        
                        <h2 class="title-3"> sign in </h2>
                        <p> Sign in to <strong> GO </strong> for getting all details </p>                        

                        <div class="login-form clrbg-before">
                            <form class="login" id="logfrm">
                                <div class="form-group"><input type="text" name="email" placeholder="Email address" class="form-control"></div>
                                <div class="form-group"><input type="password" name="password" placeholder="Password" class="form-control"></div>
                                <div class="form-group">
                                    <button class="btn-1 " type="submit"> Sign in now </button>
                                </div>

                                <div class="repo">
                                <div class="alert alert-info" id="loadee" role="alert" style="color:white;background-color:blue;">
                                   please Wait! ...  <img src="loading.gif" style="width:20px;height:20px;">
                                </div>
                            </div>
                            </form>
                           <a href="password-recovery.php" class="gray-clr"> Forgot Passoword? </a>                           
                        </div>                        
                    </div>
                    <div class="create-accnt">
                        <a href="signup.php" class="white-clr"> Don’t have an account? </a>  
                        <h2 class="title-2"> <a href="signup.php"
                             class="green-clr under-line">Create a free account</a> </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Popup: Login --> 

        <!-- Search Popup -->
        <div class="search-popup">
            <div>
                <div class="popup-box-inner">
                    <form>
                        <input class="search-query" type="text" placeholder="Search and hit enter" />
                    </form>
                </div>
            </div>
            <a href="javascript:void(0)" class="close-search"><i class="fa fa-close"></i></a>
        </div>
        <!-- / Search Popup -->

        <!-- Main Jquery JS -->
        <script src="eshba/js/jquery-2.2.4.min.js" type="text/javascript"></script>        
        <!-- Bootstrap JS -->
        <script src="eshba/plugins/bootstrap-3.3.6/js/bootstrap.min.js" type="text/javascript"></script>    
        <!-- Bootstrap Select JS -->
        <script src="eshba/plugins/bootstrap-select-1.10.0/dist/js/bootstrap-select.min.js" type="text/javascript"></script>    
        <!-- OwlCarousel2 Slider JS -->
        <script src="eshba/plugins/owl.carousel.2/owl.carousel.min.js" type="text/javascript"></script>   
        <!-- Sticky Header -->
        <script src="eshba/js/jquery.sticky.js"></script>
        <!-- Wow JS -->
        <script src="eshba/plugins/WOW-master/dist/wow.min.js" type="text/javascript"></script>   

        <!-- Slider JS -->        


        <!-- Theme JS -->
        <script src="eshba/js/theme.js" type="text/javascript"></script>

        <!-- dollarstir js -->
        <script src="dollarsoft.js"></script>

    </body>


</html>
