<!DOCTYPE html>
<?php
include "receive_header.php";
include "connect.php";
?>
<style>
    .animated{
        width: auto;
        height: auto;
        padding: 10px;
        background-color: black;
        color:white;
        position: relative;
        .modal-header
        {
            height: auto; 
            background-color:#0099CC;
            color: white;
            text-align: center;
            font-size: 40px;
        }
        .modal-content
        {
            background-color:#D4EFDF;
            border:3px groove  #0099CC;
        }

        .myButton {
            box-shadow: -8px 19px 37px 14px #f0f7fa;
            background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
            background-color:#33bdef;
            border-radius:6px;
            border:1px solid #057fd0;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:15px;
            font-weight:bold;
            padding:11px 4px;
            text-decoration:none;
            text-shadow:2px 2px 0px #5b6178;
        }
        .myButton:hover {
            background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
            background-color:#019ad2;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }

    </style>
        <!--<style> 
            .animated{
                width: auto;
                height: auto;
                padding: 10px;
                background-color: #0099CC;
                position: relative;
                -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
                -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
                -webkit-animation-iteration-count: infinite; /* Safari 4.0 - 8.0 */
                animation-name: example;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }
            /* Safari 4.0 - 8.0 */
            @-webkit-keyframes example {
                0%   {background-color:red; left:0px; top:0px;}
                25%  {background-color:yellow; left:50px; top:0px;}
                50%  {background-color:blue; left:100px; top:100px;}
                75%  {background-color:green; left:0px; top:50px;}
                100% {background-color:red; left:0px; top:0px;}
            }
        
            /* Standard syntax */
            @keyframes example {
                0%   {background-color:red; left:0px; top:0px;}
                25%  {background-color:yellow; left:50px; top:0px;}
                50%  {background-color:blue; left:100px; top:40px;}
                75%  {background-color:green; left:0px; top:40px;}
                100% {background-color:red; left:0px; top:0px;}
            }
        </style>-->
    <!--    <div class="animated"><center><b><i>Welcome to</i> Admin </b><a href="admin_user_create.php" class="btn btn-info" role="button" style="">Create User</a></div></center>-->
    <div class="col-lg-12" style="padding: 4px; background-color:black; color:white;" >
        <div class="col-md-8"  style="text-align: center;">
            <h4><i>Welcome to Admin </i> &nbsp;<b> <?php
                    //echo $_SESSION['employeeName'];
                    ?></b>
            </h4>
        </div>
        <!--        <div class="col-md-4" style="display:flex; justify-content: flex-end;">
                    <a href="admin_user_create.php" class="btn btn-info" role="button" style="">Create User</a>
                </div>-->
    </div>
 <!--    <div style="display:flex; justify-content: flex-end; padding: 4px; background-color:black; color:white; "><b><i>Welcome to</i> Admin </b><a href="admin_user_create.php" class="btn btn-info" role="button" style="">Create User</a></div>-->
    <?php
//$connect = mysqli_connect("localhost", "root", "", "gargyahr");
    //$query = "SELECT cash,checque,bankTransfer count(*) as number FROM payment GROUP BY customerId";
    //  $query = "SELECT cash,cheque,bankTransfer as number FROM payments GROUP BY customerId";
    //  $result = mysqli_query($con, $query);
    ?> 
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <div class="col-lg-12">
        <div class="col-md-7" >
            <!--            <div class="modal-header">
                            <b>Receive Type </b>
                        </div>-->
           
                    <div class="modal-header">
                        <b> Quick Links </b>
                    </div>
                    <div class="modal-content">
                        <ul style="padding:40px;">
<!--                            <li ><a href="receive.php">Customer Transaction</a></li>                    -->
                            <li><a href="Sales Delivery.php">Sales Delivery</a></li>
                            <li ><a href="Sales Adv Booking New.php">Sales Adv Booking New</a></li>

                        </ul>
                    </div>
                    
                </div>

            </div>

        </div>
    </div>

