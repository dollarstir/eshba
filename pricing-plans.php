
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
$_SESSION['pid']=3; 
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
                <?php include 'core.php';?>
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
                                    <h2 class="section-title no-margin">Pricing & plans</h2>
                                    <p class="fs-16 no-margin">Select option to book your pricing</p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Pricing</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Pricing & Plans -->
                <section class="pricing-wrap pad-80">                
                    <div class="theme-container container">                            
                        <div class="row pb-50">
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">GHC</h2>
                                        <p>Option 1</p>
                                        <div class="btn-1">Premium</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Ashanti <span class="gray-clr">&LT; 110</span> </li>
                                            <li> Ahafo <span class="gray-clr">  120</span> </li>
                                            <li> Bono <span class="gray-clr"> 120</span> </li>
                                            
                                        </ul>
                                    </div><!---->
                                    <div class="order">
                                        <a href="get-quote.php" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                            <div class="col-md-4 active white-clr wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="pricing-box theme-clr-bg">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">GHC</h2>
                                        <p>Option 2</p>
                                        <div class="btn-1 dark">Premium</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Bono East <span class="white-clr"> 120</span> </li>
                                            <li> Greater Accra <span class="white-clr"> 150</span> </li>
                                            <li> Central: <span class="white-clr">  140</span> </li>                                       
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="get-quote.php" class="title-1 white-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>                                
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="title-wrap text-center">
                                        <h2 class="section-title fs-36">GHC</h2>
                                        <p>Option 3</p>
                                        <div class="btn-1">Premium</div>
                                    </div>
                                    <div class="price-content">                                    
                                        <ul class="title-2">
                                            <li> Western : <span class="gray-clr"> 150</span> </li>
                                            <li> Western North: <span class="gray-clr">  140</span> </li>  
                                        </ul>
                                    </div>
                                    <div class="order">
                                        <a href="get-quote.php" class="title-1 theme-clr"> <span class="transition"> order now </span> <i class="arrow_right fs-26"></i> </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row pricing-2 pad-50">
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="block-inline text-center">
                                        <div class="pad-10"></div>
                                        <h3 class="title-2"> standard </h3>
                                        <h2 class="section-title fs-36">GHC</h2>
                                        <p>Option 4</p>
                                    </div>
                                    <div class="price-content-2">                                    
                                        <ul class="title-2">
                                            <li> Volta : <span class="gray-clr">&LT; 300</span> </li>
                                            <li> Oti Region: <span class="gray-clr">  350</span> </li>
                                            <li> Northern: <span class="gray-clr"> 350</span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-center order-2">
                                        <a href="get-quote.php" class="btn-round"> order now </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s">
                                <div class="pricing-box active">
                                    <div class="block-inline text-center">
                                        <div class="pad-10"></div>
                                        <h3 class="title-2"> Standard </h3>
                                        <h2 class="section-title fs-36"> GHC</h2>
                                        <p>Option 5</p>
                                    </div>
                                    <div class="price-content-2">                                    
                                        <ul class="title-2">
                                            <li> Savannah: <span class="gray-clr"> 350</span> </li>
                                            <li> Upper East: <span class="gray-clr">&LT; 400</span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-center order-2">
                                        <a href="get-quote.php" class="btn-round"> order now </a>
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-md-4 wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s">
                                <div class="pricing-box clrbg-before clrbg-after transition">
                                    <div class="block-inline text-center">
                                        <div class="pad-10"></div>
                                        <h3 class="title-2"> standard </h3>
                                        <h2 class="section-title fs-36">GHC </h2>
                                        <p>Option 6</p>
                                    </div>
                                    <div class="price-content-2">                                    
                                        <ul class="title-2">
                                            <li> Upper West: <span class="gray-clr">&LT; 400</span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-center order-2">
                                        <a href="get-quote.php" class="btn-round"> order now </a>
                                    </div>
                                    <div class="pricing-hover clrbg-before clrbg-after transition"></div>
                                </div>
                            </div>
                        </div>
                    </div>               
                </section>
              
            </article>
           
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

         <!-- dollarstir js -->
         <script src="dollarsoft.js"></script>

    </body>


</html>
