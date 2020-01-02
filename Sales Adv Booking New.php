<?php
include 'connect.php';
include 'receive_header.php';
//error_reporting('1');
//if (!empty($_SESSION['customerId'])) {
//    echo "<script>alert('" . $_SESSION['customerId'] . "');</script>";
//    unset($_SESSION['customerId']);
//}
//?>
<center>
    <div class="col-sm-12" >
        <h3><u style=" color: black;text-decoration: none;text-decoration: none; border-bottom: 6px solid #FE2D00; padding-bottom: .1em;"><b>𝔸𝔻𝕍𝔸ℕℂ𝔼𝔻 𝔽𝕆ℝ ℕ𝔼𝕎 𝔹𝕆𝕆𝕂𝕀ℕ𝔾</b></u></h3>
    </div>
</center>
<form class="form-horizontal" role="form" action="sales_adv_booking_new_exe.php" method="POST" >
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
                                    <option style=" background-color:#85929E;  color:white;" value="Sales Delivery">Sales Delivery</option>
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
                            <input type="text" class="form-control" id="vehicleNo" name="pan"   style='text-transform:uppercase' onKeyUp="ajaxFunction();" value="<?php if (isset($_POST['pan'])) echo $_POST['pan']; ?>" />
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 1px;" >
                        <label  class="col-md-6 control-label">Mobile No:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="mobileNo" name="mobile_no" value="<?php if (isset($_POST['mobile_no'])) echo $_POST['mobile_no']; ?>"  required >
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 1px;">
                        <label  class="col-md-6 control-label">Customer Name:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="customerName" name="customer_name"    style="text-transform:uppercase" value="<?php if (isset($_POST['customer_name'])) echo $_POST['customer_name']; ?>" required>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 1px;">
                        <label  class="col-md-6 control-label">Booking No:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="booking_no" name="booking_no"    style="text-transform:uppercase" value="<?php if (isset($_POST['booking_no'])) echo $_POST['booking_no']; ?>" >
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 1px;">
                        <label  class="col-md-6 control-label">Booking Amount:</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="booking_amount" name="booking_amount"    style="text-transform:uppercase" value="<?php if (isset($_POST['booking_amount'])) echo $_POST['booking_amount']; ?>" >
                        </div>
                    </div>
                </div>
            </div>             
            <center>
                <div class="panel-body" style="height: auto;">
                    <div class="col-sm-12" style="margin-top: 2%;margin-bottom:2%;">
                        <button class="btn btn-success" onclick="window.location.href = 'admin_dashboard.php'">Previous</button>
                        <button type="reset" name="btnUser" class="btn btn-danger">Reset</button>
                        <button type="submit" name="submit" class="btn btn-warning" onclick="Submitform()">Save Payment Details</button>
                    </div>
                </div>
            </center>
        </div>
    </div>
</form>
<script type="text/javascript">
    function Submitform()
    {
        var fr = document.getElementById("sales_adv_booking_new_exe");
        var amt1 = document.getElementById("booking_amount").value;
        var amt2 = document.getElementById("net_received").value;
        if (amt1 == amt2)
        {
            fr.action = "sales_adv_booking_new_exe.php";
            fr.submit();
            return true;
        } else if ((amt1 <= 0) && (amt2 == 0)) {
            alert(amt1);
            alert(amt2);
            fr.action = "sales_adv_booking_new_exe.php";
            fr.submit();
            return true;
        } else {
            alert("Net Amount And Net Received is Not Equal");
        }
    }
</script>
<script>
    $(function () {
        $("#cash, #cheque, #payment_gateway, #card_swipe").on("keydown keyup", calculate);
        function calculate() {
            $("#net_received").val(Number($("#cash").val()) + Number($("#cheque").val()) + Number($("#payment_gateway").val()) + Number($("#card_swipe").val()));
        }
    });
</script>
<script type="text/javascript">
    function handleSelect(elm)
    {
        window.location = elm.value + ".php";
    }
</script>
