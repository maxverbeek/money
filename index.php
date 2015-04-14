<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zoek naar een palat in de database</title>
</head>
<body>
	<!-- band -->
	<form action="search.php?f=band" method="POST">
		<input type="text" name="band" placeholder="Band"><br>
		<input type="submit" value="Zoek op band">
	</form>
	<hr>

	<!-- titel -->
	<form action="search.php?f=titel" method="POST">
		<input type="text" name="titel" placeholder="Titel"><br>
		<input type="submit" value="Zoek op titel">
	</form>
	<hr>

	<!-- jaar -->
	<form action="search.php?f=jaar" method="POST">
		<input type="text" name="jaar" placeholder="Jaar"><br>
		<input type="submit" value="Zoek op jaar">
	</form>
</body>
</html>