<?php
    
    $connection= mysqli_connect("localhost","root","","vehicle management");
    session_start();
    
    $id= $_GET['id'];

    $sql= "SELECT * FROM `booking` WHERE booking_id='$id'"; 

    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = $row['email'];
    
    //echo $email_to;
    
 
     
 
     
 
 
 
     
 
    // validation expected data exists
 /*
    if(!isset($_POST['first_name']) ||
 
        // !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['phone']) ||
 
        !isset($_POST['comment'])) {
 
        died('');       //enter msg within this string
 
    }*/
 
     
 
    $first_name = $row['name']; // required
 
    // $last_name = $_POST['last_name']; // required
 
    $email_from = "iafbd24@gmail.com"; // required
 
    $telephone = $row['mobile']; // not required
 
    //$comments = $_POST['comment']; // required
    $driver_id= $_POST['driverid'];
    //echo $driver_id;
    
    $veh_reg= $_POST['veh_reg'];
    //$veh_reg= $_POST[''];
    //echo $veh_reg;
    
    $sql2="SELECT * FROM `driver` WHERE driverid='$driver_id'";
    $res2= mysqli_query($connection,$sql2);
    $row2= mysqli_fetch_assoc($res2);
    
    $driver_name=$row2['drname'];
    $driver_mobile=$row2['drmobile'];
    //echo $driver_name;
    //echo $driver_mobile;
     
 
   
 
    $email_message = " This is an email form RUET Vehicle Management to confirm your vehicle. Details are given below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "first Name: ".clean_string($first_name)."\n";
 
    // $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Phone: ".clean_string($telephone)."\n\n";
 
    $email_message .= "Driver's Name: ".clean_string($driver_name)."\n";
    $email_message .= "Vehicle Regitration: ".clean_string($veh_reg)."\n";
    $email_message .= "Driver's Phone Number: ".clean_string($driver_mobile)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
    
 
$update_query="UPDATE `booking` SET `confirmation`='1',`veh_reg`='$veh_reg',`driverid`='$driver_id' WHERE booking_id='$id'; UPDATE `vehicle` SET `veh_available`='1' WHERE veh_reg='$veh_reg';UPDATE `driver` SET `dr_available`='1' WHERE driverid='$driver_id'";
    
//$update_query="UPDATE `booking` SET `confirmation`='1' WHERE booking_id='$id'";
//echo $update_query;
    

    
//$res3=mysqli_query($connection,$update_query);
$res3=mysqli_multi_query($connection,$update_query);  //to run multiple query
 
?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>success</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="animate.css">
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
   <?php include 'navbar_admin.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               <br><br><br><br><br>
                <div class="alert alert-success animated tada">
                      <strong>Success!</strong> Mail has been sent successfully.
                </div>
                
                <a class="btn btn-default" href="bookinglist.php">Go Back</a>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
     
 </body>
 </html>
 

 
 <?php
 
}
 
?>
