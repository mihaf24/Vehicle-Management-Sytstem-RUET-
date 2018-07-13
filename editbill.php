<?php
   $id= $_GET['id'];

   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="SELECT * FROM bill WHERE id='$id'";
   $result=mysqli_query($conn,$sql);

   $std=mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <br><br><br>
	 <?php include 'navbar.php';?>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="index.php">Bill List</a>
        </div> 
        <div class="col-md-8">
        <h2>Edit bill</h2>
        <hr>

        
        <form action="updatebill.php?id=<?php echo '$id'.'$bill_id'; ?>" method="POST">
        
        <div class="form-group">
          <label for="name">ID :</label>
          <input required type="text" class="form-control" name="id" placeholder="vehicle id" value="<?php echo $std['id']?>">
        </div>

        <div class="form-group">
          <label for="Roll">Salary :</label>
          <input required type="text" class="form-control" name="salary" placeholder="Salary" value="<?php echo $std['salary']?>">
        </div>
        
        <div class="form-group">
          <label for="Age">Equipment :</label>
          <input type="text" class="form-control" name="equipment" placeholder="Equipment" value="<?php echo $std['equipment']?>">
        </div>

        <div class="form-group">
          <label for="Address">Oil :</label>
          <input type="text" class="form-control" name="oil" placeholder="Oil" value="<?php echo $std['oil']?>">
        </div>

        <div class="form-group">
          <label for="Mobile">Total cost :</label>
          <input type="text" class="form-control" name="tcost" placeholder="Total cost" value="<?php echo $std['tcost']?>">
        </div>

        <button type="submit" class="btn btn-info">Submit</button>
      </form>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 