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
$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($result = $conn->query("SELECT rollno FROM registered WHERE rollno = '".$siteuser."'")) {
    if($result->num_rows == 1) {
        // echo "Data exist";
        $registered = true;
    }
    else {
        // echo "Not";
        $registered = false;
}
}
// echo $siteuser;
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Course</title>
    <link rel="stylesheet" href="chooseCourse.css">
</head>
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
              <h1>Choose Your Course</h1>
          </div>
      </div>
      <div class="row">
          <div class="col-1">
              <div class="faculty">
                  <div class="c1">
                  <img src="photos/cybersecurity.jpg" class="faculty-img" align="left">
                  <li><a href="chooseFaculty.php" id="faculty1" onclick="return myfun()">Cyber Security</a></li>
                  <p>
                    Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks. 
                    <a href="https://www.cisco.com/c/en_in/products/security/what-is-cybersecurity.html" target="_blank">Read More</a>
                  </p>
                  
                </div>
              </div>
              <div class="faculty">
                <div class="c1">
                    <img src="photos/ml.jpg" class="faculty-img" align="left">
                    <li><a href="chooseFaculty.php" onclick="return myfun()">Machine Learning</a></li>
                    <p>
                        Machine learning is a branch of artificial intelligence (AI)
                         and computer science which focuses on the use of data and algorithms
                          to imitate the way that humans learn, gradually improving its accuracy.
                        <a href="https://www.ibm.com/cloud/learn/machine-learning" target="_blank">Read More</a>
                    </p>
                    
                </div>
              </div>
              <div class="faculty">
                <div class="c1">
                        <img src="photos/imageprocessing.jpg" class="faculty-img" align="left">
                        <li><a href="chooseFaculty.php" onclick="return myfun()">Fundamentals of Image Processing</a></li>
                        <p>
                            Digital image processing is the use of a digital computer to process digital
                            images through an algorithm.<a href="https://en.wikipedia.org/wiki/Digital_image_processing" target="_blank">Read More</a>
                        </p>
                    </div>
              </div>
              <div class="faculty">
                <div class="c1">
                        <img src="photos/cloudcomputing.jpg" class="faculty-img" align="left">
                        <li><a href="chooseFaculty.php" onclick="return myfun()">Cloud Computing</a></li>
                        <p>
                            Cloud computing is the on-demand availability of computer system resources, 
                            especially data storage (cloud storage) and computing power, without direct 
                            active management by the user.<a href="https://en.wikipedia.org/wiki/Cloud_computing" target="_blank">Read More</a>
                        </p>
                        
                    </div>
              </div>
              <div class="faculty">
                <div class="c1">
                <img src="photos/python.jpg" class="faculty-img" align="left">
                <li><a href="chooseFaculty.php" onclick="return myfun()">Joy of Programming using Python</a></li>
                <p>
                    Python is an interpreted high-level general-purpose programming language.
                    Its language constructs as well as its object-oriented approach aim to help programmers 
                    write clear, logical code for small and large-scale projects.
                    <a href="https://en.wikipedia.org/wiki/Python_(programming_language)" target="_blank">Read More</a>
                </p>
                
            </div>
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
<script>
    var registered = <?php echo $registered; ?>;
    function myfun(){
        if(registered){
            alert("You have already Registered For a Course !!!");
            return false;
        }
        else{
           return true;
        }
    }
</script>
</html>
