<?php

require 'Config.php';

$config = new Twist\Support\Config('config');

$db = new PDO(sprintf("mysql:host=%s;dbname=%s", $config['db.host'], $config['db.dbname']),
	$config['db.username'], $config['db.password']);

if (isset($_GET['id']))
{
	$id = (int) $_GET['id'];

	$platenquery = $db->prepare("
	SELECT * FROM platen WHERE band = ?
	");

	if ($platenquery->execute([$id]) && $platenquery->rowCount())
	{
		$platen = $platenquery->fetchAll(PDO::FETCH_OBJ);
	}

	$infoquery = $db->prepare("
	SELECT * FROM bands WHERE id = ?
	");

	if ($infoquery->execute([$id]) && $infoquery->rowCount())
	{
		$info = $infoquery->fetchAll(PDO::FETCH_OBJ)[0];
	}
}

if (! isset($platen, $info))
{
	header("Location: index.php");
	die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Informatie over <?php echo $info->naam; ?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="wrapper">

		<h1 class="normal"><?php echo $info->naam; ?></h1>

		<div class="beschrijving">
			<?php echo $info->beschrijving; ?>
		</div>

		<?php foreach ($platen as $plaat):

			?><div class="result">
				<span class="titel"><?php echo $plaat->titel; ?></span>
				<span class="band"><?php echo ucwords($info->naam); ?></span>
				<span class="jaar"><?php echo $plaat->jaar; ?></span>
			</div><?php

		endforeach;	?>
	</div>
</body>
</html>