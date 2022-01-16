<?php  include "connection.php";

if (isset($_POST["submit"])){
	$fname = filter_var($_POST["fname"], FILTER_SANITIZE_STRING);
	$reg = filter_var($_POST["reg"], FILTER_SANITIZE_STRING);
    $fpassword = filter_var($_POST["fpassword"], FILTER_SANITIZE_STRING);

}




$verify=0;

$sql_ = "SELECT * FROM registration";
$result_ = mysqli_query($conn, $sql_);
while($id_verify = mysqli_fetch_array($result_)) {

  if ($reg==$id_verify["reg"]) {
     $verify++;
 }
}

if ($verify>0) {
   header("Location:register.php?approve=regexists");

}
else{

    $sql = "INSERT INTO registration (fname,reg,pass) VALUES ('".$fname."','".$reg."','".$fpassword."')";
        if ($conn->query($sql) === TRUE){ 


            $sql1 = "INSERT INTO profile (p_name,p_reg) VALUES ('".$fname."','".$reg."')";
                if ($conn->query($sql1) === TRUE){ 


                    header("Location:login.php?approve=successfull");
                } 
                else 
                {

                    header("Location:register.php?approve=unsuccessfull");
                }
            } 
            else 
            {

                header("Location:register.php?approve=unsuccessfull");
            }

        }


    ?>