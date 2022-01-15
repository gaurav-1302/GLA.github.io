
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="indexfile.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GLA UNIVERSITY</title>
</head>
    <body>
      <?php
        if(@$_GET['Invalid']==true)
        {
      ?>
        <h3><mark><?php echo $_GET['Invalid']?></mark></h3>
      <?php
        }
      ?>
      <?php
        if(@$_GET['Registered']==true)
        {
      ?>
        <h3><mark><?php echo $_GET['Registered']?></mark></h3>
      <?php
        }
      ?>
    <button class="open-button" onclick="openForm()">Student LogIn</button>
    <button class="open-button2" onclick="openFormA()">Faculty LogIn</button>
    <button class="Rform-button" onclick="openFormR()" style="background-color: #555;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    top: 160px;
    right: 28px;
    width: 280px;">Register Yourself (Student)</button>
    
    <div class="form-popup" id="myForm">
      <form action="S_login.php" class="form-container" method="post">
        <h1>Login</h1>
    
        <label for="email"><b>University Roll Number</b></label>
        <input type="text" value="Enter University Roll Number" name="email" onfocus="this.value=''" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" value="Enter Password" name="psw" onfocus="this.value=''" required>

        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm();">Close</button>
      </form>
    </div>
    <div class="form-popup" id="myForm2">
        <form action="Flogin.php" class="form-container" method="post">
          <h1>Login</h1>
      
          <label for="email"><b>Faculty ID</b></label>
          <input type="text" placeholder="Enter Your ID" name="id" onfocus="this.value=''" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Password" name="psw" onfocus="this.value=''" required>
  
          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeFormA();">Close</button>
        </form>
      </div>

      <div class="form-popup" id="myForm3">
        <form class="form-container" method="post" id="rform" action="Sregister.php">
          <h1>Login</h1>
      
          <label for="email"><b>University Roll No.</b></label>
          <input type="text" placeholder="Enter Your ID" name="id" onfocus="this.value=''" required>
    
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Password" name="psw" onfocus="this.value=''" required>

          <label for="psw"><b>Confirm Password</b></label>
          <input type="password" placeholder="Repeat Password" name="cpsw" onfocus="this.value=''" required>
  
          <button type="submit" class="btn">Register</button>
          <button type="button" class="btn cancel" onclick="closeFormR();">Close</button>
        </form>
      </div>
    
    <script>
        var user = document.getElementByName("email").value;
        var pass = document.getElementByName("psw").value;
    function openForm() {
        document.getElementById("myForm").style.display = "block";
    }
    
    function closeForm() {
        document.getElementById("myForm").style.display = "none";
    }
    function openFormA() {
        document.getElementById("myForm2").style.display = "block";
    }
    
    function closeFormA() {
        document.getElementById("myForm2").style.display = "none";
    }
    function openFormR() {
        document.getElementById("myForm3").style.display = "block";
    }
    
    function closeFormR() {
        document.getElementById("myForm3").style.display = "none";
    }

  
    </script>
    
    </body>
</html>