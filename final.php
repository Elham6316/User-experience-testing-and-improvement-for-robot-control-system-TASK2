

    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robotarm";
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $v1 = $_POST['v1'];
 $v2 = $_POST['v2'];
 $v3 = $_POST['v3'];
 $v4 = $_POST['v4'];
 $v5 = $_POST['v5'];
 $v6 = $_POST['v6'];


}

    // Create connection
    $conn= new mysqli($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}




    if(isset($_POST['submit'])) {

$my_query1 = "INSERT INTO first (motor1,motor2,motor3,motor4,motor5,motor6) VALUES ('$v1', '$v2', '$v3','$v4','$v5','$v6')";
if (mysqli_query($conn, $my_query1)) {
    echo "SENDED ";
 } else {
    echo "Error: " . $my _query1 . "<br>" . mysqli_error($conn);
 

 }
}
?>