<?php
session_start();


     include_once "Db_info.php";
//On page 2

  if($_SERVER["REQUEST_METHOD"] == "POST")
   {



$mysqli = new mysqli($Server, $UserName, $Password, $DBname);

$user=$_POST['User'];
$pass=$_POST['Pass'];
$q="select * from User where Username='$user' and Password='$pass'";
$result=$mysqli->query($q);
$row = $result->fetch_assoc();

if($row["Username"]==$user and $row["Password"]==$pass )
{

      $_SESSION['UserName']=$user;// keeps the user name in all the session
      								//like a global variable

      header("Location: admin.php"); /* Redirect browser */

// exit();

}
else
{
      echo '
				<h1 style="text-align:center; color : red; " > User name or pass word Not Found Please try again</h1>';

}
}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pezwak co.</title>



 <link rel="stylesheet" href="css/normalize.min.css">
 <link rel="stylesheet" href="css/style.css">
 <style>
 body {
   background-color: LightSkyBlue ;
 }
 </style>

</head>

<body>
  <div class="login">
  <header class="header">
    <span class="text">Login</span>
    <span class="loader"></span>
  </header>

  <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <input class="input" type="text", placeholder="Username" name="User">
    <input class="input" type="password" placeholder="Password" name="Pass">
    <button class="btn" type="submit"></button>

  </form>
</div>


</body>
</html>
