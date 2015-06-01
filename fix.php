<?php

require 'Database.php';

$db = new Database('platen', 'root', '', '127.0.0.1');

$records = $db->get('bands')->result();

foreach ($records as &$record)
{
	$record->beschrijving = htmlentities($record->beschrijving);

	$record->beschrijving = str_replace(['&lt;', '&gt;'], ['<', '>'], $record->beschrijving);

	$record = (array) $record;
}

foreach ($records as $record)
{
	$db->update('bands', $record['id'], $record);
}