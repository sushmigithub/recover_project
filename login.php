<?php include "connection.php"; 
session_start();

$verify=0;
$msg="";

 if (isset($_GET["approve"])) {
  if ($_GET["approve"] == "successfull") {
    $msg = "*Registration successfull!";

  }
  
 }



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username=filter_var($_POST['username'], FILTER_SANITIZE_STRING);
  
    $password=filter_var($_POST['password'], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM registration";
$result = mysqli_query($conn, $sql);
    while($id_verify = mysqli_fetch_array($result)) {

      if ($username==$id_verify["reg"] && $password==$id_verify["pass"]) {
         $verify++;
      }
   }

if ($verify>0) {
   header("Location:portfolio.php");
   $_SESSION['username']=$username;

}
else{
   $msg="Wrong Username or Password";
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
            <li><a href="portfolio.php">Portfolio</a></li>
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
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <h1>
                Login
            </h1>

        <p><?php echo $msg; ?></p>
     
              
            <div>
                <input type="text" name="username" required>
            </div>
            <div>
                <input type="password" name="password" required>
            </div>
            <div>
                <button type="submit" name="submit">Submit</button>
            </div>
           
            <div>
                New User?<a href="register.php"> Register Here</a>
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
