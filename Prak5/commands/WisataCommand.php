<?php

class WisataCommand {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function create($wisata) {
        $sql = "INSERT INTO wisata (nama, lokasi, deskripsi, harga_tiket, jam_operasional, fasilitas, gambar, created_at, updated_at) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $wisata->getNama(),
            $wisata->getLokasi(),
            $wisata->getDeskripsi(),
            $wisata->getHargaTiket(),
            $wisata->getJamOperasional(),
            $wisata->getFasilitas(),
            $wisata->getGambar(),
            $wisata->getCreatedAt(),
            $wisata->getUpdatedAt()
        ]);
    }

    public function read($id) {
        $sql = "SELECT * FROM wisata WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function readAll() {
        $sql = "SELECT * FROM wisata ORDER BY created_at DESC";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update($wisata) {
        $sql = "UPDATE wisata SET 
                nama = ?, 
                lokasi = ?, 
                deskripsi = ?, 
                harga_tiket = ?, 
                jam_operasional = ?, 
                fasilitas = ?, 
                gambar = ?, 
                updated_at = ? 
                WHERE id = ?";
        
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            $wisata->getNama(),
            $wisata->getLokasi(),
            $wisata->getDeskripsi(),
            $wisata->getHargaTiket(),
            $wisata->getJamOperasional(),
            $wisata->getFasilitas(),
            $wisata->getGambar(),
            $wisata->getUpdatedAt(),
            $wisata->getId()
        ]);
    }

    public function delete($id) {
        $sql = "DELETE FROM wisata WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function search($keyword) {
        $sql = "SELECT * FROM wisata 
                WHERE nama LIKE ? 
                OR lokasi LIKE ? 
                OR deskripsi LIKE ? 
                ORDER BY created_at DESC";
        
        $keyword = "%$keyword%";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$keyword, $keyword, $keyword]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} 