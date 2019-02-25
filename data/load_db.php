<?php
// $db = new PDO('sqlite:' . realpath(__DIR__) . '/zftutorial.db');
$db = new PDO('mysql:dbname=zend_test;host=localhost','root','');
$fh = fopen(__DIR__ . '/schema_test.sql', 'r');
while ($line = fread($fh, 4096)) {
	$stmt = $db->prepare($line);
	// $stmt = new Zend_Db_Statement_Mysqli($db, $line);
	$stmt->execute();
    // $db->exec($line);
}
fclose($fh);