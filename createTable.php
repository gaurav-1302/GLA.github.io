<?php
$conn = mysqli_connect("localhost", "admin1", "admin1", "portal");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE TABLE info(
    ROLLNO INT(12),
    STUDENT_NAME VARCHAR(20),
    EMAIL VARCHAR(40),
    CONTACT INT(10),
    CPI INT(4),
    why VARCHAR(200))";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  $conn->close();
  ?>
  