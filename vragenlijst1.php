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