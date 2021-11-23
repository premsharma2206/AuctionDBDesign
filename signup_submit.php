<?php

require("includes/common.php");
// $con = $mysqli;
  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
if (isset($_POST['name']))
{
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($mysqli, $name);
}
  if (isset($_POST['email']))
{
  $email = $_POST['email'];
  $email = mysqli_real_escape_string($mysqli, $email);
}
if (isset($_POST['password']))
{
  $password = $_POST['password'];
  $password = mysqli_real_escape_string($mysqli, $password);
//   $password = MD5($password);
}
if (isset($_POST['contact']))
{
  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($mysqli, $contact);
}
if (isset($_POST['address']))
{
  $address = $_POST['address'];
  $address = mysqli_real_escape_string($mysqli, $address);
}
//   $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
//   $regex_num = "/^[789][0-9]{9}$/";

//   $query = "SELECT * FROM member WHERE email='$email'";
//   $result = mysqli_query($mysqli, $query)or die($mysqli_error($mysqli));
//   $num = mysqli_num_rows($result);
  
//   if ($num != 0) {
//     $m = "<span class='red'>Email Already Exists</span>";
//     header('location: signup.php?m1=' . $m);
//   } else if (!preg_match($regex_email, $email)) {
//     $m = "<span class='red'>Not a valid Email Id</span>";
//     header('location: signup.php?m1=' . $m);
//   } else if (!preg_match($regex_num, $contact)) {
//     $m = "<span class='red'>Not a valid phone number</span>";
//     header('location: signup.php?m2=' . $m);
//   } else {
    $query = "SELECT max(member_ID) FROM member";
    $memberid = mysqli_query($mysqli, $query)or die($mysqli_error($mysqli));
    $row = mysqli_fetch_array($memberid, MYSQLI_NUM);
    $memberid = $row[0] + 1;
    $query = "INSERT INTO member( member_ID, password, email, name, phoneNumber, homeAddress)VALUES('" . $memberid. "','" . $password . "','" . $email . "','" . $name . "','" . $contact . "','" . $address . "');";
    mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    $_SESSION['email'] = $email;
    $_SESSION['memberid'] = $memberid;
    header('location: products.php');
//   }
?>