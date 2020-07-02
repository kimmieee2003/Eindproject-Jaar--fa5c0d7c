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
<!DOCTYPE.html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style-overzicht.css">
<link rel="stylesheet" href="css/studentenoverzicht.css">
<link rel="icon" href="images/bit_b_logo_white.png">

<title>Overzicht</title>
</head>


<body>
    <header>
        <nav class="navigatie-balk">
            <img src="images\bit_academy_logo_white.png">
        </nav>
    </header>

    <div class="boven">
        <div class="vak">
            <div class="tietel">
                <p>Studenten die met je willen praten</p>
            </div>
            <div class="info-vak">
                <div class="studenten-gesprek">
                    <div class="naam-sg">Anna</div>
                    <div class="datum-sg">29-6-2020</div>
                    <div class="tijd-sg">13:00</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">Jeroen</div>
                    <div class="datum-sg">1-7-2020</div>
                    <div class="tijd-sg">14:15</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">Sara</div>
                    <div class="datum-sg">1-7-2020</div>
                    <div class="tijd-sg">10:00</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">Esther</div>
                    <div class="datum-sg">2-7-2020</div>
                    <div class="tijd-sg">12:10</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">Finn</div>
                    <div class="datum-sg">6-7-2020</div>
                    <div class="tijd-sg">13:00</div>
                </div>     
    
                       
            </div> 
        </div>

        <div class="vak">
            <div class="tietel">
                <p>Studenten met een laag cijfer</p>
            </div>
            <div class="info-vak">
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Levi</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Eva</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Dennis</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Samantha</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Roos</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Milan</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Mees</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Anna</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Finn</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Jeroen</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Sara</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">Esther</div>
                    <div class="shuttle-scl">shuttle 4</div>
                </div>
                                   
            </div>
        </div>
    </div>


        <div class="tietel-studentenlijst">
            <div class="tietleText">Naam</div> <div class="tietleText">Shuttle</div>  <div class="tietleText">Cijfer</div>   <div class="tietleText">Aanwezigheid</div>
        </div>
    <div class="studenten-lijst">
        <div class="student">
            <div class="naam-student">Anna</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">5</div>
            <div class="aanwezigheid-student">Op tijd</div>
        </div>
        <div class="student">
            <div class="naam-student">Dennis</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">5</div>
            <div class="aanwezigheid-student">Op tijd</div>
        </div>
        <div class="student">
            <div class="naam-student">Esther</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">5</div>
            <div class="aanwezigheid-student">Te laat</div>
        </div>
        <div class="student">
            <div class="naam-student">Eva</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">4</div>
            <div class="aanwezigheid-student">Op tijd</div>
        </div>
        <div class="student">
            <div class="naam-student">Mees</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">5</div>
            <div class="aanwezigheid-student">Te laat</div>
        </div>
        <div class="student">
            <div class="naam-student">Milan</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">5</div>
            <div class="aanwezigheid-student">Te laat</div>
        </div>
        <div class="student">
            <div class="naam-student">Jeroen</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">4</div>
            <div class="aanwezigheid-student">Te laat</div>
        </div>
        <div class="student">
            <div class="naam-student">Martin</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">9</div>
            <div class="aanwezigheid-student">Op tijd</div>
        </div>
        <div class="student">
            <div class="naam-student">Senne</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">6</div>
            <div class="aanwezigheid-student">Te laat</div>
        </div>
        <div class="student">
            <div class="naam-student">Finn</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">5</div>
            <div class="aanwezigheid-student">Op tijd</div>
        </div>
        <div class="student">
            <div class="naam-student">Myrthe</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">7</div>
            <div class="aanwezigheid-student">Op tijd</div>
        </div>
        <div class="student">
            <div class="naam-student">Jan</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">7</div>
            <div class="aanwezigheid-student">Te laat</div>
        </div>
        <div class="student">
            <div class="naam-student">Max</div>
            <div class="shuttle-student">shuttle 4</div>
            <div class="grafiek-student">8</div>
            <div class="aanwezigheid-student">Op tijd</div>
        </div>

    </div>


</body>

</html>