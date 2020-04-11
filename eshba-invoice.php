
<!-- 
    Developed By Frederick Ennin (CEO of Dollarsoft ) 
    Contact: +233556676471
    Email: dollarsoft463@gmail.com
    Website: http://www.dollarstir.com
    Youtube: http://www.youtube.com/DollarsoftCorporation
    Started on: saturday 11th April, 2020


-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eshba logistics </title>
    <style>
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
    <div class="container">
        <div class="inv-title">
            <h1 class="no-margin">Invoice # 000000</h1>
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
                <h2>Joe Baidoo</h2><!--put name of the user here-->
                <ul>
                    <li>Anwomaso</li><!--put address of the user here. Use the digital address system code if provided-->
                    <li>Ashanti Region</li><!--state the region, the district and the suburb here-->
                    <li>+233 570 364 383 | joebaidoo@gmail.com</li><!--state both the phone number and the email address here-->
                </ul>
            </div>
            <div>
                <table>
                    <tr>
                        <th>Issue Date</th>
                        <td>12-02-2018</td><!--state the date the request was made here-->
                    </tr>
                    <tr>
                        <th>Due Date</th>
                        <td>Unknown</td><!--state the date the item will be taken here-->
                    </tr>
                    <tr>
                        <th>Pick up at </th>
                        <td>Unknown</td> <!--state where the item will be picked up-->
                    </tr>
                    <tr>
                        <th>Drop Area</th>
                        <td>Not specified</td><!--where the item will be delivered-->
                    </tr>
                    <tr>
                        <th>Product ID</th>
                        <td>Not specified</td><!--where the item will be delivered-->
                    </tr>
                </table>
            </div>
        </div>
        <div class="inv-body">
            <table>
                <thead>
                    <th>#</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit Charge</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h5>1</h5>
                        </td>
                        <td></td>
                        <td></td>
                         <td></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>2</h5>
                        </td>
                        <td></td>
                        <td></td>
                         <td></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>3</h5>
                        </td>
                        <td></td>
                        <td></td>
                         <td></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>4</h5>
                        </td>
                        <td></td>
                        <td></td>
                         <td></td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Total (GHC)</h5>
                        </td>
                        <td></td>
                        <td></td>
                         <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="inv-footer">
            <table>
                <tr>
                    <th>Number of items</th>
                    <td><!--state the number of items here--></td>
                </tr>
                <tr>
                    <th>Grand total</th>
                    <td>GHC 0.00</td>
                </tr>
            </table>
        </div>

        <i>Powered by Epaweb Consult - Ghana</i>
    </div>
</body>
</html>