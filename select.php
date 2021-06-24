<?php 
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=robot_dir", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully \n";
  echo "<br>";

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();


} 

$sth = $conn->prepare("SELECT  left_dir , right_dir, forward , backward , stop_dir FROM dir");
$sth->execute();

if(isset($_POST['right'])){
print(" your choose \n");
$result = $sth->fetchColumn(1);
print("direction = $result\n"); 
}

 if(isset($_POST['left'])){
    print(" your choose \n");
    $result = $sth->fetchColumn();
    print("direction = $result\n"); }

    if(isset($_POST['forward'])){
        print(" your choose \n");
        $result = $sth->fetchColumn(2);
        print("direction = $result\n"); }
  if(isset($_POST['backward'])){
            print(" your choose \n");
            $result = $sth->fetchColumn(3);
            print("direction = $result\n"); }
   if(isset($_POST['stop'])){
                print(" your choose \n");
                $result = $sth->fetchColumn(4);
                print("direction = $result\n"); }
?>

		
				