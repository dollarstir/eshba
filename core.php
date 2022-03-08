<?php

// Developed By Frederick Ennin (CEO of Dollarsoft ) 
// Contact: +233556676471
// Email: dollarsoft463@gmail.com
// Website: http://www.dollarstir.com
// Youtube: http://www.youtube.com/DollarsoftCorporation
// Started on: saturday 11th April, 2020




function reg(){
    include 'db.php';
    require_once 'send.php';
    extract($_POST);

    if (empty($fname)) {
        
        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                    Please enter firstname
               </div>';
    }
    elseif (empty($lname)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        Please enter Last Name
   </div>';
        # code...
    }

    elseif (empty($email)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        Please enter Email address
   </div>';
        # code...
    }

    elseif (empty($password)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        Please enter password
   </div>';
        # code...
    }

    elseif (empty($contact)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        Please enter your  phone number
   </div>';
        # code...
    }

    elseif (!preg_match("/^[0-9]{10,13}$/",$contact)){
            
        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        Please enter your valid phone number
   </div>';

    }

    elseif (empty($address)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        Please enter your residential address
   </div>';
        # code...
    }

    else{

        $check = mysqli_query($conn,"SELECT * FROM users WHERE email ='$email' OR contact='$contact' ");
        $row = mysqli_fetch_array($check);

        if($row>=1){

            echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
            Sorry this email or Phone number already has account
       </div>';

        }
        else {

            $dateadded = date("jS F, Y");
           $ins = mysqli_query($conn,"INSERT INTO users(fname,lname,contact,address,email,password,dateadded) VALUES('$fname','$lname','$contact','$address','$email','$password','$dateadded')");
           if ($ins){

                $send = new send();
                $send->key = "cQxnbAegMIwOox39ZFA2DFTj9";
                $send->message = 'Hello '.$fname.', you have successfuly  signed up to Eshba logistics and warehousing services. Yoour login email : '.$email.' and password : '.$password.'';
                $send->numbers = $contact;
                $send->sender = "Eshba";
                $isError = true;
                $response = $send->sendMessage();

           
            $to      = $email;
            $subject = 'Eshab ';

            $message = '
            <html>
            <head>
            <title>Welcomet</title>
            </head>
            <body style="background-color:#f5ab35;">
            <div style="width="400px;Height:350px;border-radius:10px;border:1px solid #ffff;">
            <p>Hello '.$fname.', you have successfuly  signed up to Eshba logistics and warehousing services. Yoour login  Details <br><label>email : </label>'.$email.'<br><label> Password : </label>'.$password.'<br> </p>
            </div>
            </body>
            </html>

            ';
            $headers = 'Content-type: text/html; charset=utf-8' . "\r";
                
            

            mail($to, $subject, $message,$headers);


               
            echo ' <div class="alert alert-success" id="mess" role="alert" style="color:white;background-color:seagreen;">
                        Account created successfuly. You will be redirected to Home page <img src="loading.gif" style="width:20px;height:20px;">
                    </div>
                    
                    <script>
                    
                    setTimeout(()=>{
                        window.location="index.php";
                    },8000)
                    
                    </script>
                    ';
           }
        }

    }
   



}

function login()
{
   include "db.php";
   $email = mysqli_real_escape_string($conn,$_POST['email']);
   $password = mysqli_real_escape_string($conn,$_POST['password']);
   if (empty($email)) {
        
    echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                Please enter email address
           </div>';
    }
    elseif (empty($password)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        Please enter password
    </div>';
        # code...
    }
    else {
            $valid = mysqli_query($conn,"SELECT * FROM  users WHERE email='$email'  AND password='$password' ");

            if ($row=mysqli_fetch_array($valid)) {

                    $_SESSION['id']=$row['id'];
                    $_SESSION['username'] = $row['fname'];
                    $_SESSION['fullname'] = $row['fname'].' '.$row['lname'];
                    $_SESSION['email']= $row['email'];
                    $_SESSION['contact']= $row['contact'];
                    $_SESSION['address']=$row['address'];

                    echo ' <div class="alert alert-success" id="mess" role="alert" style="color:white;background-color:seagreen;">
                                    Login successful. please wait <img src="loading.gif" style="width:20px;height:20px;">
                                </div>
                                
                                <script>
                                
                                setTimeout(()=>{
                                    window.location="index.php";
                                },6000)
                                
                                </script>
                                ';




                # code...
            }
            else {
                echo '  <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                            Login failed , please try again
                        </div>';
            }               
    }
        
}


