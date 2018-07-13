<?php
    $connection= mysqli_connect('localhost','root','','vehicle management');
    session_start();

    $id= $_GET['id'];

    $sql= "UPDATE `tripcost` SET `paid`='1' WHERE booking_id='$id'";
    $result= mysqli_query($connection,$sql);

    if($result){
        header ('Location: bookinglist.php');
    }
?>