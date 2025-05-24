<?php

require_once 'commands/MakeModelCommand.php';

// Atribut untuk model Wisata
$attributes = [
    'id',
    'nama',
    'lokasi',
    'deskripsi',
    'harga_tiket',
    'jam_operasional',
    'fasilitas',
    'gambar'
];

// Membuat model Wisata
$command = new MakeModelCommand('Wisata', $attributes);
$command->execute(); 