<?php
// Membuat array
$data = [
    "nama" => "Krisna",
    "umur" => 24,
    "hobi" => ["membaca", "berenang", "coding"]
];

// Encode ke format JSON
$jsonData = json_encode($data);

// Tampilkan hasilnya
echo $jsonData;
?>