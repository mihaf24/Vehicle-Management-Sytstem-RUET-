<?php
   $id=$_POST['id'];
   $salary=$_POST['salary'];
   $equipment=$_POST['equipment'];
   $oil=$_POST['oil'];
   $tcost=$_POST['tcost'];

   $conn=mysqli_connect('localhost','root','','vehicle management');
   $sql="UPDATE bill SET id='$id',salary='$salary',equipment='$equipment',oil='$oil',tcost='$tcost' WHERE id='$id'";

   if(mysqli_query($conn,$sql)){
      header("Location: showbill.php?id=".$id); 
   }else{
        echo "Not inserted";
   }
?>