function resetpassword(){
    include 'db.php';
    extract($_POST);
    if (empty($email)) {
        
        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                    Please enter email address
               </div>';
    }
    else {
        $ch = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email' ");

        if ($rs = mysqli_fetch_array($ch)) {

            $dollasoftid = $rs['id'];
            $swiftno= $rs['contact'];
            $v1 ="ESDS";
            $v2 = rand(111111,999999);
            $vcode = $v1.''.$v2;
            $name=$rs['fname'];

            $svc= mysqli_query($conn,"UPDATE users SET vcode ='$vcode',vstatus='active' WHERE id='$dollasoftid' ");

            if ($svc) {

            $to      = $email;
            $subject = 'Eshba-Password-reset code ';

            $message = '
            <html>
            <head>
            <title>Welcomet</title>
            </head>
            <body>
            <div style="width="400px;Height:350px;border-radius:10px;border:1px solid #ffff;">
            <p>Dear '.$name.', your verification code is '.$vcode.' <br> </p>
            </div>
            </body>
            </html>

            ';
            $headers = 'Content-type: text/html; charset=utf-8' . "\r";
                
            

            mail($to, $subject, $message,$headers);



                echo ' <div class="alert alert-success" id="mess" role="alert" style="color:white;background-color:seagreen;">
                <strong> success !!.</strong> Verification code has been set to your email...
                    </div>
                    
                    <script>
                    
                    setTimeout(()=>{
                        window.location="secure-auth-by-dollarsoft.php?sentiment='.$email.'&dollarsoftauthcoded='.$dollasoftid.'&swiftcoded='.$swiftno.'";
                    },6000)
                    
                    </script>
                    ';
            }
            else {
                echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                     Please try again
                    </div>';
            }


            
            # code...
        }
        else {
            echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                     Please enter  valid email address
                    </div>';
        }
    }


}


function verification(){

    include 'db.php';

   $vcode = $_POST['vcode'];
   $dollarsoftcoded=$_POST['dollarsoftcoded'];

    if (empty($vcode)) {
        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                     Please enter  verification code
                    </div>';
    }
    else {
        
        $getuser = mysqli_query($conn,"SELECT * FROM  users WHERE  id = '$dollarsoftcoded' ");
        $ru = mysqli_fetch_array($getuser);

        $vericode= $ru['vcode'];
        $veristatus = $ru['vstatus'];

        if ($vcode==$vericode && $veristatus=="expired") {
            echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
            Sorry verification code expired 
           </div>';
        }
        elseif ($vcode !=$vericode) {

            echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                   Wrong verification code
                    </div>';
            # code...
        }
        elseif ($vcode==$vericode && $veristatus=="active") {

            echo ' <div class="alert alert-success" id="mess" role="alert" style="color:white;background-color:seagreen;">
                Verification successful.... <img src="loading.gif" style="width:20px;height:20px;"> 
                    </div>
                    
                    <script>
                    
                    setTimeout(()=>{
                        window.location="newpass.php?vxcodexyz='.$vcode.'&abxzzzcascombokey='.$dollarsoftcoded.'";
                    },6000)
                    
                    </script>
                    ';
            # code...
        }
        else {

            echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                   Please try again
                    </div>';
            
        }
    }

}


