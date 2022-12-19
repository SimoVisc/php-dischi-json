
<?php
$albums = file_get_contents("dischi.json");

header("Content-Type: application/json");
echo $albums;