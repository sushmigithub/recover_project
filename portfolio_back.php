<?php session_start();
include 'connection.php';


if(!isset($_SESSION['username'])){
  header("Location:index.php");
}

if (isset($_POST["submit"])){
   $reg = filter_var($_POST["reg"], FILTER_SANITIZE_STRING);
    $course = filter_var($_POST["course"], FILTER_SANITIZE_STRING);
    $address = filter_var($_POST["address"], FILTER_SANITIZE_STRING);
    $mobile = filter_var($_POST["mobile"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    $job = filter_var($_POST["job"], FILTER_SANITIZE_STRING);

}



      $sql = "UPDATE profile SET p_course ='".$course."', p_add ='".$address."', p_mobile ='".$mobile."', p_email ='".$email."', p_job ='".$job."' WHERE p_reg = '".$reg."'";
        if ($conn->query($sql) === TRUE){ 

         header("Location:portfolio.php");
      } 
      else {
        header("Location:set_portfolio.php");
     }

?>