
<?php
$mysqli = mysqli_connect("localhost", "root", "root", "AuctionSystem")or die($mysqli_error($mysqli));
session_start();
  // $db_host = 'localhost';
  // $db_user = 'root';
  // $db_password = 'root';
  // $db_db = 'AuctionSystem';
  // $db_port = 8889;

  // $mysqli = new mysqli(
  //   $db_host,
  //   $db_user,
  //   $db_password,
  //   $db_db
  // );
	
  // if ($mysqli->connect_error) {
  //   echo 'Errno: '.$mysqli->connect_errno;
  //   echo '<br>';
  //   echo 'Error: '.$mysqli->connect_error;
  //   exit();
  // }

  // echo 'Success: A proper connection to MySQL was made.';
  // echo '<br>';
  // session_start();
?>