<?php
    
      $sql = mysqli_connect("localhost","root","","eproject");
      if (!$sql) {
        echo "connection Error";
      } 
      else {
        echo "connection successfull";
      }
  
?>