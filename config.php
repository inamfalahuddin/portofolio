<?php  

$dataJSON = file_get_contents("http://localhost/uts_web/data.json");
$data = json_decode($dataJSON, TRUE);
$data_hero        = $data["hero"];
$data_experience  = $data["experience"];
$data_services    = $data["services"];
$data_educations  = $data["educations"];
$data_tools       = $data["tools"];
$data_banner      = $data["banner"];
$data_copyright   = $data["copyright"];