<?php
    $connection= mysqli_connect("localhost","root","","vehicle management");

    session_start();

    $sql= "SELECT * FROM `driver`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of Drivers</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head> 

<body > 
  
   <div  id="myDiv">
  
   <?php include 'navbar.php'; ?>
   <br><br><br>
   <div class="container">
      <?php
        if(mysqli_num_rows($res)>0){ ?>
    
      <div class="container">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6">
                 <div class="page-header">
                    <h1 class="animated tada" style="text-align: center;">Drive List</h1>      
                  </div> 
                  <table class="table foo">
                    <thead>
                        <th>Profile Picture</th>
                        <th>Driver Name</th>
                    </thead>  

                    <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
                            <td><img height="100px" width="100px" src="picture/<?php echo $row["drphoto"]; ?>" alt="dp"></td>

                            <td><a href="driverprofile.php?driverid=<?php echo $row["driverid"]; ?>"> <?php echo $row["drname"] ?></a></td>
                        </tr>
                    </tbody> 
                <?php } }?>
                </table>
             </div>
             <div class="col-md-3"></div>
         </div>
          
      </div>  
       
   </div>
    </div> 
    
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
     
    </script>
     

    
</body>
</html>