function setnewpass(){

    include 'db.php';
    extract($_POST);

    if (empty($email)) {
        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        please enter email address
       </div>';
    }
    elseif (empty($password)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              Enter new password
                </div>';
        # code...
    }
    elseif ($repass!=$password) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              Password do not match
                </div>';
        # code...
    }
    else {

            $setpaa =mysqli_query($conn,"SELECT * FROM users WHERE email= '$email' AND vcode='$vxcodexyz' AND vstatus='active'  ");

            if($rset=mysqli_fetch_array($setpaa)){

                $upd =mysqli_query($conn,"UPDATE users SET password='$password',vstatus='expired' WHERE id='$abxzzzcascombokey' ");

                if ($upd) {
                    $to  = $email;
                    $subject = 'Eshba-New password ';

                    $message = '
                    <html>
                    <head>
                    <title>Welcomet</title>
                    </head>
                    <body>
                    <div style="width="400px;Height:350px;border-radius:10px;border:1px solid #ffff;">
                    <p>you have successfully reset your  password for your Eshba Logistics Account  <br> New password is : '.$password.'</p>
                    </div>
                    </body>
                    </html>

                    ';
                    $headers = 'Content-type: text/html; charset=utf-8' . "\r";
                        
                    

                    mail($to, $subject, $message,$headers);
                    

                    echo ' <div class="alert alert-success" id="mess" role="alert" style="color:white;background-color:seagreen;">
                    Password reset  successful.... Check your mail for new details <img src="loading.gif" style="width:20px;height:20px;"> 
                        </div>
                        
                        <script>
                        
                        setTimeout(()=>{
                            window.location="index.php";
                        },7000)
                        
                        </script>
                        ';
                    # code...
                }
                else {
                    echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                        Failed to update password try again
                      </div>';
                }

            }
            else {
                echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                      Verication code  has expired  or check your credentials and try again
                    </div>';
            }
    }

}


function getinvoice(){
    include 'db.php';
    include 'send.php';

    extract($_POST);

    if (empty($name)) {
        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
        please enter your name
       </div>';
    }
    elseif (empty($cp)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              Enter enter collection point
                </div>';
        # code...
    }
    elseif (empty($rp)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              Password where you will recieve the item back
                </div>';
        # code...
    }

    elseif (empty($rd)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              Choose date of recieval
                </div>';
        # code...
    }
    elseif (empty($item1) && empty($item2) && empty($item3) && empty($item4)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              You have to select atleast one product
                </div>';
        # code...
    }

    elseif (empty($quant1) && empty($quant2) && empty($quant3) && empty($quant4)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              You have to enter quantity of selected product
                </div>';
        # code...
    }
    elseif (!empty($item1) && empty($quant1)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              You have to enter quantity of selected product
                </div>';
        # code...
    }

    elseif (!empty($item2) && empty($quant2)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              You have to enter quantity of selected product
                </div>';
        # code...
    }
    elseif (!empty($item3) && empty($quant3)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              You have to enter quantity of selected product
                </div>';
        # code...
    }
    elseif (!empty($item4) && empty($quant4)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              You have to enter quantity of selected product
                </div>';
        # code...
    }


    elseif (!empty($quant1) && empty($item1)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
              you have to select item before it quantity
                </div>';
        # code...
    }

    elseif (!empty($quant2) && empty($item2)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
            you have to select item before it quantity
                </div>';
        # code...
    }
    elseif (!empty($quant3) && empty($item3)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
             you have to select item before it quantity
                </div>';
        # code...
    }
    elseif (!empty($quant4) && empty($item4)) {

        echo ' <div class="alert alert-danger" id="mess" role="alert" style="color:white;background-color:red;">
                 you have to select item before it quantity
                </div>';
        # code...
    }
    else {
        $d1 = "TCE";
        $d2 =rand(1111,9999);
        $prodid= $d1.''.$d2;
        $dd = date("jS F,Y");

        $sendtk = mysqli_query($conn,"INSERT INTO wh(prodid,prod1,quant1,p1,prod2,quant2,p2,prod3,quant3,p3,prod4,quant4,p4,cp,rp,dd,rd,uid,name,email,contact,address,totalprice) VALUES ('$prodid','$item1','$quant1','$p1','$item2','$quant2','$p2','$item3','$quant3','$p3','$item4','$quant4','$p4','$cp','$rp','$dd','$rd','$uid','$name','$email','$contact','$address','$totalprice') ");
        if ($sendtk) {


            $send = new send();
            $send->key = "cQxnbAegMIwOox39ZFA2DFTj9";
            $send->message = 'Hello '.$name.', you have successfuly  requested to keep your item(s) With Eshab logistics and warehousing services. your Product ID  : '.$prodid.'. We will contact you soon';
            $send->numbers = $contact;
            $send->sender = "Eshba-LWS";
            $isError = true;
            $response = $send->sendMessage();

            echo ' <div class="alert alert-success" id="mess" role="alert" style="color:white;background-color:seagreen;">
                    Request successful. please wait... <img src="loading.gif" style="width:20px;height:20px;"> 
                        </div>
                        
                        <script>
                        
                        setTimeout(()=>{
                            window.location="eshba-invoice.php?prodid='.$prodid.'&uid='.$uid.'";
                        },7000)
                        
                        </script>
                        ';
        }
    }
    


}




