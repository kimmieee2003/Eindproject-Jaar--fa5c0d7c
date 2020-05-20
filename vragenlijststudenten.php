<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vragen voor studenten</title>
</head>
<body>
    <h1>Hier komt de grafiek dus let hier niet op</h1>
    <form form action="/vragenlijststudenten.php">
        <label for="vraag">wil je een gesprek met een coach?</label><br>
        <input type="checkbox" name="checkbox-yes" value="ja">ja
        <input type="checkbox" name="checkbox-no" value="nee">nee<br>
        <label>Met welke coach zou je op gesprek willen?</label><br>
        <select>
          <option value="none">Kies er een</option>
          <option value="Stijn">Stijn</option>
          <option value="Ties">Ties</option>
          <option value="Klaas">Klaas</option>
          <option value="josephine">Josephine</option>
          <option value="Bram">Bram</option>
          <option value="Fons">Fons</option>
          <option value="Thomas">Thomas</option>
        </select><br><br>
        <input type="date" id="start" name="trip-start"
       value="2020-01-04"
       min="2020-01-04" max="2020-08-24">
       <input type="submit" value="Verzend">
    </form>



</form>
</body>
</html>