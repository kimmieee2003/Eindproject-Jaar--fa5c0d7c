<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-vragen.css">
    <link rel="stylesheet" href="css/vragenlijst-Coach.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="icon" href="images/bit_b_logo_white.png">

    <title>Vragen</title>
</head>
<body>

    <div class="container">
        <div id="slider">
            <ul class="slides">
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
                <li class="slide">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                    <img src="https://jarvis.bit-academy.nl/assets/images/space.png">
                </li>
            </ul>
        </div>
    </div>

    <div class="vak">
        <div class="grafiek">
            <div  id="chartContainer">
                <?php $dataPoints = array(
                    array("label"=> "9 Schooldagen geleden ", "y"=> 7),
                    array("label"=> "8 Schooldagen geleden ", "y"=> 2),
                    array("label"=> "7 Schooldagen geleden ", "y"=> 8),
                    array("label"=> "6 Schooldagen geleden", "y"=> 10),
                    array("label"=> "5 Schooldagen geleden", "y"=> 8),
                    array("label"=> "4 Schooldagen geleden", "y"=> 3),
                    array("label"=> "3 Schooldagen geleden", "y"=> 6),
                    array("label"=> "2 Schooldagen geleden", "y"=> 10),
                    array("label"=> "1 Schooldag geleden", "y"=> 5),
                    array("label"=> "Vandaag", "y"=> 1),
                );?>
            </div>
            <script>
            window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light1",
                title: {
                    text: "Grafiek van laatste weken"
                },
                axisX: {
                    tickLength: 0,
                    tickWidth: 0,
                    labelFontColor: "transparent", 
                    labelFontSize: 8,

                },
                axisY: {
                    title: "ingevoerde cijfer",
                    includeZero: true,
                    maximum: 10
                },
                data: [{
                    type: "line",
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();

            }
            </script>

            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        </div>

        <form form action="studenten_overzicht.php">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="Jquery/jquery.steps.js"></script>
    <script src="Jquery/jquery.steps.min.js"></script>
    <script src="js/background.js"></script>

</body>
</html>