function hnv(){
   

    switch ($_SESSION['pid']) {
        case 1:
            if (isset($_SESSION['id'])) {
                echo '<nav class="menu-bar font2-title1 white-clr">
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
                                <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"> <i class="fa fa-user"></i>'.$_SESSION['username'].' </a>
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
                                    <li style="background-color:red;"> <a href="logout.php"> Logout </a> </li>
                                    <li><span class="search fa fa-search white-clr transition"> </span></li>

                                    

                                </ul>                                                      
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 text-right hidden-xs">                                
                            <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"> <i class="fa fa-user"></i>'.$_SESSION['username'].' </a>
                        </div>   
                        
                         
                    </div>
                </div>
            </nav>';
            }
            else {
                echo '<nav class="menu-bar font2-title1 white-clr">
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
            </nav>';
            }
            break;

        case 2:
                if (isset($_SESSION['id'])) {
                                    echo '<nav class="menu-bar font2-title1 white-clr">
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
                                                    <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"> <i class="fa fa-user"></i>'.$_SESSION['username'].' </a>
                                                </div> 
                                            </div>
                                            <div class="col-md-10 col-sm-10 col-xs-12 fs-12">  
                                                <a class="sticky-logo hidden-sm" href="index-2.php"> <img alt="" src="eshba/img/logo/eshba-logo3.jpg" /> </a>
                                                <div id="navbar" class="collapse navbar-collapse no-pad">
                                                    <ul class="navbar-nav theme-menu">                                        
                                                        <li class="dropdown">
                                                            <a href="index.php" aria-haspopup="true" >Home </a>
                                                        </li>
                                                        <li> <a href="about-us.php">about</a> </li>
                                                        <li class="active"> <a href="tracking.php"> tracking </a> </li>
                                                        <li> <a href="pricing-plans.php"> pricing </a> </li>
                                                        <li> <a href="contact-us.php"> contact </a> </li>
                                                        <li style="background-color:red;"> <a href="logout.php"> Logout </a> </li>
                                                        <li><span class="search fa fa-search white-clr transition"> </span></li>

                                                        

                                                    </ul>                                                      
                                                </div>
                                            </div>
                                            <div class="col-md-2 col-sm-2 text-right hidden-xs">                                
                                                <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"><i class="fa fa-user"></i> '.$_SESSION['username'].' </a>
                                            </div>   
                                            
                                            
                                        </div>
                                    </div>
                                </nav>';
                }
                else {
                                echo '<nav class="menu-bar font2-title1 white-clr">
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
                                                    <li class="dropdown">
                                                        <a href="index.php" aria-haspopup="true" >Home </a>
                                                    </li>
                                                    <li> <a href="about-us.php">about</a> </li>
                                                    <li class="active"> <a href="tracking.php"> tracking </a> </li>
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
                            </nav>';
                }
           
            break;

        case 3:
            if (isset($_SESSION['id'])) {
                        echo '<nav class="menu-bar font2-title1 white-clr">
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
                                        <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"> <i class="fa fa-user"></i>'.$_SESSION['username'].' </a>
                                    </div> 
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-12 fs-12">  
                                    <a class="sticky-logo hidden-sm" href="index-2.php"> <img alt="" src="eshba/img/logo/eshba-logo3.jpg" /> </a>
                                    <div id="navbar" class="collapse navbar-collapse no-pad">
                                        <ul class="navbar-nav theme-menu">                                        
                                            <li class="dropdown">
                                                <a href="index.php" aria-haspopup="true" >Home </a>
                                            </li>
                                            <li> <a href="about-us.php">about</a> </li>
                                            <li> <a href="tracking.php"> tracking </a> </li>
                                            <li class="active"> <a href="pricing-plans.php"> pricing </a> </li>
                                            <li> <a href="contact-us.php"> contact </a> </li>
                                            <li style="background-color:red;"> <a href="logout.php"> Logout </a> </li>
                                            <li><span class="search fa fa-search white-clr transition"> </span></li>

                                            

                                        </ul>                                                      
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 text-right hidden-xs">                                
                                    <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"><i class="fa fa-user"></i> '.$_SESSION['username'].' </a>
                                </div>   
                                
                                
                            </div>
                        </div>
                    </nav>';
            }
            else {
                    echo '<nav class="menu-bar font2-title1 white-clr">
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
                                        <li class="dropdown">
                                            <a href="index.php" aria-haspopup="true" >Home </a>
                                        </li>
                                        <li> <a href="about-us.php">about</a> </li>
                                        <li> <a href="tracking.php"> tracking </a> </li>
                                        <li class="active"> <a href="pricing-plans.php"> pricing </a> </li>
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
                </nav>';
            }
            break;
        
        default:
                    if (isset($_SESSION['id'])) {
                        echo '<nav class="menu-bar font2-title1 white-clr">
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
                                        <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"> <i class="fa fa-user"></i>'.$_SESSION['username'].' </a>
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
                                            <li style="background-color:red;"> <a href="logout.php"> Logout </a> </li>
                                            <li><span class="search fa fa-search white-clr transition"> </span></li>

                                            

                                        </ul>                                                      
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 text-right hidden-xs">                                
                                    <a style="background-color:seagreen;" data-toggle="modal" href="#" class="sign-in fs-12 black-bg"> <i class="fa fa-user"></i>'.$_SESSION['username'].' </a>
                                </div>   
                                
                                
                            </div>
                        </div>
                    </nav>';
                    }
                    else {
                        echo '<nav class="menu-bar font2-title1 white-clr">
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
                    </nav>';
                    }
            break;
    }
}

