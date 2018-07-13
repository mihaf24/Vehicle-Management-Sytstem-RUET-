<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect('localhost','root','','vehicle management');
    $msg= "" ;     


    if(isset($_POST['submit'])){
        $drname=$_POST['drname'];
        $drjoin=$_POST['drjoin'];
        $drmobile=$_POST['drmobile'];
        $drnid=$_POST['drnid'];
        $drlicense=$_POST['drlicense'];
        $drlicensevalid=$_POST['drlicensevalid'];
        $draddress=$_POST['draddress'];
        //$drphoto=$_FILES['file']['name'];
        $drphoto= $_FILES['file']['name'];
        
        //image Upload
    
       move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `driver`(`driverid`, `drname`, `drjoin`, `drmobile`, `drnid`, `drlicense`, `drlicensevalid`, `draddress`, `drphoto`) VALUES ('','$drname','$drjoin','$drmobile','$drnid','$drlicense','$drlicensevalid','$draddress','$drphoto')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
                                            );
				          </script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }

    
        
       
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Driver</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
  
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">New Driver Form</h1>
            <?php echo $msg; ?>
                              
                  
      
      </div> 
       <div class="col-md-3">
         
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" >
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Driver Name</b></span>
                  <input id="drname" type="text" class="form-control" name="drname" placeholder="Name">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Mobile</b></span>
                  <input id="drmobile" type="text" class="form-control" name="drmobile" placeholder="Mobile No">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Driver Joining Date</b></span>
                  <input id="drjoin" type="text" class="form-control" name="drjoin" placeholder="Joining date">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#drjoin" ).datepicker();
                      } );
                </script> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>National ID</b></span>
                  <input id="drnid" type="text" class="form-control" name="drnid" placeholder="Nid No">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>License No</b></span>
                  <input id="drlicense" type="text" class="form-control" name="drlicense" placeholder="License No">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>License End Date</b></span>
                  <input id="drlicensevalid" type="text" class="form-control" name="drlicensevalid" placeholder="Validity date">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#drlicensevalid" ).datepicker();
                      } );
                </script> 
                
                
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Driver Address</b></span>
                     <textarea rows="5" id="draddress" type="text" class="form-control" name="draddress" placeholder="Address"> </textarea>
                  
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input  type="file" class="form-control" name="file"> 

              </div>
                
                
                 
                
                <div class="input-group">
                  <input type="submit" name="submit" class="btn btn-success">
                  
                </div>
              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
   
    
</body>
</html>