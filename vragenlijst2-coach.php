<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-vragen.css">
    <link rel="stylesheet" href="css/vragenlijst-Coach.css">
    <title>Vragen</title>
</head>
<body>
    <div class="vak">
        <div class="grafiek">hierboven komt de grafiek!!</div>

        <form form action="/vragenlijst2.php">
            <p class="text">Wil je een gesprek met iemand?</p>
            <div id="keuze">
                <input class="radio-knop" type="radio" id="ja" name="antwoord" value="ja">
                <label class="radio-knop"  for="ja">Ja</label><br>                
                <input class="radio-knop" type="radio" id="nee" name="antwoord" value="nee">
                <label class="radio-knop" for="nee">Nee</label><br>   
            </div>
            <div class="info">
                <label class="text" for="msg">Met wie zou je een gesprek willen?</label>
                <textarea class="msg" name="user_message"></textarea>                
            </div>
            <div class="info">
                <label class="text" for="msg">Wanneer zou je een gesprek willen?</label>
                <input type="date" id="start" name="trip-start"
                    value="2020-01-04"
                    min="2020-01-04" max="2020-08-24">
            </div>
            <input class="submit" type="submit" value="Submit">                

        </form>
    </div>
</body>
</html>