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
$fieldval = isset($fieldval) ? $fieldval : '';
$c = count($results);

$querystr = empty($_GET) ? '' : '?' . http_build_query($_GET);

$index = 'index.php' . $querystr;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Zoekresultaten voor <?php echo e($fieldval); ?></title>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<div class="wrapper">
		<?php if (empty($results)): ?>
			<div class="error">
				<strong>Sorry!</strong> Er zijn geen zoekresultaten gevonden voor <strong><?php echo e($fieldval); ?></strong>.
				<span class="right"><a href="<?php echo $index; ?>">Terug</a></span>
			</div>
		<?php else: ?>
			<div class="success">
				Er <?php echo plural($c, 'is <strong>1 resultaat', "zijn <strong>{$c} resultaten"); ?></strong> gevonden.
				<span class="right"><a href="<?php echo $index; ?>">Terug</a></span>
			</div>
		<?php endif; ?>

		<?php foreach ($results as $result): // zet lelijk tegen de rest v/d php aan, om geen whitespace tussen divs te hebben

				$r = str_replace(['*', '%'], '.*', preg_quote($fieldval, '/'));
				$result->{$field} = e($result->{$field});

				// voorkom lege regex (-> tussen elk tegen een <strong> tag)
				if ($fieldval) $result->{$field} = preg_replace('/('. $r .')/i', "<strong>$1</strong>", $result->{$field});

			?><div class="result">
				<span class="titel<?php echo $field == 'titel' ? ' searched' : ''; ?>"><?php echo $result->titel; ?></span>
				<span class="band<?php echo $field == 'band' ? ' searched' : ''; ?>"><?php echo $result->band; ?></span>
				<span class="jaar<?php echo $field == 'jaar' ? ' searched' : ''; ?>"><?php echo $result->jaar; ?></span>
			</div><?php endforeach; // zet dicht op /div tag, om whitespace bug te voorkomen met inline-block ?>
	</div>
</body>
</html>
