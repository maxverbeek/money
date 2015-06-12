<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GTA Money lobby Donations</title>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300,600' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
</head>
<body class="intro">
	<header>
		<h1>Donate to support more GTA money lobbies</h1>
		<h2>It only takes a brief moment</h2>
		<div class="form">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal-form">
				<input type="hidden" name="cmd" value="_xclick">
				<input type="hidden" name="business" value="Donate_FreeGTAMoney@hotmail.com">
				<input type="hidden" name="item_name" value="GTA Money lobby Donation">
				<input type="hidden" name="item_number" value="1">
				<input type="hidden" name="amount" value="10" id="paypal-amount">

				<div class="inputwrapper">
					<div class="radio">
						<input type="radio" class="option-input" name="radio-option-group" id="5" value="5">
						<label for="5">$ 5</label>
						<input type="radio" class="option-input" name="radio-option-group" id="10" value="10" checked>
						<label for="10">$ 10</label>
						<input type="radio" class="option-input" name="radio-option-group" id="20" value="20">
						<label for="20">$ 20</label>

						<input type="text" placeholder="Custom" class="custom">
						<span class="dollar">$</span>
					</div>
				</div>

				<div class="inputwrapper">
					<input type="submit" value="Donate" class="submitbutton">
				</div>

			</form>
		</div>
	</header>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/formhandler.js"></script>
	<script src="js/smoothscroll.js"></script>
</body>
</html>