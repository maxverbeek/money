<?php

require 'Database.php';

$db = new Database('db-werkend', 'root', '', '127.0.0.1');

$field = isset($_GET['f']) && in_array($_GET['f'], ['titel', 'band', 'jaar'])
		? $_GET['f']
		: 'titel';

if (isset($_GET['search']))
{
	$fieldval = $_GET['search'];
	$results = $db->like('platen', "{$field}, *{$fieldval}*")->result();
}

function e($str)
{
	return htmlentities($str, ENT_QUOTES, "UTF-8");
}

function plural($count, $singular, $plural = null)
{
	$plural = $plural ?: $singular . 's';

	return $count == 1 ? $singular : $plural;
}

$results = isset($results) ? $results : array();
$c = count($results);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zoekresultaten voor <?php echo e($fieldval); ?></title>
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<?php if (empty($results)): ?>
			<div class="error">
				<strong>Sorry!</strong> Er zijn geen zoekresultaten gevonden voor <strong><?php echo e($fieldval); ?></strong>.
				<span class="right"><a href="index.php">Terug</a></span>
			</div>
		<?php else: ?>
			<div class="success">
				Er <?php echo plural($c, 'is <strong>1 resultaat', "zijn <strong>{$c} resultaten"); ?></strong> gevonden.
				<span class="right"><a href="index.php">Terug</a></span>
			</div>
		<?php endif; ?>

		<?php foreach ($results as $result): ?>
			<div class="result">
				<span class="titel"><?php echo e($result->titel); ?></span>
				<span class="band"><?php echo e($result->band); ?></span>
				<span class="jaar"><?php echo e($result->jaar); ?></span>
			</div>
		<?php endforeach; ?>
	</div>
</body>
</html>
