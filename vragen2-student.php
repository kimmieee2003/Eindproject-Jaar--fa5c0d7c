<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-vragen.css">
    <link rel="stylesheet" href="css/vragenlijststudenten.css">
    <title>Vragen voor studenten</title>
</head>
<body>
    <div class="vak">
        <div class="grafiek">Hier komt de grafiek</div>
            <form form action="/vragenlijststudenten.php">
                <label class="text" for="vraag">wil je een gesprek met een coach?</label><br>
                <div id="keuze">
                    <input class="radio-knop" type="radio" id="ja" name="antwoord" value="ja">
                    <label class="radio-knop"  for="ja">Ja</label><br>                
                    <input class="radio-knop" type="radio" id="nee" name="antwoord" value="nee">
                    <label class="radio-knop" for="nee">Nee</label><br>   
                </div>
                <label class="text">Met welke coach zou je op gesprek willen?</label><br>
                <div id="select-stukje">
                    <select id="selectie">
                        <option value="none">Kies er een</option>
                        <option value="Stijn">Stijn</option>
                        <option value="Ties">Ties</option>
                        <option value="Klaas">Klaas</option>
                        <option value="josephine">Josephine</option>
                        <option value="Bram">Bram</option>
                        <option value="Fons">Fons</option>
                        <option value="Thomas">Thomas</option>
                    </select>
                    <input type="date" id="start" name="trip-start"
                        value="2020-01-04"
                        min="2020-01-04" max="2020-08-24">
                </div>
                <input class="submit" type="submit" value="submit">
        </form>
    </div>


</form>
</body>
</html>