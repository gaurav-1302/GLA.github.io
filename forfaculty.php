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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="forfaculty.css" rel="stylesheet">
  <title>Faculty Panel</title>
  <style>
    *{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}

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
.row{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 50px 0;
}
.col{
    flex-basis: 40%;
    position: relative;
    margin-left: 50px;
}
.row .col-1 h1{
    font-size: 30px;
    font-weight: bold;
    color: #000;
}

html {
    scroll-behavior: smooth;
}
.student-table{
    font-size: large;
}
input[type=checkbox]{
    width: 70px;
}
table{
    background: linear-gradient(to right, #fb5283, #ff3527);
}

@media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
    button {
      background-color: #0099ff;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: left;
    }
    
    button:hover {
      background-color: #2600ff;
    }
    footer{
    background: linear-gradient(to right, #fb5283, #ff3527);
    color: black;
    padding: 20px 0;
    text-align: center;
    font-size: 20px;
    font-weight: bold;
}
  </style>
</head>
<body>
  <div class="container">
    <div class="navbar">
      <img src="photos/universityLogo.jpg" class="logo">
      <nav>
          <ul>
              <li><a href="logout.php?logout">Logout</a></li>
          </ul>
      </nav>
      <img src="photos/menulogo.png" class="menu-icon">
    </div>
  <div class="row">
    <div class="col-1">
        <h1>SHORTLIST STUDENTS TO GET THEM INTO YOUR TEAM.</h1>
    </div>
  </div>
  <div class="container">
    <div class="student-table">
    <?php
$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query= "SElECT * FROM info";
echo "<form action='yourteam.php' method='post'>";
echo "<table border=1px>";
echo "<tr><th>SELECT</th><th>ROLLNO</th><th>STUDENT NAME</th><th>EMAIL</th><th>CONTACT</th><th>CPI</th><th>REPLY</th></tr>";
if ($result = $conn->query($query)) {

  /* fetch associative array */
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["ROLLNO"];
      $field2name = $row["STUDENT_NAME"];
      $field3name = $row["EMAIL"];
      $field4name = $row["CONTACT"];
      $field5name = $row["CPI"];
      $field6name = $row["why"];
      $final = "Roll no - ".$field1name.", Name - ".$field2name.", Contact - ".$field4name.", Email - ".$field3name;
      echo "<tr><td><input type='checkbox' name='checkboxName[]' value='$final'></td><td>".$field1name."</td><td>".$field2name."</td><td>".$field3name."</td><td>".$field4name."</td><td>".$field5name."</td><td>".$field6name."</td></tr>";
      
  }

  /* free result set */
  $result->free();
}
?>
</table>
</div>
  </div>
  <div class="row">
  <button type="submit" value="submit">Submit</button>
</div>
</form>
</body>
<footer>
    *********
</footer>
</html>
