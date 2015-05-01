<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zoek naar een plaat in de database</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Marc's kutmuziek</h1>
	<div class="stretch">
		<div class="query center">
			<form action="search.php" method="GET">
				<input type="radio" class="radio-menu" name="f" id="titel" value="titel" checked><!--
				--><label class="semi-button" for="titel">Titel</label><!--

				--><input type="radio" class="radio-menu" name="f" id="band" value="band"><!--
				--><label class="semi-button" for="band">Band</label><!--

				--><input type="radio" class="radio-menu" name="f" id="jaar" value="jaar"><!--
				--><label class="semi-button" for="jaar">Jaar</label>

				<input type="text" name="search" id="search" placeholder="Titel">
				<input type="submit" value="Zoek">
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
		$(function ()
		{
			labels = $('.semi-button');
			text = $('#search');

			labels.on('click', function ()
			{
				text.get(0).placeholder = this.innerText;
			});
		});
	</script>
</body>
</html>
