<?php 

    include 'header.php';

    function mymusic() {
        return array(
            array("Artiest" => "Don Diablo", "Album" => "Universe"),
            array("Artiest" => "Skepta", "Album" => "Shutdown"),
            array("Artiest" => "JME & Skepta", "Album" => "That's not me"),
            array("Artiest" => "2Pac", "Album" => "Ghetto Gospel"),
            array("Artiest" => "JME", "Album" => "Man don't care"),
            array("Artiest" => "JME", "Album" => "Taking Over")
        );
    } 

    echo "<table>";
        foreach (mymusic() as $item) {
            echo "<tr>";
                echo "<td>" . $item["Artiest"] . "</td>";
                echo "<td>" . $item["Album"] . "</td>";
            echo "</tr>";
        }
    echo "</table>";

    include 'footer.php';

?>