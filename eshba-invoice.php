
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eshba logistics </title>
    <style>

    td{
        text-align:center;
    }
        @media print {
            @page{
                size: A3;
            }
        }
        ul{
            padding: 0;
            list-style: none;
            border-bottom: 1px solid silver;
        }
        body{
            font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
            margin: 0;
        }
        .container{
            padding: 20px 40px;
        }
        .inv-header{
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .inv-header :nth-child(2){
            flex-basis: 30%;
        }
        .inv-title{
            padding: 10px;
            border: 1px solid silver;
            text-align: center;
            margin-bottom: 20px;
        }
        .no-margin{
            margin: 0;
        }
        .inv-logo{
            width: 150px;
        }
        .inv-header h2{
            font-size: 20px;
            margin: 1rem 0 0 0;
        }
        .inv-header ul li{
            font-size: 15px;
            padding: 3px 0;
        }
        
        /* table in head */
        .inv-header table{
            width: 100%;
            border-collapse: collapse;
        }
        .inv-header table th, .inv-header table td, .inv-header table{
            border: 1px solid silver;
        }
        .inv-header table th, .inv-header table td{
            text-align: right;
            padding: 8px;
        }

        /* Body */
        .inv-body{
            margin-bottom: 20px;
        }
        .inv-body table{
            width: 100%;
            border: 1px solid silver;
            border-collapse: collapse;
        }
        .inv-body table th, .inv-body table td{
            padding: 10px;
            border: 1px solid silver;
        }
        .inv-body table td h5, .inv-body table td p{
            margin: 0 5px 0 0;
        }
        /* Footer */
        .inv-footer{
            clear: both;
            overflow: auto;
        }
        .inv-footer table{
            width: 30%;
            float: right;
            border: 1px solid silver;
            border-collapse: collapse;
        }
        .inv-footer table th, .inv-footer table td{
            padding: 8px;
            text-align: right;
            border: 1px solid silver;
        }
    </style>
</head>
<body>

<?php

        include "db.php";

        $uid= $_GET['uid'];
        $prodid = $_GET['prodid'];
        $get = mysqli_query($conn,"SELECT * FROM wh WHERE uid='$uid' AND prodid='$prodid' ");
        $row = mysqli_fetch_array($get);
        $sus= "IVO";
        $invoiceno =$row['id'];
        $name=$row['name'];
        $email = $row['email'];
        $contact = $row['contact'];
        $address = $row['address'];
        $totalprice= $row['totalprice'];
        $prod1 =$row['prod1'];
        $prod2=$row['prod2'];
        $prod3 =$row['prod3'];
        $prod4 = $row['prod4'];
        $dd =$row['dd'];
        $rd =$row['rd'];
        $cp= $row['cp'];
        $rp =$row['rp'];
        $quant1= $row['quant1'];
        $quant2= $row['quant2'];
        $quant3= $row['quant3'];
        $quant4= $row['quant4'];
        $p1= $row['p1'];
        $p2= $row['p2'];
        $p3= $row['p3'];
        $p4= $row['p4'];
        

        if ($prod1=="Small-fridge") {

            $up1= 30;
            # code...
        }
        elseif ($prod1=="Large-fridge") {
            $up1 =35;
            # code...
        }
        elseif ($prod1=="Small-jutebag") {
            $up1 =20;
            # code...
        }
        elseif ($prod1=="Large-jutebag") {
            $up1 =25;
            # code...
        }
        elseif ($prod1=="Small-luggage") {
            $up1 =25;
            # code...
        }
        elseif ($prod1=="large-luggage") {
            $up1 =30;
            # code...
        }
        else {
            $up1 =0;
        }
// begin product 2
        switch ($prod2) {
            case 'Small-fridge':
               $up2 =30;
                break;
            
            case 'Large-fridge':
                $up2 =35;
                break;
            case 'Small-jutebag':
                $up2 =20;
                break;

            case 'Large-jutebag':
                $up2 =25;
                break;

            case 'Small-luggage':
               $up2 = 25;
                break;

            case 'large-luggage':
                $up2 = 30;
                break;
            
            default:
               $up2 =0;
                break;
        }

        // end product 2


        // Begin product 3
        switch ($prod3) {
            case 'Small-fridge':
               $up3 =30;
                break;
            
            case 'Large-fridge':
                $up3 =35;
                break;
            case 'Small-jutebag':
                $up3 =20;
                break;

            case 'Large-jutebag':
                $up3 =25;
                break;

            case 'Small-luggage':
               $up3 = 25;
                break;

            case 'large-luggage':
                $up3 = 30;
                break;
            
            default:
               $up3 =0;
                break;
        }

        // End product 3

        // Begin Product 4
        switch ($prod4) {
            case 'Small-fridge':
               $up4 =30;
                break;
            
            case 'Large-fridge':
                $up4 =35;
                break;
            case 'Small-jutebag':
                $up4 =20;
                break;

            case 'Large-jutebag':
                $up4 =25;
                break;

            case 'Small-luggage':
               $up4 = 25;
                break;

            case 'large-luggage':
                $up4 = 30;
                break;
            
            default:
               $up4 =0;
                break;
        }

        // End Product 4





?>
    <div class="container">
        <div class="inv-title">
            <h1 class="no-margin">Invoice # <?php  echo  $invoiceno;?> </h1>
        </div>
        <div class="inv-header">
            <div>
                <img src="eshba/img/logo/eshba-finelogo.jpg" class="inv-logo">
                <h2>Eshba Logistics and Warehousing Services</h2>
                <ul>
                    <li>Private Mail Bag</li>
                    <li>KNUST - Kumasi. Ghana</li>
                    <li>+233 558 783 717 | info@eshbalogistics.com</li>
                </ul>
                <h3><?php echo $name;?></h3><!--put name of the user here-->
                <ul>
                    <li><?php  echo $address;?></li><!--put address of the user here. Use the digital address system code if provided-->
                    <!-- <li>Ashanti Region</li>state the region, the district and the suburb here -->
                    <li><?php echo $contact;?> | <?php echo $email;?></li><!--state both the phone number and the email address here-->
                </ul>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Issue Date</th>
                        <td><?php echo$dd;?></td><!--state the date the request was made here-->
                    </tr>
                    <tr>
                        <th>Due Date</th>
                        <td><?php echo $rd;?></td><!--state the date the item will be taken here-->
                    </tr>
                    <tr>
                        <th>Pick up at </th>
                        <td><?php echo $cp;?></td> <!--state where the item will be picked up-->
                    </tr>
                    <tr>
                        <th>Drop Area</th>
                        <td><?php echo $rp;?></td><!--where the item will be delivered-->
                    </tr>
                    <tr>
                        <th>Product ID</th>
                        <td><?php echo $prodid;?></td><!--where the item will be delivered-->
                    </tr>
                </table>
            </div>
        </div>
        <div class="inv-body" style="margin-top:-10px;">
            <table>
                <thead>
                    <th>#</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit Charge (&#8373;)</th>
                    <th>Total Charge (&#8373;)</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h5>1</h5>
                        </td>
                        <td><?php echo $prod1;?></td>
                        <td><?php echo $quant1;?></td>
                        <td><?php echo $up1;?></td>
                        <td><?php echo $p1;?></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>2</h5>
                        </td>
                        <td><?php echo $prod2;?></td>
                        <td><?php echo $quant2;?></td>
                         <td><?php echo $up2;?></td>
                         <td><?php echo $p2;?></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>3</h5>
                        </td>
                        <td><?php echo $prod3;?></td>
                        <td><?php echo $quant3;?></td>
                         <td><?php echo $up3;?></td>
                         <td><?php echo $p3;?></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>4</h5>
                        </td>
                        <td><?php echo $prod4;?></td>
                        <td><?php echo $quant4;?></td>
                         <td><?php echo $up4;?></td>
                         <td><?php echo $p4;?></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Total (GHC)</h5>
                        </td>
                        <td></td>
                        <td></td>
                         <td></td>
                         <td><?php echo $totalprice;?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="inv-footer">
        
            <table style="margin-top:-10px;position:absolute;margin-left:500px;">
                
                <tr>
                    <th>Grand total</th>
                    <td>GH&#8373; <?php echo $totalprice;?></td>
                </tr>
            </table>
        </div>
        <div class="signature" style="position:absolute;margin-top:-25px;">
           
            <h3>Baidoo Emmanuel </h3>
            <img src="eshab.png" alt="" width="70px" height="30px" style="margin-left:20px;"><br>
            <em>(General Manager)</em>
            
        </div>

        <i style="text-align:center;position:absolute;margin-top:130px;">Powered by Epaweb Consult - Ghana</i>
    </div>

    <script src="eshba/js/jquery-2.2.4.min.js" type="text/javascript"></script>        
    <script>
    $(function(){
     

        setTimeout(() => {
            window.print();
         
        }, 7000);
    })
    </script>
</body>
</html>