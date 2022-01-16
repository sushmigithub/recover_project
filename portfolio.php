<?php include "connection.php"; 
session_start();

if(!isset($_SESSION['username'])){
  header("Location:index.php");
}





$sql = "SELECT * FROM profile WHERE p_reg='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
    while($id_verify = mysqli_fetch_array($result)) {

      $name=$id_verify['p_name'];
      $reg=$id_verify['p_reg'];
      $course=$id_verify['p_course'];
      $address=$id_verify['p_add'];
      $mobile=$id_verify['p_mobile'];
      $email=$id_verify['p_email'];
      $job=$id_verify['p_job'];
   }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js" defer></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <header>
      <nav class="navigation">
        <label class="navigation-h">NBU</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="log_out.php">Log Out</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
        <label class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    </header>
    <table>
      <tbody>
        <tr>
          <td>Name:</td>
          <td><?php echo $name ?></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>Registration No:</td>
          <td><?php echo $reg ?></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>Course:</td>
          <td><?php echo $course ?></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>Address:</td>
          <td><?php echo $address ?></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>Mobile NO:</td>
          <td><?php echo $mobile ?></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>Email:</td>
          <td><?php echo $email ?></td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>Job Description:</td>
          <td><?php echo $job ?></td>
        </tr>
      </tbody>
    </table>
    <a href="set_portfolio.php"><button>Update Your Portfolio</button></a>

    <!--- Footer code start --->
    <section class="footer">
      <div class="social">
        <a href="#"><i class="fab fa-instagram"></i> </a>
        <a href="#"><i class="fab fa-snapchat"></i> </a>
        <a href="#"><i class="fab fa-twitter"></i> </a>
        <a href="#"><i class="fab fa-facebook"></i> </a>
      </div>
      <ul class="list">
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
      <p class="copyright">Future Coders @2021</p>
    </section>
    <!--- Footer code end --->
  </body>
</html>

