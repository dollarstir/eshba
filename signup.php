
<!-- 
    Developed By Frederick Ennin (CEO of Dollarsoft ) 
    Contact: +233556676471
    Email: dollarsoft463@gmail.com
    Website: http://www.dollarstir.com
    Youtube: http://www.youtube.com/DollarsoftCorporation
    Started on: saturday 11th April, 2020


-->


<!DOCTYPE html>
<html>
<head>
        <title>Sign Up | Eshba Logisitics</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap Css -->
        <link rel="stylesheet" type="text/css" href="eshba/plugins/bootstrap-3.3.6/css/bootstrap.min.css">  
        <?php include 'core.php';?>      
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
                                    <li> <h6 class="font2-light"> Come to office </h6> <p class="theme-clr  font2-title1"> KNUST, Kumasi - Ghana </p> </li>
                                    <li> <h6 class="font2-light"> Want to meet? </h6> <p class="theme-clr  font2-title1"> Mon-Sat,9am-6pm </p> </li>
                                    <li> <h6 class="font2-light"> Need a help? </h6> <p class="theme-clr font2-title1"> +233-544-883-0149 </p></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.Header Topbar -->

                <!-- Header Logo & Navigation -->
                <nav class="menu-bar font2-title1 white-clr">
                    <div class="theme-container container">
                        <div class="row">
                            <div class="col-xs-12 visible-xs"> 
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="visible-xs">                                
                                    <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 black-bg"> sign in </a>
                                </div> 
                            </div>
                            <div class="col-md-10 col-sm-10 col-xs-12 fs-12">  
                                <a class="sticky-logo hidden-sm" href="index-2.php"> <img alt="" src="eshba/img/logo/eshba-logo3.jpg" /> </a>
                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                    <ul class="navbar-nav theme-menu">                                        
                                        <li class="dropdown active">
                                            <a href="index.php" aria-haspopup="true" >Home </a>
                                        </li>
                                        <li> <a href="about-us.php">about</a> </li>
                                        <li> <a href="tracking.php"> tracking </a> </li>
                                        <li> <a href="pricing-plans.php"> pricing </a> </li>
                                        <li> <a href="contact-us.php"> contact </a> </li>
                                        <li><span class="search fa fa-search white-clr transition"> </span></li>
                                    </ul>                                                      
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 text-right hidden-xs">                                
                                <a data-toggle="modal" href="#login-popup" class="sign-in fs-12 black-bg"> sign in </a>
                            </div>                            
                        </div>
                    </div>
                </nav>
                <!-- /.Header Logo & Navigation -->

            </header>
            <!-- /.Header -->
<!--sign up panel-->
            <div class="modal-content">   
                <div class="login-wrap text-center">                        
                    <h2 class="title-3"> sign up </h2>
                    <p> Sign in to <strong> Eshba Logistics and Warehousing Services </strong> for getting all details </p>                        

                    <div class="login-form clrbg-before">
                        <form class="login" id="regfrm">
                            <div class="form-group"><input type="text" placeholder="First Name" name="fname" class="form-control"></div>
                            <div class="form-group"><input type="text" placeholder="Last Name" name='lname' class="form-control"></div>
                            <div class="form-group"><input type="email" placeholder="Email address" name="email" class="form-control"></div>
                            <div class="form-group"><input type="password" placeholder="Password" name="password" class="form-control"></div>
                            <div class="form-group"><input type="Number" placeholder="Mobile Contact" name="contact" class="form-control"></div>
                            <div class="form-group"><input type="text" placeholder="Address" name="address" class="form-control"></div>
                            <div class="form-group">

                            <div class="repo">
                                <div class="alert alert-info" id="loadee" role="alert" style="color:white;background-color:blue;">
                                   please Wait! ...  <img src="loading.gif" style="width:20px;height:20px;">
                                </div>
                            </div>

                            <div class="form-group">
                               
                            
                                <button class="btn-1 " type="submit"> Sign Up now </button>
                            </div>
                        </form>
                       <a href="password-recovery.php" class="gray-clr"> Forgot Passoword? </a>                           
                    </div>                        
                </div>
            </div>

          

            <?php dm();?>


        </main>
        

       
        <div class="to-top theme-clr-bg transition"> <i class="fa fa-angle-up"></i> </div>

       
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
        <!-- Dollarsoft js -->

        <script src="dollarsoft.js"></script>

    </body>


</html>
