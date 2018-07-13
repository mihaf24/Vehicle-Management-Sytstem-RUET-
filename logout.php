<?php
    
    session_start();
    //echo $_SESSION['user'];
    session_destroy();
    //echo 'session has destroyed';
   header ("Location: index.php");
?>