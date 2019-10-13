<?php
require_once('bootstrap.php');

$stmt = $pdo->query('SELECT * FROM guilds');
$guilds = $stmt->fetchAll();

include('templates/home.php');