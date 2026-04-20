<?php
class Mahasiswa {
    private $db;
    public function __construct($db) { $this->db = $db; }

    public function getAll() { 
        return $this->db->query("SELECT * FROM mahasiswa"); 
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM mahasiswa WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function create($nim, $nama, $email) {
        $stmt = $this->db->prepare("INSERT INTO mahasiswa (nim, nama, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nim, $nama, $email);
        return $stmt->execute();
    }

    public function update($id, $nim, $nama, $email) {
        $stmt = $this->db->prepare("UPDATE mahasiswa SET nim=?, nama=?, email=? WHERE id=?");
        $stmt->bind_param("sssi", $nim, $nama, $email, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM mahasiswa WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>