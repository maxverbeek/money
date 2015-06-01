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
	<h1>Marc's <small style="font-size:0.01em;">kut</small>muziek</h1>
	<div class="stretch">
		<div class="query center">
			<form action="search.php" method="GET">
				<div class="radio-select">
					<input type="radio" class="radio-menu" name="f" id="titel" value="titel"<?php echo $checked == 'titel' ? ' checked': ''; ?>><!--
					--><label class="semi-button" for="titel" data-type="search" data-autocomplete="on">Titel</label><!--

					--><input type="radio" class="radio-menu" name="f" id="band" value="band"<?php echo $checked == 'band' ? ' checked' : ''; ?>><!--
					--><label class="semi-button" for="band" data-type="search" data-autocomplete="on">Band</label><!--

					--><input type="radio" class="radio-menu" name="f" id="jaar" value="jaar"<?php echo $checked == 'jaar' ? ' checked' : ''; ?>><!--
					--><label class="semi-button" for="jaar" data-type="number" data-autocomplete="off">Jaar</label>
				</div>

				<div class="query-input">
					<input required autofocus type="search" name="search" id="search" placeholder="<?php echo ucfirst($checked); ?>" value="<?php echo $fieldvalue; ?>">
					<span id="empty" class="cancel">&#x2715;</span>
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

			labels.on('click', function ()
			{
				// Goede placeholder
				text.get(0).placeholder = this.innerText;

				// Goede data-type (text|number)
				text.get(0).type = this.dataset.type;

				// Autocomplete voor number uit
				text.get(0).autocomplete = this.dataset.autocomplete;

				// Focus het textinvoer element, betere UX
				text.focus();
			});

			empty.on('click', function ()
			{
				// Maak textbox leeg
				text.get(0).value = "";

				// Focus het textinvoer element, betere UX
				text.focus();
			});

			text.on('focus', function ()
			{
				// Cursor aan het einde v/d text on focus
				text.value = this.value;
			});
		});
	</script>
</body>
</html>
