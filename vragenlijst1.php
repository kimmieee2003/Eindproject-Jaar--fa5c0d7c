<?php
$host = '127.0.0.1:3306';
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
    echo("Connected to: " . $db . " on " . $host . " version: " . phpversion());
    echo("<br>");
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<form action="/vragenlijst1.php">
<label for="username">Hoe voel je je vandaag op een schaal van 1 tot 10? </label><br>
<div class="stars" data-rating="1">
        <span class="star lessstars">&nbsp;</span>
        <span class="star lessstars">&nbsp;</span>
        <span class="star lessstars">&nbsp;</span>
        <span class="star lessstars">&nbsp;</span>
        <span class="star lessstars">&nbsp;</span>
        <span class="star 6stars">&nbsp;</span>
        <span class="star 6stars">&nbsp;</span>
        <span class="star 6stars">&nbsp;</span>
        <span class="star 6stars">&nbsp;</span>
        <span class="star 6stars">&nbsp;</span>
    </div>
<label for="msg">Wil je er iets over kwijt?</label><br>
<textarea id="msg" name="user_message"></textarea>
<input type="submit" value="Submit"><a href="vragenlijststudenten.php"></a>

</form>
<script src="js/script.js"></script>
</body>
</html>