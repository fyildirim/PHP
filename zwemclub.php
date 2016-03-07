<?php
	$count = 0;
	$zwemclub["naam1"] = "De Spartelkuikens";
	$zwemclub["leden1"] = 25;
	$zwemclub["naam2"] = "De Waterbuffels";
	$zwemclub["leden2"] = 32;	
	$zwemclub["naam3"] = "Plonsmderin";
	$zwemclub["leden3"] = 11;
	$zwemclub["naam4"] = "Bommetje";
	$zwemclub["leden4"] = 23;
	
	echo "<table border='1'>";
	foreach($zwemclub as $i) {
		$count++;
		if($count % 2 == 1) echo "<tr>";
		echo "<td>".$i;
		for($j = 0; $j < ($i-$i%5)/5; $j++) {
			echo "<img src='swim.png' width='25px'>";
		}
		echo "</td>";
		if($count % 2 == 0) echo "</tr>";
	}
	echo "</table>";