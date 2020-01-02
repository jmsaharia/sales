<?php
include 'connect.php';
include 'receive_header.php';
if (isset($_POST['update'])) {
    $date = $_POST["date"];
    $pan = $_POST["pan"];
    $customer_name = $_POST['customer_name'];
    $mobile_no = $_POST['mobile_no'];
    $paying_for_type = $_POST['paying_for_type'];
    $bill_amount = $_POST['bill_amount'];
    $booking_amount = $_POST['booking_amount'];
    $discount = $_POST['discount'];
    $foc = $_POST['foc'];
    $net_amount = $_POST['net_amount'];

    $query = '';
    if ($query != NULL && $query!= '') {
        $query = "UPDATE sales SET date='" . $date . "',customer_name='" . $customer_name . "',mobile_no='" . $mobile_no . "',paying_for_type='" . $paying_for_type . "',bill_amount='" . $bill_amount . "',booking_amount='" . $booking_amount . "',discount='" . $discount . "',foc='" . $foc . "',net_amount='" . $net_amount . "' WHERE pan = '" . $pan . "'";
        $update_Result = mysqli_query($con, $query);
        if ($update_Result) {
            if (mysqli_affected_rows($con) > 0) {
                echo 'Update Customer Details';
            } else {
                echo 'Customr Details Not Updated';
            }
        }
    }
    else {
        $query = "INSERT INTO sales(date,pan,customer_name,mobile_no,paying_for_type,bill_amount,booking_amount,discount,foc,net_amount) VALUES('$date','$pan','$customer_name','$mobile_no','$paying_for_type','$bill_amount','$booking_amount','$discount','$foc','$net_amount')";
        $update_Result = mysqli_query($con, $query);
        if ($update_Result) {
            if (mysqli_affected_rows($con) > 0) {
                echo 'Insert Customer  Details';
            } else {
                echo 'Customr Details Not Inserted';
            }
        }
    }
}
?>
<!DOCTYPE Html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Search Data in To Text Box</title>
    </head>
    <body>
    <center>
        <form action="" method="POST" >
            <div class="form-group">
                <center>
                    <div class="col-lg-10" id="p" style="border:0px dashed  gray; border-right:none; padding-left: 30%;">
                        <input type="text" class="form-control" id="search_input" name="pan" placeholder="Enter PAN (Permanent Account Number)"/><br>
                        <input type="submit"class="f" id="search_button" name="search" value="Search"/>
                    </div>
                </center>
            </div>
        </form>
        <?php
        if (isset($_POST['search'])) {
            $pan = $_POST['pan'];
            $query = "SELECT  date,pan,customer_name,mobile_no,paying_for_type,booking_amount,SUM(booking_amount)booking_amount,bill_amount,discount,foc,net_amount FROM sales
 WHERE paying_for_type = 'Sales Adv Booking New' AND PAN = '$pan'";
            $query_run = mysqli_query($con, $query);
            if ($query_run) {
                if (mysqli_num_rows($query_run)) {
                    while ($row = mysqli_fetch_array($query_run)) {
                        ?>
                        <form class="form-horizontal" role="form" id="sales_delivery_exe" method="POST" >
                            <div class="form-group">
                                <div class="col-lg-12" style="border:0px dashed  gray; border-right:none;">
                                    <div class="col-lg-6"  >
                                        <div class="panel-body" style="height: auto;">
                                            <div class="col-md-12" style="margin-top: 1px;" >
                                                <label for="receivables" class="col-md-6 control-label">Sale:</label>
                                                <div class="col-md-6">
                                                    <div class="form-group" style="margin-left: 0;margin-right: 0;">
                                                        <select class="form-control" id="payingForType" name="paying_for_type" onchange="javascript:handleSelect(this)">
                                                            <option style=" background-color:#85929E; color:white;" value="">Select </option>
                                                            <option style=" background-color:#85929E;  color:white;" value="Sales Adv Booking New" selected >Sales Adv Booking New</option>
                                                            <option style=" background-color:#85929E;  color:white;" value="Sales Delivery" selected>Sales Delivery</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: -13px;" >
                                                <label  class="col-md-6 control-label">Date:</label>
                                                <div class="col-md-6">
                                                    <input type="date" class="form-control" id="date"  value="<?php echo date("Y-m-d"); ?>"  name="date" autocomplete="off"  >
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;" >
                                                <label  class="col-md-6 control-label">PAN:</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="PAN" name="pan"   style='text-transform:uppercase' onKeyUp="ajaxFunction();" value="<?php echo $row['pan'] ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;" >
                                                <label  class="col-md-6 control-label">Mobile No:</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="mobileNo" name="mobile_no" value="<?php echo $row['mobile_no'] ?>" >
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;">
                                                <label  class="col-md-6 control-label">Customer Name:</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="customerName" name="customer_name"    style="text-transform:uppercase" value="<?php echo $row['customer_name'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;">
                                                <label  class="col-md-6 control-label">Bill Amount:</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="bill_amount" name="bill_amount" value="<?php echo $row['bill_amount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;">
                                                <label  class="col-md-6 control-label">Advance Amount(Booking Amount):</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="booking_amount" name="booking_amount"  value="<?php echo $row['booking_amount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;">
                                                <label  class="col-md-6 control-label">Discount:</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="discount" name="discount"  value="<?php echo $row['discount'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;">
                                                <label  class="col-md-6 control-label">FOC</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="foc" name="foc"   value="<?php echo $row['foc'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="margin-top: 1px;">
                                                <label  class="col-md-6 control-label">Net Amount:</label>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="net_amount " name="net_amount" value="<?php echo $row['net_amount'] ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <center>
                                        <div class="panel-body" style="height: auto;">
                                            <div class="col-sm-12" style="margin-top: 2%;margin-bottom:2%;">
                                                <input type="hidden" class="form-control"  name="pan"  value="<?= $pan ?>" />
                                                <button type="submit" name="update" class="btn btn-danger">Update</button>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </form>
                        <?php
                    }
                } else {
                    echo 'No Customer For This PAN';
                }
            } else {
                echo 'Result Error';
            }
        }
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(document).change(function () {
                $("#search_button").click(function () {
                    $("#p").hide();
                });
            });
        </script>
        <script>
            $(function () {
                $("#bill_amount,#booking_amount, #discount, #foc").on("keydown keyup", sum);
                function sum() {
                    $("#net_amount").val(Number($("#bill_amount").val()) - Number($("#booking_amount").val()) - Number($("#discount").val()) - Number($("#foc").val()));
                }
                }
            });
        </script>
        <script type="text/javascript">
            function handleSelect(elm)
            {
                window.location = elm.value + ".php";
            }
        </script>
    </body>
</html>


