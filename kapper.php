<!DOCTYPE html>
<html>
	<head>
		<style>

		</style>
		<title>Kapper</title>
	</head>
	
	<body>
		<?php
			$kapperindeling = array(
					"9:00" => $_POST['array'][0],
					"9:15" => $_POST['array'][1],
					"9:30" => $_POST['array'][2],
					"9:45" => $_POST['array'][3],
					"10:00" => $_POST['array'][4],
					"10:15" => $_POST['array'][5],
					"10:30" => $_POST['array'][6],
					"10:45" => $_POST['array'][7]
			);
			if ($_POST['time'] != null) {
				$kapperindeling[$_POST['time']] = $_POST['name'];
			}
		?>
		
		<form action="kapper" method="post">
			Kies een tijdstip:
			<select name="time">
				<?php
					foreach($kapperindeling as $tijdstip => $klantnaam) {
						if($klantnaam == "") {
							print("<option>".$tijdstip."</option>");
						}
					}
				?>
			</select>
			<br>
			<input type="text" name="name" placeholder="Voor- en achternaam">
			<br>
			<button type="submit" name="submit">Submit</button>
			<?php
				foreach($kapperindeling as $klantnaam) {
					echo "<input type='hidden' name='array[]' value='".$klantnaam."'>";
				}
			?>
		</form>
		
		<!-- OVERZICHT -->
		<?php
			echo("<table>");
				echo "<tr><th>Tijdstip</th><th>Klantnaam</th></tr>";
				foreach($kapperindeling as $tijd => $afspraak) {
					if ($afspraak == "") {
						echo "<tr><td>".$tijd."</td></tr>";
					}
					else {
						echo("<tr><td>".$tijd."</td><td>".$afspraak."<td></tr>");
					}
				}
			echo("</table>");
		?>
	</body>
</html>