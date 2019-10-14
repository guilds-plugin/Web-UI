<?php
require_once('bootstrap.php');

// Get the guild ID
$guildId = $_GET['id'];
$stmt = $pdo->prepare("SELECT * from guilds_guild WHERE id = :guildId");
$stmt->bindParam(':guildId', $guildId);
$stmt->execute();
$guild = parse($stmt->fetchAll())[$guildId];

include('templates/detail.php');