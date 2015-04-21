<?php

require 'Database.php';

$db = new Database('db-werkend', 'root', '', '127.0.0.1');

$field = isset($_GET['f']) && in_array($_GET['f'], ['titel', 'band', 'jaar'])
		? $_GET['f']
		: 'titel';

if (isset($_POST[$field]))
{
	$fieldval = $_POST[$field];
	$results = $db->like('platen', "{$field}, *{$fieldval}*")->result();
}

function e($str)
{
	return htmlentities($str, ENT_QUOTES, "UTF-8");
}

$results = isset($results) ? $results : array();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zoekresultaten voor <?php echo e($fieldval); ?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php if (empty($results)): ?>
			<strong>Er zijn geen zoekresultaten gevonden voor <?php echo e($fieldval) ?></strong>.
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