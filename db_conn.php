<?php 

     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'dictionary';

     $conn = mysqli_connect($hostname, $username, $password, $db_name);
     if(!$conn) {
          echo 'database connection error'.mysqli_connect_error();
     }

?>