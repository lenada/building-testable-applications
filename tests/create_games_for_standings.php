<?php
include 'test_bootstrap.php';

$conn = new PDO('pgsql:host=localhost;dbname=ibl_stats', 'postgres', '');

echo "Collecting all games in our season...\n";
$gameMapper = new \IBL\GameMapper($conn);
$allGames = $gameMapper->findAll();
echo "Writing games objects into fixture file...\n";
file_put_contents('./fixtures/games.txt', serialize($allGames));
echo "Done\n";


