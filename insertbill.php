<?php
   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="SELECT * FROM bill ";
   $result=mysqli_query($conn,$sql);
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Insert</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

    
  </head>
  <body>
    
    <br><br><br>
     
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a class="btn btn-info" href="indexbill.php">Bill List</a>
        </div> 
        <div class="col-md-8 animated flash">
        <h2>Billing</h2>
        <hr>

        <form action="storebill.php?busid=<?php echo $veh_id; ?>" method="POST">
        

        <div class="form-group">
          <label for="Roll">Service Charge :</label>
          <input required type="text" class="form-control" name="salary" placeholder="Service Charge">
        </div>
        
        <div class="form-group">
          <label for="Age">Equipment :</label>
          <input type="text" class="form-control" name="equipment" placeholder="Equipment">
        </div>

        <div class="form-group">
          <label for="Address">Oil :</label>
          <input type="text" class="form-control" name="oil" placeholder="Oil">
        </div>

        <div class="form-group">
          <label for="Mobile">Total cost :</label>
          <input type="text" class="form-control" name="tcost" placeholder="Total cost">
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