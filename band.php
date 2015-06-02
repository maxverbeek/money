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
	<title>Informatie over <?php echo ucwords($info->naam); ?></title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>

	<div class="back"><a href="javascript:history.back()">Terug..</a></div>

	<div class="wrapper">

		<h1 class="normal"><?php echo $info->naam; ?></h1>

		<h2>Beschrijving</h2>
		<div class="beschrijving">
			<?php if ($info->youtube): ?>
				<div class="asset">
					<iframe src="//www.youtube.com/embed/<?php echo $info->youtube; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			<?php elseif ($info->image): ?>
				<div class="asset">
					<img src="<?php echo $info->image; ?>" alt="<?php echo $info->naam; ?>">
				</div>
			<?php endif; ?>

			<?php echo $info->beschrijving; ?>
		</div>

		<h2>Platen van <?php echo ucwords($info->naam); ?></h2>

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
