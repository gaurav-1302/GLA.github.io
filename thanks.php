<?php
session_start();
$siteuser = $_SESSION['user']; 
if(!isset($_SESSION['user'])){
    header('location:index.php');
    exit; 
}
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<style>
.container{
    width: 100%;
    height: 100vh;
    padding-left: 8%;
    padding-right: 8%;
    box-sizing: border-box;
}
.navbar{
    width: 100%;
    display: flex;
    align-items: center;
}
.logo{
    width: 200px;
    cursor: pointer;
    margin-right: 10px 0;

}
.menu-icon{
    width: 25px;
    cursor: pointer;
}
nav{
    flex: 1;
    text-align: right;
}   
nav ul li{
    list-style: none;
    display: inline-block;
    margin-right: 30px;
}
nav ul li a{
    text-decoration: none;
    color: #000;
    font-size: 20px;
}
nav ul li a:hover{
    color: rgb(255, 4, 4);
}
</style>
<body>
  <div class="container">
      <div class="navbar">
        <img src="photos/universityLogo.jpg" class="logo">
        <nav>
            <ul>
                <li><a href="logout.php?logout">Back To Home</a></li>
            </ul>
        </nav>
        <img src="photos/menulogo.png" class="menu-icon">
      </div>
</body>
<?php
$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO registered (rollno)
    VALUES ('$siteuser')";
if ($result=mysqli_query($conn,$sql)) {
    echo "<h1><mark>Registered Successfully !!!!</mark></h1>";
    $conn->close();
  }


$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
use MongoDB\Driver\Query;

$name = $conn->real_escape_string($_POST['name']);
$rollno = $siteuser;
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$cpi = $conn->real_escape_string($_POST['cpi']);
$why = $conn->real_escape_string($_POST['why']);
$sqliquery = "INSERT INTO info (ROLLNO, STUDENT_NAME, EMAIL, CONTACT, CPI, why)
      VALUES ('$rollno','$name','$email','$contact','$cpi','$why')";
if(mysqli_query($conn ,$sqliquery)) {
        echo "<h2>Your form has been submited."."<br>"."You will be informed after getting sortlisted by faculty.<h2>";
        $conn->close();
} else {
        echo "Error: ".":-" . mysqli_error($conn);
  }


$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM info";
if ($result=mysqli_query($conn,$sql)) {
    $rowcount=mysqli_num_rows($result);
    $conn->close();
}

  $f = fopen("counter.txt","w");
  fwrite($f,$rowcount);
  fclose($f);
 
?>
</html>