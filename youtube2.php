<?php
error_reporting(false);
header('Content-type: application/json;'); 

$urlside=$_GET['url'];

$data['url'] = $urlside;

$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_URL,"https://api.videodownloaderpro.net/api/convert");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$meysam1= curl_exec($ch);
curl_close($ch);    


$list = json_decode($meysam1,true);

echo json_encode(['ok' => true, 'channel' => '@SIDEPATH','writer' => '@meysam_s71','Results' =>$list], 448);












