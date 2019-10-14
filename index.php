<?php
require_once('bootstrap.php');

$stmt = $pdo->query('SELECT * FROM guilds_guild');
$guilds = parse($stmt->fetchAll());

include('templates/home.php');