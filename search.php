<?php

require 'Database.php';

$db = new Database('db-werkend', 'root', '', '127.0.0.1');

$field = isset($_GET['f']) && in_array($_GET['f'], ['titel', 'band', 'jaar'])
		? $_GET['f']
		: 'titel';

if (isset($_POST['search']))
{
	$fieldval = $_POST['search'];
	$results = $db->like('platen', "{$field}, *{$fieldval}*")->result();

	echo "<pre>", print_r($results, true), "</pre>";
}

$results = isset($results) ? $results : array();

foreach ($results as $result)
{
	echo "Titel: " . $result->titel . "<br>\n";
	echo "Band: " . $result->band . "<br>";
	echo "Jaar: " . $result->jaar . "<br>";

	echo "<hr>";
}