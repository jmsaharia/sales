<!DOCTYPE html>
    <?php
    //error_reporting(E_ALL);
    include 'connect.php';
    session_start();
    if (isset($_POST['submit'])) {
        $date = $_POST["date"];
        $pan = $_POST["pan"];
        $customer_name = $_POST['customer_name'];
        $mobile_no = $_POST['mobile_no'];
        $paying_for_type = $_POST['paying_for_type'];
        $booking_no = $_POST['booking_no'];
        $booking_amount = $_POST['booking_amount'];
        $sql = "INSERT INTO sales(date,pan,customer_name,mobile_no,paying_for_type,booking_no,booking_amount) 
VALUES ('$date','$pan','$customer_name','$mobile_no','$paying_for_type','$booking_no','$booking_amount' )";
        if (!mysqli_query($con, $sql)) {
            die('conection failed' . mysqli_error($con));
        } else {
            echo "Insert Data Successfully";            
        }
    }
    header('Location: Sales Adv Booking New.php');
    ?>
