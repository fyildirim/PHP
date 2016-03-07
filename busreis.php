<!DOCTYPE HTML>
    <head>
        <title>Busreis</title>
        <style>
            * {
                margin:10vh;
                font: 30px "Arial";
                text-align:center;
            }
        </style>
        </head>
        <?php
            $leeftijd=0;
            $prijs=0;
            
            function getPrijs($leeftijd) {
                if ($leeftijd < 3) {
                    $prijs = 0;
                } else if ($leeftijd <= 12 || $leeftijd > 65) {
                    $prijs = 5;
                } else {
                    $prijs = 10;
                }
                return $prijs;
            }
            $leeftijd =  10;
            echo "Leeftijd: ".$leeftijd." ~ Prijs: &euro;".getPrijs($leeftijd).",-<br>";
            $leeftijd =  2;
            echo "Leeftijd: ".$leeftijd." ~ Prijs: &euro;".getPrijs($leeftijd).",-<br>";
            $leeftijd =  65;
            echo "Leeftijd: ".$leeftijd." ~ Prijs: &euro;".getPrijs($leeftijd).",-<br>";
            $leeftijd =  12;
            echo "Leeftijd: ".$leeftijd." ~ Prijs: &euro;".getPrijs($leeftijd).",-<br>";
        ?>

    
    