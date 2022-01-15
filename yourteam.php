<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:index.php');
    exit; 
}
if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}

echo "Students in your team are :- <br>";
    foreach($_POST['checkboxName'] as $value)
    {
      echo $value.'<br>';
    }
?>