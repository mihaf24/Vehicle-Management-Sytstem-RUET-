<?php
   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="SELECT * FROM bill ";
   $result=mysqli_query($conn,$sql);
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   
?>


<!DOCTYPE html>   
<html lang="en">   
<head>   
<meta charset="utf-8">   
<title>Welcome to Vehicle Management</title>   
<meta name="description" content="Bootstrap.">  
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="sweetalert2/sweetalert2.css">
<script src="sweetalert2/sweetalert2.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">




<body> 
 <?php include 'navbar_admin.php';?> 
 <br><br>
<div class="container">

<div class="row">
    <div class="page header">
        <h3 style="text-align: center;">Billing List</h3>

    </div>
    
    <table id="myTable" class="table table-bordered" >  

        <thead>
              <th>ID</th>
              <th >Total Cost</th>
              <th >Action</th>
        </thead>

        <tbody>
            <?php while($row=mysqli_fetch_assoc($result)){?>
              <tr>
                <td> <?php echo $row['id']?> </td>
                <td> <?php echo $row['tcost']?> </td>
                <td>
                  <a class="btn btn-info" href="showbill.php?id=<?php echo $row['id']; ?>">View</a>
				  <!--
                  <a class="btn btn-primary" href="editbill.php?id=<?php echo $row['id']; ?>">Edit</a>
				  -->
                  <a class="btn btn-danger" onclick="return confirm('Are u sure?')" href="deletebill.php?id=<?php echo $row['bill_id']; ?>">Delete</a>
                </td>
              </tr>
              <?php }?>
            </tbody>

          </table>

</div>

</div>
</body>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>
</html>  