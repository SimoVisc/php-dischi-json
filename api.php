
<?php
// leggo un file.json 
$dischi = file_get_contents("dischi.json");
// Lo trasformo in array 
$dischi = json_decode($dischi , true);

$json_string = json_encode($dischi);
// una volta modificato il file, lo trasformo di nuovo in json 
header("Content_Type: application/json");
echo $json_sring;