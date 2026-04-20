<?php
require_once 'models/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct($db) { $this->model = new Mahasiswa($db); }

    public function index() {
        $data = $this->model->getAll();
        include 'views/mahasiswa/index.php';
    }

    public function tambah() { 
        if ($_SESSION['role'] !== 'admin') {
            die("Akses Ditolak: Hanya Admin yang boleh menambah data.");
        }
        include 'views/mahasiswa/create.php'; 
    }

    public function simpan() {
        if ($_SESSION['role'] !== 'admin') {
            die("Akses Ditolak: Hanya Admin yang boleh menambah data.");
        }
        if ($this->model->create($_POST['nim'], $_POST['nama'], $_POST['email'])) {
            header("Location: index.php?page=mahasiswa");
        }
    }

    public function edit() {
        if ($_SESSION['role'] !== 'admin') {
            die("Akses Ditolak: Hanya Admin yang boleh mengedit data.");
        }
        $data = $this->model->getById($_GET['id']);
        include 'views/mahasiswa/edit.php';
    }

    public function update() {
        if ($_SESSION['role'] !== 'admin') {
            die("Akses Ditolak: Hanya Admin yang boleh mengupdate data.");
        }
        if ($this->model->update($_POST['id'], $_POST['nim'], $_POST['nama'], $_POST['email'])) {
            header("Location: index.php?page=mahasiswa");
        }
    }

    public function hapus() {
        if ($this->model->delete($_GET['id'])) {
            header("Location: index.php?page=mahasiswa");
        }
        if ($_SESSION['role'] !== 'admin') {
        die("Akses Ditolak: Hanya Admin yang boleh menghapus data.");
        }
    }
}
?>