function dm(){

    $dv= "Dollarsoft Corporation";
    $dvl= "http://wwww.dollarstir.com";

    echo ' <!-- Footer -->
    <footer>
       <div class="footer-main pad-120 white-clr">
           <div class="theme-container container">               
               <div class="row">
                   <div class="col-md-3 col-sm-6 footer-widget">
                       <a href="#"> <img class="logo" alt="#" src="eshba/img/logo/eshba-transparent-logo.png" />  </a>
                   </div>
                   <div class="col-md-3 col-sm-6 footer-widget">
                       <h2 class="title-1 fw-900">quick links</h2>
                       <ul>
                           <li> <a href="basic-pricing.php">basic pricing</a> </li>
                           <li> <a href="get-quote.php">premium pricing</a> </li>
                           <li> <a href="get-quote.php">standard pricing</a> </li>
                       </ul>
                   </div>
                   <div class="col-md-3 col-sm-6 footer-widget">
                       <h2 class="title-1 fw-900">important links</h2>
                       <ul>
                           <li> <a href="contact-us.php">contact us</a> </li>
                           <li> <a href="about-us.php">about us</a> </li>
                           <li> <a href="tracking.php">Tracking</a> </li>
                       </ul>
                   </div>
                   <div class="col-md-3 col-sm-6 footer-widget">
                       <h2 class="title-1 fw-900">get in touch</h2>
                       <ul class="social-icons list-inline">
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#" class="fa fa-facebook"></a> </li>
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#" class="fa fa-twitter"></a> </li>
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#" class="fa fa-google-plus"></a> </li>
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#" class="fa fa-linkedin"></a> </li>
                       </ul>
                       <ul class="payment-icons list-inline">
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".20s"> <a href="#"> <img alt="#" src="eshba/img/icons/eshba-aitelmoney.jpg" /> </a> </li>
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".25s"> <a href="#"> <img alt="#" src="eshba/img/icons/eshba-mtn-momo.jpg" /> </a> </li>
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".30s"> <a href="#"> <img alt="#" src="eshba/img/icons/eshba-tigocash.jpg" /> </a> </li>
                           <li class="wow fadeIn" data-wow-offset="50" data-wow-delay=".35s"> <a href="#"> <img alt="#" src="eshba/img/icons/eshba-vodafone-cash.jpg" /> </a> </li>
                       </ul>
                   </div>
               </div>
           </div>
       </div>

       <div class="footer-bottom">
           <div class="theme-container container">               
               <div class="row">
                   <div class="col-md-6 col-sm-6">
                       <p> &copy; Copyright '.date("Y").' Eshba, All rights reserved </p>                            
                   </div>
                   <div class="col-md-6 col-sm-6 text-right">
                       <p> Developed by <a href="'.$dvl.'" target="blank" class="main-clr">'.$dv.'</a> </p>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <!-- /.Footer -->';
}

?>