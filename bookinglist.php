<?php
    session_start();
     $connection= mysqli_connect('localhost','root','','vehicle management');

    $select_query="SELECT * FROM `booking` ORDER BY booking_id DESC";
    $result= mysqli_query($connection,$select_query);
    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Booking list</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'navbar_admin.php'; ?>
  <br><br>
   <div class="container">
        <div class="row">
           <div class="col-md-12">
             <div class="page-header">
                <h1 style="text-align: center;">Booking List</h1>
                 
              </div> 
              <table id="myTable" class="table table-bordered animated bounce">
                <thead>
                    
                    <th>Booking Id</th>
                    <th>Name</th>
                    <th>Type</th>
                    
                    <th>Delete</th>
                    <th>Release</th>
                    <th>Confirm Trip</th>
                    <th>Checked</th>
                    <th>Finished</th>
                    <th>Bill</th>
                    <th>Confirm Payment</th>
                    <th>Paid</th>
                    
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['type']; ?></td>
                       
                        
                        <td><a class="btn btn-danger" href="deletebooking.php?id=<?php echo $row['booking_id']; ?>">Delete</a></td>
                        
                        <?php if($row['confirmation']==0 or $row['finished']==1)  { ?>
                        <td><a class="btn btn-default disabled" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Release Vehicle</a></td>
                        <?php } else{ ?>
                        <td><a class="btn btn-default" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Release Vehicle</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td><a class="btn btn-success" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                        <?php } else { ?>
                        <td><a class="btn btn-success disabled" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                        
                        <?php if($row['finished']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                        
                        
                        
                        <?php if($row['finished']=='1' and $row['paid']==0 ){  ?>
                        <td><a class="btn btn-primary" href="bill.php?id=<?php echo $row['booking_id']; ?>">Bill</a></td> 
                         <?php } else if($row['paid']==1 ) { ?>
                          <td><a class="btn btn-primary disabled" href="bill.php?id=<?php echo $row['booking_id']; ?>">Bill</a></td> 
                          <?php }  ?>
                          
                         
                          <td><a href="confirmpayment.php?id=<?php echo $row['booking_id']; ?>">Confirm</a></td>
                          
                          <?php if($row['paid']=='0'){ ?>
                        <td>No</td>
                        <?php } else { ?>
                        <td>Yes</td>
                        <?php }  ?>
                          
                          
                          
                        
                    </tr>
                    

                    <?php }   ?>
                </tbody>
            </table>
            </div>
        </div>
        
        
   </div>  
</body>

<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>