<?php
require_once __DIR__ . '/bootstrap.php';

$stmt = $pdo->query('SELECT * FROM guilds_guild');
$guilds = parse($stmt->fetchAll());

include __DIR__ . '/templates/home.php';