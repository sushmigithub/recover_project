<?php include "connection.php";

$result="";
 if (isset($_GET["approve"])) {
  if ($_GET["approve"] == "unsuccessfull") {
    $result = "*Registration unsuccessfull!";
  }
  elseif ($_GET["approve"] == "regexists") {
    $result = "*Registration No. already exists";
  }
 }
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!--- Header code start --->
    <header>
         <nav class="navigation">
        <label class="navigation-h">NBU</label>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="http://localhost:8888/recover_project/portfolio.php">Portfolio</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
        <label class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
    </nav>
    </header>
    <!--- Header code end --->
    <section>
      <form method="POST" 
        action="registrationback.php"
        class="form"
        id="form"
        onsubmit="return login_validation()"
      >
      <div class="header">
        <h2>Registration form</h2>
      </div>
      <p><?php echo $result; ?></p>
        <div class="reg-control" id="name">
          <label for="fname">Full Name: </label>
          <input class="reg-center" type="text" id="fname" autocomplete="off" name="fname" placeholder="Enter Your Name" /><b
            ><span class="forerror" id="fname1"></span
          ></b>
        </div>

        <div class="reg-control">
          <label for="reg">Registration No:</label>
          <input
            class="reg-center"
            type="text"
            placeholder="Enter Your 13 digit Registration No."
            id="reg"
            autocomplete="off"
            name="reg"
          /><b><span class="forerror" id="reg1" ></span></b>
        </div>

        <div class="reg-control">
          <label for="fpassword">Password:</label>
          <input
            class="reg-center"
            type="password"
            id="fpassword"
            name="fpassword"
          placeholder="Enter Your New Password"/><b><span class="forerror" id="fpassword1" ></span></b>
        </div>

        <div class="reg-control">
          <input type="submit" value="Submit" class="reg-btn" name="submit" />
        </div>
      </form>
    </section>

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
