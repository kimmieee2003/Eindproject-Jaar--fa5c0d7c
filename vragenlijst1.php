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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-vragen.css">
    <link rel="stylesheet" href="css/vragenlijst1.css">
    <title>Vragen</title>
</head>
<body>

    <form id="form" class="vak" action="vragenlijst1.php">
        <label class="number" for="username">Hoe voel je je vandaag op een schaal van 1 tot 10? </label><br>
        <input type="hidden" id="custId" name="custId" value="0">
        <div class="stars" data-rating="0">
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
            <span class="star">&nbsp;</span>
        </div>
        <label class="text" for="msg">Wil je er iets over kwijt?</label>
        <div id="submit-stukje">
            <textarea class="msg" name="user_message"></textarea>
            <input class="submit" type="submit" value="Submit">
        </div>
    <?php print($_GET["custId"]. $_GET["user_message"]); ?>
    </form>

    <script src="js/script.js"></script>
</body>
</html>
