

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

if (!isset($_SESSION['id'])) {

    echo '
    
        <script>
        
        alert("please you need to login first to see this page or if you don\'t have account create and login");

        window.location="index.php";
        </script>
    ';
    # code...
}


?>


<!DOCTYPE html>
<html>
<head>
        <title>Basic Pricing| Eshba Logisitics</title>
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
                                    <h2 class="section-title no-margin"> Get a quote</h2>
                                    <p class="fs-16 no-margin"> Our on-field personelle will contact you within 24 hours </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Quote</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Quote -->
                <section class="pt-80 quote-wrap">    
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="eshba/img/block/Courier-Man.png" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" > calculate your cost </h2>
                                <p class="fs-16 wow fadeInUp" data-wow-offset="50" data-wow-delay=".25s">Please provide information about your items within the form.
                                    <br>Kindly make sure you have provided correct information
                                </p>
                                <div class="calculate-form">
                                    <form class="row" id="basicfrm">
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Full name </label></div>
                                            <div class="col-sm-9"> <input type="text" placeholder="" name="name" value="<?php echo ($_SESSION['fullname']);?>" class="form-control"> </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2">Collection point </label></div>
                                            <div class="col-sm-9"> <input type="text" name="cp" placeholder="" class="form-control"> </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2">Receiving point </label></div>
                                            <div class="col-sm-9"> <input type="text" name="rp" placeholder="" class="form-control"> </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> recieve date: </label></div>
                                            <div class="col-sm-9"> <input type="date" name="rd" placeholder="" class="form-control"> </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Package (1): </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                            <select class="selectpicker form-control" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="select your package" id="s1"  name="item1">
                                                <option value="Small-fridge">Fridge (S)-&#8373;30</option>
                                                <option value="Large-fridge">Fridge (L)-&#8373;35</option>
                                                <option value="Small-jutebag">Jutebag (S)-&#8373;20</option>
                                                <option value="Large-jutebag"> Jutebag (L)-&#8373;25</option>
                                                <option value="Small-luggage">Luggage (S)-&#8373;25</option>
                                                <option value="large-luggage">Luggage (L)-&#8373;30</option>
                                            </select>
                                                </div>
                                                <div class="col-sm-6 no-pad">
                                                    <input type="text" id="q1" placeholder="Enter Quantity" name="quant1" class="form-control to fw-600">
                                                </div>
                                                <div class="col-sm-4 no-pad">
                                                    <input type="text" id="p1" placeholder="price" name="p1" class="form-control to fw-600" readonly>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Package (2): </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                            <select class="selectpicker form-control" id="s2" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="select your package" name="item2">
                                                <option value="Small-fridge">Fridge (S)-&#8373;30</option>
                                                <option value="Large-fridge">Fridge (L)-&#8373;35</option>
                                                <option value="Small-jutebag">Jutebag (S)-&#8373;20</option>
                                                <option value="Large-jutebag"> Jutebag (L)-&#8373;25</option>
                                                <option value="Small-luggage">Luggage (S)-&#8373;25</option>
                                                <option value="large-luggage">Luggage (L)-&#8373;30</option>
                                            </select>
                                                </div>
                                                <div class="col-sm-6 no-pad">
                                                    <input type="text" id="q2" placeholder="Enter Quantity" name="quant2" class="form-control to fw-600">
                                                </div>

                                                <div class="col-sm-4 no-pad">
                                                    <input type="text" id="p2" placeholder="price" name="p2" class="form-control to fw-600" readonly>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Package (3): </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                            <select class="selectpicker form-control" id="s3" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="select your package" name="item3">
                                                <option value="Small-fridge">Fridge (S)-&#8373;30</option>
                                                <option value="Large-fridge">Fridge (L)-&#8373;35</option>
                                                <option value="Small-jutebag">Jutebag (S)-&#8373;20</option>
                                                <option value="Large-jutebag"> Jutebag (L)-&#8373;25</option>
                                                <option value="Small-luggage">Luggage (S)-&#8373;25</option>
                                                <option value="large-luggage">Luggage (L)-&#8373;30</option>
                                            </select>
                                                </div>
                                                <div class="col-sm-6 no-pad">
                                                    <input type="number" id="q3" placeholder="Enter Quantity" name="quant3" class="form-control to fw-600">
                                                </div>

                                                <div class="col-sm-4 no-pad">
                                                    <input type="text" id="p3" placeholder="price" name="p3" class="form-control to fw-600" readonly>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> Package (4): </label></div>
                                            <div class="col-sm-9"> 
                                                <div class="col-sm-6 no-pad">
                                            <select class="selectpicker form-control" id="s4" data-live-search="true" data-width="100%"
                                                    data-toggle="tooltip" title="select your package" name="item4">
                                                <option value="Small-fridge">Fridge (S)-&#8373;30</option>
                                                <option value="Large-fridge">Fridge (L)-&#8373;35</option>
                                                <option value="Small-jutebag">Jutebag (S)-&#8373;20</option>
                                                <option value="Large-jutebag"> Jutebag (L)-&#8373;25</option>
                                                <option value="Small-luggage">Luggage (S)-&#8373;25</option>
                                                <option value="large-luggage">Luggage (L)-&#8373;30</option>
                                            </select>
                                                </div>
                                                <div class="col-sm-6 no-pad">
                                                    <input type="text" placeholder="Enter Quantity" name="quant4" id="q4" class="form-control to fw-600">
                                                </div>

                                                <div class="col-sm-4 no-pad">
                                                    <input type="text" id="p4" placeholder="price" name="p4" class="form-control to fw-600" readonly>
                                                </div>


                                                <div class="col-sm-4 no-pad">
                                                    <input type="hidden" id="fin" placeholder="price" class="form-control to fw-600" readonly name="totalprice">
                                                </div>
                                                <div class="col-sm-4 no-pad">
                                                    <input type="hidden" id="" placeholder="price" class="form-control to fw-600" readonly name="uid" value="<?php echo ($_SESSION['id']);?>"> 
                                                </div>

                                                <div class="col-sm-4 no-pad">
                                                    <input type="hidden" id="" placeholder="price" class="form-control to fw-600" readonly name="email" value="<?php echo ($_SESSION['email']);?>"> 
                                                </div>
                                                <div class="col-sm-4 no-pad">
                                                    <input type="hidden" id="" placeholder="price" class="form-control to fw-600" readonly name="contact" value="<?php echo ($_SESSION['contact']);?>"> 
                                                </div>

                                                <div class="col-sm-4 no-pad">
                                                    <input type="hidden" id="" placeholder="price" class="form-control to fw-600" readonly name="address" value="<?php echo ($_SESSION['address']);?>"> 
                                                </div>

                                                

                                                
                                            </div>                                        
                                        </div>      
                                                 

                                       
                                            <div class="repo">
                                                <div class="alert alert-info" id="loadee" role="alert" style="color:white;background-color:blue;text-align:center;">
                                                        please Wait! ...  <img src="loading.gif" style="width:20px;height:20px;">
                                                </div>
                                            </div>
                                        <!--calculate the cost here-->
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <div class="btn-1"> <span> Total Cost: </span> <span class="btn-1 dark">&#8373;<span id="ov"></span> </span>  </div>
                                            </div>
                                        </div>



                                        <br>

                                        <div class="col-sm-4 no-pad" style="margin-left:140px;">
                                                  <input type="checkbox" checked  name="" id="tnc"> <a href="terms.html"><span style="font-size:15px;">Agree to terms </span></a>
                                                </div><br><br>
                                               
                                        <!--/calculate cost-->
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <input type="submit" style="background-color:green;" class="btn-1" value="Print Invoice">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="pt-80 hidden-lg"></div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Quote -->


                <!-- Steps -->
                <section class="steps-wrap mask-overlay pad-80">                
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 1. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Order</h2> 
                                    <p class="gray-clr">Fill details to place an order to our <br> courier service</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 2. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Wait</h2> 
                                    <p class="gray-clr">Our fields personelles will locate you at your door step to<br> to recieve the items</p>                                            
                                </div>  
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="font-2 fs-50 wow fadeInLeft" data-wow-offset="50" data-wow-delay=".20s"> 3. </div> 
                                <div class="steps-content wow fadeInLeft" data-wow-offset="50" data-wow-delay=".25s"> 
                                    <h2 class="title-3">Deliver</h2> 
                                    <p class="gray-clr">Items will be safely stored in our warehouse till the said time of collection</p>                                            
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div class="step-img wow slideInRight" data-wow-offset="50" data-wow-delay=".20s"> <img src="assets/img/block/step-img.png" alt="" /> </div>
                </section>
                <!-- /.Steps -->

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
