
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
$_SESSION['pid']=2;
?>

<!DOCTYPE html>
<html>
<head>
        <title>Tracking | Eshba Logisitics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="eshba/plugins/bootstrap-3.3.6/css/bootstrap.min.css">        
        <!-- Bootstrap Select Css -->
        <link rel="stylesheet" type="text/css" href="eshba/plugins/bootstrap-select-1.10.0/dist/css/bootstrap-select.min.css">
        <!-- Fonts Css -->
        <?php include 'core.php';?>
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
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> product tracking </h2>
                                    <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Track</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Tracking -->
                <section class="pt-50 pb-120 tracking-wrap">    
                    <div class="theme-container container ">  
                        <div class="row pad-10">
                            <div class="col-md-8 col-md-offset-2 tracking-form wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">     
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
                                                <button class="btn-1">track your product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-md-7 pad-30 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".30s"> 
                                <img alt="" src="eshba/img/block/product-1.jpg" />
                            </div>
                            <div class="col-md-5 pad-30 wow fadeInRight" data-wow-offset="50" data-wow-delay=".30s"> 
                                <div class="prod-info white-clr">
                                    <ul>
                                        <li> <span class="title-2">Product Name:</span> <span class="fs-16"><!--Enter name of products here--></span> </li>
                                        <li> <span class="title-2">Product id:</span> <span class="fs-16"><!--Enter ID of products here--></span> </li>
                                        <li> <span class="title-2">order date:</span> <span class="fs-16"><!--Enter order date here--></span> </li>
                                        <li> <span class="title-2">order status:</span> <span class="fs-16 theme-clr"><!--Enter order status here--></span> </li>
                                        <li> <span class="title-2">Pick up point:</span> <span class="fs-16"><!--Enter location of pickup here--></span> </li>
                                        <li> <span class="title-2">Charge</span> <span class="fs-16"><!---Enter destination location here--></span> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <div class="progress-status">
                                <span class="border-left"></span>
                                <span class="border-right"></span>
                                <span class="dot dot-left wow fadeIn" data-wow-offset="50" data-wow-delay=".40s"></span>
                                <span class="themeclr-border wow fadeIn" data-wow-offset="50" data-wow-delay=".50s">  <span class="dot dot-center theme-clr-bg"></span> </span>
                                <span class="dot dot-right wow fadeIn" data-wow-offset="50" data-wow-delay=".60s"></span>
                            </div>
                            <div class="row progress-content upper-text">
                                <div class="col-md-3 col-xs-8 col-sm-2">
                                    <p class="fs-12 no-margin"> FROM </p>
                                    <h2 class="title-1 no-margin">London<!--state the current point of pickup here--></h2>
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-3">                              
                                </div>
                                <div class="col-md-4 col-xs-8 col-sm-4 text-center">
                                    <p class="fs-12 no-margin"> currently in </p>
                                    <h2 class="title-1 no-margin">Our warehouse</h2>
                                </div>
                                <div class="col-md-1 col-xs-8 col-sm-1 no-pad">
                                    <p class="fs-12 no-margin"> [ <b class="black-clr">2 DAYS </b> ] </p>                                
                                </div>
                                <div class="col-md-2 col-xs-8 col-sm-2 text-right">
                                    <p class="fs-12 no-margin"> to </p>
                                    <h2 class="title-1 no-margin"><!--State site of destination--></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Tracking -->

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
