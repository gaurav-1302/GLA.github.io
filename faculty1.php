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
    <title>Faculty-1</title>
</head>
<style>
    * {
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
    input[type=text], select, textarea {
      width: 70%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    input[type=email], select, textarea {
      width: 70%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    input[type=number], select, textarea {
      width: 70%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    
    label {
      padding: 12px 12px 12px 0;
      display: inline-block;
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
    
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    
    .col-25 {
      float: left;
      width: 25%;
      margin-top: 6px;
    }
    
    .col-75 {
      float: left;
      width: 75%;
      margin-top: 6px;
    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }
    
    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
        width: 100%;
        margin-top: 0;
      }
    }
    </style>
<body>
<div class="container">
      <div class="navbar">
        <img src="photos/universityLogo.jpg" class="logo">
        <nav>
            <ul>
                <li><a href="">Home Page</a></li>
                <li><a href="logout.php?logout">Logout</a></li>
            </ul>
        </nav>
        <img src="photos/menulogo.png" class="menu-icon">
      </div>
<div class="row">
    <div class="col-1">
        <h1>Faculty-1</h1>
    </div>
</div>
<div class="container">
      <form class="form-container" method="post" id="subform" onsubmit="return alert_1(this)">
        <h1>Fill Detail Form</h1>
        <div class="row">
            <div class="col-25">
                <label for="name">Name</label>
            </div>
            <div class="col-75">
                <input type="text" id="name" name="name" placeholder="Your name.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="Rollno">University Rollno</label>
            </div>
            <div class="col-75">
                <input type="number" id="rollno" name="rollno" placeholder="Your University Rollno.." value="<?php echo $siteuser; ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="email">Email</label>
            </div>
            <div class="col-75">
                <input type="email" id="email" name="email" placeholder="Your email address.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="Contact Number">Contact Number</label>
            </div>
            <div class="col-75">
                <input type="number" id="contact" name="contact" placeholder="Your Phone Number.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="cpi">CPI</label>
            </div>
            <div class="col-75">
                <input type="number" id="cpi" name="cpi" placeholder="Your All over CPI.." required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="why">Why..?</label>
            </div>
            <div class="col-75">
                <input type="text" id="why" name="why" placeholder="Why are you choosing this course and faculty..?" style="height: 100px;" required>
            </div>
        </div>
        <div class="row">
            <button type="submit" value="submit">Submit</button>
        </div>
      </form>
</div>
<script> 
    function alert_1(form){
      var confirmation = confirm("Confirm to submit !")
      if(confirmation==false){
        document.getElementById("subform").action = "";
      }
      else
        document.getElementById("subform").action = "thanks.php";
    }
</script>
</body>

</html>