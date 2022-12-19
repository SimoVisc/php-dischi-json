
<?php
$albums = file_get_contents("dischi.json");

if(!empty($_GET['genre'])) {
    $albums = json_decode($albums, true);
    $albums = array_filter($albums, fn($elm) => strtolower($elm['genre']) === strtolower($_GET['genre']) );
    $albums = json_encode($albums);
}

header("Content-Type: application/json");
echo $albums;