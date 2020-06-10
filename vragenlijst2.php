<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
hierboven komt de grafiek!!
<form form action="/vragenlijst2.php">
<label for="vraag">wil je een gesprek met een coach?</label><br>
<input type="checkbox" name="muzieksoort" value="ja" checked>ja
<input type="checkbox" name="muzieksoort" value="nee">nee<br>
<label for="msg">met wie zou je een gesprek willen?</label><br>
<textarea id="msg" name="user_message"></textarea><br>
<label for="msg">Wanneer zou je een gesprek willen?</label><br>
<input type="date" id="start" name="trip-start"
       value="2020-01-04"
       min="2020-01-04" max="2020-08-24">
<input type="submit" value="Verzenden" ><a href="vragenlijststudenten.php"></a>
</form>
</body>
</html>