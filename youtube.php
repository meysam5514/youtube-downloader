<?php
error_reporting(false);
header('Content-type: application/json;');
$kobsurl = $_GET['url'];

$data['url']="$kobsurl";


$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_URL,"https://api.onlinevideoconverter.pro/api/convert");
curl_setopt($ch,CURLOPT_AUTOREFERER,1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$meysam1= curl_exec($ch);
curl_close($ch);

$rer=json_decode($meysam1,true);

//========================================================= 
echo json_encode(['ok' => true, 'channel' => '@SIDEPATH','writer' => '@meysam_s71',  'Results' =>$rer], 448);
//========================================================= 









