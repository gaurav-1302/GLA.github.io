<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['id'];
$pass = $_POST['psw'];
$cpass = $_POST['cpsw'];
if($pass == $cpass){
    $query = "INSERT INTO students (rollno, pass) VALUES ('$user', '$pass')";
    $result = mysqli_query($conn, $query);
    if(($result === TRUE)){
        $_SESSION['user'] = $user;
        header("location:index.php?Registered=Registered Successfully.");
        exit;
    }
    else{
        header("location:index.php?Registered=Registeration Failed.");
    }
}
else{
    header("location:index.php?Registered=Passwords do not match.");
}
?>