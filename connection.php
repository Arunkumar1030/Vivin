<?php

    $hName='localhost'; // host name

    $uName='root';   // database user name

    $password='';   // database password

    $dbName = "h"; // database name

    $conn = mysqli_connect($hName,$uName,$password,"$dbName");

      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
      }
?>