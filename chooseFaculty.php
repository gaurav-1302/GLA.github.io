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
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Faculty</title>
    <link rel="stylesheet" href="chooseFaculty.css">
</head>
<body>
    <div class="container">
      <div class="navbar">
        <img src="photos/universityLogo.jpg" class="logo">
        <nav>
            <ul>
                <li><a href="">Home Page</a></li>
                <li><a href="chooseCourse.php">Change course</a></li>
                <li><a href="logout.php?logout">Logout</a></li>
            </ul>
        </nav>
        <img src="photos/menulogo.png" class="menu-icon">
      </div>
      <div class="row">
          <div class="col-1">
              <h1>Choose Faculty for CyberSecurity</h1>
          </div>
      </div>
      <div class="row">
          <div class="col-1">
              <div class="faculty">
                  <img src="photos/caption.jpg" class="faculty-img">
                  <li><a href="faculty1.php" id="faculty1" onclick="return myfun()">Captain America</a></li>
                  <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                      Donec euismod, nisl eget consectetur sagittis, nisl nunc
                      aliquet nisi, euismod aliquam nisl nunc eget nisl.
                      Pellentesque habitant morbi tristique senectus et netus et
                      malesuada fames ac turpis egestas.
                  </p>
                  <a href="">Read More</a>
              </div>
              <div class="faculty">
                    <img src="photos/thor.jpg" class="faculty-img">
                    <li><a href="faculty1.php" id="faculty2" onclick="return myfun()">Thor</a></li>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Donec euismod, nisl eget consectetur sagittis, nisl nunc
                        aliquet nisi, euismod aliquam nisl nunc eget nisl.
                        Pellentesque habitant morbi tristique senectus et netus et
                        malesuada fames ac turpis egestas.
                    </p>
                    <a href="">Read More</a>
              </div>
              <div class="faculty">
                        <img src="photos/tony.jpg" class="faculty-img">
                        <li><a href="faculty1.php" id="faculty3" onclick="return myfun()">Tony Stark</a></li>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec euismod, nisl eget consectetur sagittis, nisl nunc
                            aliquet nisi, euismod aliquam nisl nunc eget nisl.
                            Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas.
                        </p>
                        <a href="">Read More</a>
              </div>
              <div class="faculty">
                        <img src="photos/hulk.jpg" class="faculty-img">
                        <li><a href="faculty1.php" id="faculty4" onclick="return myfun()">Hulk</a></li>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec euismod, nisl eget consectetur sagittis, nisl nunc
                            aliquet nisi, euismod aliquam nisl nunc eget nisl.
                            Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas.
                        </p>
                        <a href="">Read More</a>
              </div>
      </div>
    </div>
</body>    
<footer>
    Follow us on:
    <div class="social-links">
        <a href=""><img src="photos/fb.png" class="social-icon"></a>
        <a href=""><img src="photos/ig.png" class="social-icon"></a>
        <a href=""><img src="photos/tw.png" class="social-icon"></a>
    </div>
</footer>
<?php
    $f = fopen("counter.txt","r");
    $count = fgets($f);
    fclose($f);
?>
<script>
    var count = <?php echo $count; ?>;
    function myfun(){
        if(count >30){
            alert("Registration is full for this faculty !!!! Please choose another faculty");
            return false;
        }
        else{
           return true;
        }
    }
</script>
</html>
