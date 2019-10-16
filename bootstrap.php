<?php
 // Load the composer autloader
require __DIR__ . '/vendor/autoload.php';

 // Load the Dotenv package
use Symfony\Component\Dotenv\Dotenv;

 // Read the environment variables
$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/.env.local');

// Prep the DSN and options for PDO
$dsn = "mysql:host=".$_ENV['DB_HOST'].";dbname=".$_ENV['DB_NAME'].";charset=utf8";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// Open up a PDO connection to your database
try {
     $pdo = new PDO($dsn, $_ENV['DB_USER'], $_ENV['DB_PASS'], $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

function parse(array $list): array
{
	$output = [];
	foreach ($list as &$object) {
		$guildData = json_decode($object['data']);
		calcAge($guildData);
		$output[$object['id']] = $guildData;

	}
	return $output;
}

function calcAge($guildData)
{
    $start = new DateTime('@' . round($guildData->creationDate / 1000));
    $end = DateTime::createFromFormat('U.u', microtime(true));

    $interval = $end->diff($start);
    $guildData->age = $interval->days;
}