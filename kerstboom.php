<!DOCTYPE HTML>
    <head>
        <title>Kerstboom</title>
        <style>
            body {
                margin-top:10vh;
                font: 30px "Arial";
                text-align:center;
            }
        </style>
        </head>
        <?php
            $grootte = 10;
            for($i = 0; $i < 15; $i++){
                for($j = 0; $j < (2*$i)-1; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        ?>

    
    