<?php
include('../config/dbcon.php');


if(isset($_POST['register_btn']))
{
    $name=mysqli_real_escape_string( $con,$_POST['name']) ;
    $email=mysqli_real_escape_string( $con,$_POST['email']) ;
    $date_time=mysqli_real_escape_string( $con,$_POST['date_time']) ;
    $services=mysqli_real_escape_string( $con,$_POST['services']) ;
    $address=mysqli_real_escape_string( $con,$_POST['address']) ;
    $phone=mysqli_real_escape_string( $con,$_POST['phone']) ;
    $special_request=mysqli_real_escape_string( $con,$_POST['special_request']) ;

    $insert_query="INSERT INTO predulive (name,email,date_time,services,address,phone,special_request) VALUES ('$name','$email','$date_time','$services','$address','$phone','$special_request')";
    $insert_query_run = mysqli_query($con,$insert_query);

    if($insert_query_run)
    {
        $_SESSION['message']="Registered"
    }
}

?>