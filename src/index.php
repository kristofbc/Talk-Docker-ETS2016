<?php

$DB_HOST = 'mysql';
$DB_NAME = 'mysql';
$DB_USER = 'root';
$DB_PASS = 'root';
$pdo = new \PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);

echo "Hello World! Voici les tables disponibles:";
echo "---\n";
try {
	$stmt = $pdo->query("SHOW TABLES");
	$tables = $stmt->fetchAll(PDO::FETCH_ASSOC);
	print_r($tables);
} catch(Exception $e) {
	echo 'Aucunes tables disponibles';
}
