<?php
// Variabel berisi data JSON
$jsonString = '{"nama":"Andi","umur":20,"kota":"Semarang"}';

// Decode ke bentuk PHP Object
$dataObject = json_decode($jsonString);

// Decode ke bentuk PHP Array
$dataArray = json_decode($jsonString, true);

// Akses nilai dari PHP Object
echo "Dari Object:" . PHP_EOL;
echo "Nama: " . $dataObject->nama . PHP_EOL;
echo "Umur: " . $dataObject->umur . PHP_EOL;
echo "Kota: " . $dataObject->kota . PHP_EOL;

// Akses nilai dari PHP Array
echo PHP_EOL . "Dari Array:" . PHP_EOL;
echo "Nama: " . $dataArray['nama'] . PHP_EOL;
echo "Umur: " . $dataArray['umur'] . PHP_EOL;
echo "Kota: " . $dataArray['kota'] . PHP_EOL;
?>
