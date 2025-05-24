<?php

class Wisata {
    private $id;
    private $nama;
    private $lokasi;
    private $deskripsi;
    private $harga_tiket;
    private $jam_operasional;
    private $fasilitas;
    private $gambar;
    private $created_at;
    private $updated_at;

    public function __construct($id = null, $nama = '', $lokasi = '', $deskripsi = '', $harga_tiket = 0, 
                              $jam_operasional = '', $fasilitas = '', $gambar = '') {
        $this->id = $id;
        $this->nama = $nama;
        $this->lokasi = $lokasi;
        $this->deskripsi = $deskripsi;
        $this->harga_tiket = $harga_tiket;
        $this->jam_operasional = $jam_operasional;
        $this->fasilitas = $fasilitas;
        $this->gambar = $gambar;
        $this->created_at = date('Y-m-d H:i:s');
        $this->updated_at = date('Y-m-d H:i:s');
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getLokasi() {
        return $this->lokasi;
    }

    public function getDeskripsi() {
        return $this->deskripsi;
    }

    public function getHargaTiket() {
        return $this->harga_tiket;
    }

    public function getJamOperasional() {
        return $this->jam_operasional;
    }

    public function getFasilitas() {
        return $this->fasilitas;
    }

    public function getGambar() {
        return $this->gambar;
    }

    public function getCreatedAt() {
        return $this->created_at;
    }

    public function getUpdatedAt() {
        return $this->updated_at;
    }

    // Setter methods
    public function setNama($nama) {
        $this->nama = $nama;
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function setLokasi($lokasi) {
        $this->lokasi = $lokasi;
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function setDeskripsi($deskripsi) {
        $this->deskripsi = $deskripsi;
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function setHargaTiket($harga_tiket) {
        $this->harga_tiket = $harga_tiket;
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function setJamOperasional($jam_operasional) {
        $this->jam_operasional = $jam_operasional;
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function setFasilitas($fasilitas) {
        $this->fasilitas = $fasilitas;
        $this->updated_at = date('Y-m-d H:i:s');
    }

    public function setGambar($gambar) {
        $this->gambar = $gambar;
        $this->updated_at = date('Y-m-d H:i:s');
    }
} 