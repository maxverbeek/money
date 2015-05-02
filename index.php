<?php

$checked = isset($_GET['f']) && in_array($_GET['f'], ['titel', 'band', 'jaar'])
		? $_GET['f']
		: 'titel';

$fieldvalue = isset($_GET['search']) ? $_GET['search'] : '';

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zoek naar een plaat in de database</title>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
	<h1>Marc's kutmuziek</h1>
	<div class="stretch">
		<div class="query center">
			<form action="search.php" method="GET">
				<div class="radio-select">
					<input type="radio" class="radio-menu" name="f" id="titel" value="titel"<?php echo $checked == 'titel' ? ' checked': ''; ?>><!--
					--><label class="semi-button" for="titel">Titel</label><!--

					--><input type="radio" class="radio-menu" name="f" id="band" value="band"<?php echo $checked == 'band' ? ' checked' : ''; ?>><!--
					--><label class="semi-button" for="band">Band</label><!--

					--><input type="radio" class="radio-menu" name="f" id="jaar" value="jaar"<?php echo $checked == 'jaar' ? ' checked' : ''; ?>><!--
					--><label class="semi-button" for="jaar">Jaar</label>
				</div>

				<div class="query-input">
					<input autofocus type="text" name="search" id="search" placeholder="<?php echo isset($checked) ? ucfirst($checked) : 'Titel'; ?>" value="<?php echo $fieldvalue; ?>">
					<span id="empty" class="dismiss">&#x2715;</span>
				</div>
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
			empty = $('#empty');

			// Placeholder text replacement
			labels.on('click', function ()
			{
				text.get(0).placeholder = this.innerText;
				text.focus();
			});

			// Clear text button
			empty.on('click', function ()
			{
				text.get(0).value = "";
				text.focus();
			});

			// Cursor aan het einde van de tekst on focus
			text.on('focus', function ()
			{
				text.value = this.value;
			});
		});
	</script>
</body>
</html>
