<?php
require_once('bootstrap.php');

$stmt = $pdo->prepare("SELECT * from guild_members WHERE guild_name = :guildname");
$stmt->bindParam(':guildname', $guildname);
$stmt->execute();
$members = $stmt->fetchAll();

include('templates/detail.php');