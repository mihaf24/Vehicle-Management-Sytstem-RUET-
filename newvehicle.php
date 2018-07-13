<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $connection= mysqli_connect('localhost','root','','vehicle management');
    $msg= "" ;
    
    if(isset($_POST['submit'])){
        $regno= $_POST['vehregno'];
        $type= $_POST['type'];
        $chesisno= $_POST['vehchesis'];
        $brand= $_POST['vehbrand'];
        $color= $_POST['vehcolor'];
        $regdate= $_POST['vehregdate'];
        $description= $_POST['vehdescription'];
        $photo= $_FILES['file']['name'];
        
        //image Upload
    
        move_uploaded_file($_FILES['file']['tmp_name'],"vehicle picture/".$_FILES['file']['name']); 
        
        
        //move_uploaded_file($_FILES['file']['tmp_name'],"picture/".$_FILES['file']['name']); 
        $res=false;
        $insert_query="INSERT INTO `vehicle`(`veh_id`, `veh_reg`, `veh_type`, `chesisno`, `brand`, `veh_color`, `veh_regdate`, `veh_description`, `veh_photo`) VALUES ('','$regno','$type','$chesisno','$brand','$color','$regdate','$description','$photo')";
        
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
        
    }
    
    //$msg="";

    
        
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
   <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>  
 <?php include 'navbar_admin.php'; ?>
 <br>
  
  
   <div class="container"> 
     <div class="row">
       
        <div class="page-header">
            <h1 style="text-align: center;">New Vehicle Form </h1>
            <?php echo $msg; ?>
      </div> 
       <div class="col-md-3">
        
         <!--
          <br> 
          <form action="" method="post" enctype="multipart/form-data">
              <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="drphoto" type="file" class="form-control" name="file"> 

              </div>
              <input type="submit" name="psubmit" class="btn btn-success btn-small">
              
          </form>
           
         -->  
       </div>
        <div class="col-md-6 animated bounceIn"> 
          
           
            
                <br>
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Registration Number</b></span>
                  <input id="vehreg" type="text" class="form-control" name="vehregno" placeholder="Reg No">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Type</b></span>
                  <label class="radio-inline">
                      <input type="radio" name="type" value="bus">Bus
                    </label>
                <label class="radio-inline">
                  <input type="radio" name="type" value="car">Car
                </label>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Chesis No</b></span>
                  <input id="vehchesis" type="text" class="form-control" name="vehchesis" placeholder="Chesis No">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Brand</b></span>
                  <input id="vehbrand" type="text" class="form-control" name="vehbrand" placeholder="Brand">
                </div>
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon"><b>Color</b></span>
                  <input id="vehcolor" type="text" class="form-control" name="vehcolor" placeholder="Color">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Registration Date</b></span>
                  <input id="vehregdate" type="text" class="form-control" name="vehregdate" placeholder="Registration date">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#vehregdate" ).datepicker();
                      } );
                </script> 
                
                
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon"><b>Description</b></span>
                     <textarea rows="5" id="draddress" type="text" class="form-control" name="vehdescription" placeholder="Address"> </textarea>
                  
                </div>
                <br>
                
                <!--
                 <div class="input-group">
                  <span class="input-group-addon"><b>Photo</b></span>
                  <input id="vehphoto" type="file" class="form-control" name="file">
                </div>
                <br>
                -->
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