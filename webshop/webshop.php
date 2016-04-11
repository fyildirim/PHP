<?php
    class Auto {
        
        private $merk;
        private $type;
        private $prijs;
        private $fotoURL;
        
        public function __construct($merk, $type, $prijs, $fotoURL) {
            $this->merk = $merk;
            $this->type = $type;
            $this->prijs = $prijs;
            $this->fotoURL = $fotoURL;
        }
        
        public function getMerk() {
            return $this->merk;
        }
        
        public function getType() {
            return $this->type;
        }
        
        public function getPrijs() {
            return $this->prijs;
        }
        
        public function getFotoURL() {
            return $this->fotoURL;
        }
    
        public function setMerk($merk) {
            $this->merk = $merk;
        }
        public function setType($type) {
            $this->type = $type;
        }
        public function setPrijs($prijs) {
            $this->prijs = $prijs;
        }
        public function setFotoURL($fotoURL) {
            $this->fotoURL = $fotoURL;
        }
        
    }
    
    $lijst = array(
        new Auto("Ford", "Fiesta", 23999, "img/fordfiesta.jpg"),
        new Auto("Ford", "Focus", 18995, "img/fordfocus.jpg"),
        new Auto("Opel", "Astra", 14895, "img/opelastra.jpg"),
        new Auto("Opel", "Insignia", 65450, "img/opelinsignia.jpg"),
        new Auto("Subaru", "Forester", 34750, "img/subaruforester.jpg"),
        new Auto("Subaru", "Impreza", 28345, "img/subaruimpreza.jpg"),
        new Auto("Mercedes", "E 63", 110995, "img/mercedede63.jpg"),
        new Auto("Mercedes", "CLA 45", 190780, "img/mercedescla45.jpg"),
        new Auto("Mercedes", "E 230", 1000, "img/mercedese230.jpg"),
        new Auto("Mercedes", "C 250", 599, "img/mercedesc250.jpg"),
        new Auto("Ferrari", "612 GTO", 350500, "img/ferrari612.jpg"),
        new Auto("Ferrari", "California", 210780, "img/ferraricalifornia.jpg"),
        new Auto("Ferrari", "458", 280775, "img/ferrari458.jpg"),
        new Auto("Lotus", "Elise CR", 48591, "img/lotuselisecr.jpg"),
        new Auto("Lotus", "Elise S CR", 60079, "img/lotuselisescr.jpg"),
        new Auto("Citroen", "2CV", 459, "img/citroen2cv.jpg"),
        new Auto("Volvo", "V40", 1250, "img/volvov40.jpg"),
        new Auto("Mini", "Cooper", 34495, "img/minicooper.jpg")
    );
    
?>

<html>
<head>
    <link rel="stylesheet" href="../stylesheets/style.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Webshop PHP</title>
</head>
<body>
    <form method="post">
        <input type="text" name="minprijs" placeholder="Minimum Prijs">
        <input type="text" name="maxprijs" placeholder="Maximum Prijs">
        <select name="merk">
            <option value="alle">Alle merken</option>
            <?php
                $merken = array();
                foreach ($lijst as $auto) {
                    if (!in_array($auto->getMerk(), $merken)) {
                        array_push($merken, $auto->getMerk());
                    }
                }
                foreach ($merken as $merk) {
                    echo "<option value=".$merk.">".$merk."</option>";
                }
            ?>
        </select>
        <input type="submit" name="submit" value="Ok">
    </form>

    <?php
        foreach ($lijst as $auto) {
            if (!isset($_POST["submit"]) || 
                (isset($_POST["submit"]) && ($auto->getPrijs() >= $_POST["minprijs"] || 
                $_POST["minprijs"] == "") && ($auto->getPrijs() <= $_POST["maxprijs"] || 
                $_POST["maxprijs"] == "") && ($auto->getMerk() == $_POST["merk"] || $_POST["merk"] == "alle"))
            ) {
                echo "<div class='autokader'>";
                    echo "<p class='merktype'>";
                        echo $auto->getMerk()." ".$auto->getType()."<br>";
                    echo "</p>";
                    echo "<p class='prijs'>";
                        echo "€ ".$auto->getPrijs().",-<br>";
                    echo "</p>";
                        echo "<img src='".$auto->getFotoURL()."'><br><br>";
                echo "</div>";
            }
        }
    ?>

</body>
</html>