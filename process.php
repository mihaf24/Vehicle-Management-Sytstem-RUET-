<?php
    $data1= $_POST['drname1'];
    $data2= $_POST['drmobile1'];
    $data3= $_POST['drnid1'];
    $data4= $_POST['drlicense1'];
    $data5= $_POST['drlicensevalid1'];
    $data6= $_POST['draddress1'];
    $data7= $_POST['drphoto1'];  

    

    $connection=mysqli_connect("localhost","root","","vehicle management");

    if(isset($_POST['drname1']))
    {
        //$sql= "INSERT INTO `status`(`post_id`, `name`, `status`) VALUES ('','$data1','$data2')";
        
       // $sql= "INSERT INTO `driver`(`driverid`, `drname`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`) VALUES ('','$data1','$data2','$data3','$data4','$data5','$data6','$data7'"; 
        
        $sql= "INSERT INTO `driver`(`driverid`, `drname`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`) VALUES ('','$data1','$data2','$data3','$data4','$data5','$data6','$data7')";
        
        
        
        
        $result = mysqli_query($connection,$sql);
        
        if ($result)
             echo "done";
         else
             echo "not done"; 
        
         //$data1= $_GET['namee'];
       
        
    } 
	
?>