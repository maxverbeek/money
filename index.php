<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zoek naar een plaat in de database</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- band -->
	<form action="search.php" method="GET">
		<input type="text" name="search" placeholder="Band"><br>
		<input type="hidden" name="f" value="band">
		<input type="submit" value="Zoek op band">
	</form>
	<hr>

	<!-- titel -->
	<form action="search.php" method="GET">
		<input type="text" name="search" placeholder="Titel"><br>
		<input type="hidden" name="f" value="titel">
		<input type="submit" value="Zoek op titel">
	</form>
	<hr>

	<!-- jaar -->
	<form action="search.php" method="GET">
		<input type="text" name="search" placeholder="Jaar"><br>
		<input type="hidden" name="f" value="jaar">
		<input type="submit" value="Zoek op jaar">
	</form>
</body>
</html>
