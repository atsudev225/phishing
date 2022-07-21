
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fbform";
$mail= $_POST['email'];
$mdp= $_POST['mdp'];
$sql = "INSERT INTO info (email, mdp) VALUES ('$mail','$mdp')";
  
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  
  // use exec() because no results are returned
  $conn->exec($sql);
  header('Location: bienvenue.php');
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>