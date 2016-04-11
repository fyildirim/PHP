<html>
<head>
	<title>Webshop PHP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="stylesheets/jquery-ui.css">
	<script src="scripts/jquery-1.10.2.js"></script>
	<script src="scripts/jquery-ui.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body>
	<form action="webshop.php" method="get">
		<input type="number" name="minprijs" id="minprijs"> 
		<input type="number" name="maxprijs" id="maxprijs">
		Kies merk <select name="merk">
			<option value="alle">Alle</option>
			<option value="Ford">Ford</option>
			<option value="Opel">Opel</option>
			<option value="Subaru">Subaru</option>
			<option value="Mercedes">Mercedes</option>
			<option value="Ferrari">Ferrari</option>
			<option value="Lotus">Lotus</option>
			<option value="Citroen">Citroen</option>
			<option value="Volvo">Volvo</option>
			<option value="Mini">Minicooper</option>
		</select> 
		<input type="submit" name="knop_1" value="Ok">
	</form>
</body>
</html>