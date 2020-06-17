
<?php
$host = 'localhost';
$db   = 'healthtracker';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $dbh = new PDO($dsn, $user, $pass, $options);
    // echo("Connected to: " . $db . " on " . $host . " version: " . phpversion());
    // echo("<br>");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>
Je hebt <?php echo $_GET["custId"]; ?> sterren aangegeven<br>
Nog iets te zeggen?<br><?php echo $_GET["user_message"]; ?><br><br>

<?php print($_GET["custId"]. $_GET["user_message"]); ?>

<?php
//database code



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthtracker";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO checkupS (student_id, cijfer) VALUES ('?','?')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

