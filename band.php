<?php

require 'Config.php';

$config = new Twist\Support\Config('config');

$db = new PDO(sprintf("mysql:host=%s;dbname=%s", $config['db.host'], $config['db.dbname']),
	$config['db.username'], $config['db.password']);

if (isset($_GET['id']))
{
	$id = (int) $_GET['id'];

	$query = $db->prepare("
	SELECT platen.titel as titel, platen.jaar as jaar, bands.naam as band, bands.page_link as page_link
	FROM platen
	INNER JOIN bands ON platen.band = bands.id
	WHERE band = ?
	");

	if($query->execute([$id]) && $query->rowCount())
	{
		$band = $results[0]->band;
	}
}

if (! isset($band))
{
	header("Location: index.php");
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo "Informatie over $band" ?></title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

</body>
</html>