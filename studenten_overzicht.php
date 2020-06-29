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
                    <div class="naam-sg">naam</div>
                    <div class="datum-sg">datum</div>
                    <div class="tijd-sg">tijd</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">naam</div>
                    <div class="datum-sg">datum</div>
                    <div class="tijd-sg">tijd</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">naam</div>
                    <div class="datum-sg">datum</div>
                    <div class="tijd-sg">tijd</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">naam</div>
                    <div class="datum-sg">datum</div>
                    <div class="tijd-sg">tijd</div>
                </div>     
                <div class="studenten-gesprek">
                    <div class="naam-sg">naam</div>
                    <div class="datum-sg">datum</div>
                    <div class="tijd-sg">tijd</div>
                </div>     
    
                       
            </div> 
        </div>

        <div class="vak">
            <div class="tietel">
                <p>Studenten met een laag cijfer</p>
            </div>
            <div class="info-vak">
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                <div class="studenten-cijfer-laag">
                    <div class="naam-scl">naam</div>
                    <div class="shuttle-scl">shuttle</div>
                </div>
                                   
            </div>
        </div>
    </div>


        <div class="tietel-studentenlijst">
            <div>Naam</div> <div>Shuttle</div>  <div>Cijfer</div>   <div>Aanwezigheid</div>
        </div>
    <div class="studenten-lijst">
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>
        <div class="student">
            <div class="naam-student">naam</div>
            <div class="shuttle-student">shuttle</div>
            <div class="grafiek-student">grafiek</div>
            <div class="aanwezigheid-student">aanwezigheid</div>
        </div>

    </div>


</body>

</html>