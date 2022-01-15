<?php
session_start();
// if(!isset($_SERVER['HTTP_REFERER'])){
//     // redirect them to your desired location
//     header('location:index.php');
//     exit;
// }
$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$user = $_POST['email'];
$pass = $_POST['psw'];
$query = "SELECT * FROM students where rollno='".$user."' and pass='".$pass."'";
$result = mysqli_query($conn, $query);
if(mysqli_fetch_assoc($result)){
    $_SESSION['user'] = $user;
    header("location:chooseCourse.php");
    exit;
}
else{
    header("location:index.php?Invalid=Invalid ID and Password.");
}

?>
