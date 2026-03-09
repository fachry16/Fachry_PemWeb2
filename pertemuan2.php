<?php

// BAGIAN 1 & 2: Membuat Class Parent, Constructor, dan Encapsulation
class User {
    [span_3](start_span)// 1. Property dibuat private (Encapsulation)[span_3](end_span)
    private $nama;
    private $email;

    [span_4](start_span)// 2. Constructor untuk mengisi nilai awal[span_4](end_span)
    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    [span_5](start_span)// 3. Getter dan Setter (Akses data dari luar class)[span_5](end_span)
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }
}

[span_6](start_span)// BAGIAN 3: Inheritance (Pewarisan)[span_6](end_span)

// Class Turunan 1: Mahasiswa
class Mahasiswa extends User {
    private $nim; [span_7](start_span)// Property khusus mahasiswa[span_7](end_span)

    public function __construct($nama, $email, $nim) {
        // Memanggil constructor parent (User)
        parent::__construct($nama, $email);
        $this->nim = $nim;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    }

    public function getNim() {
        return $this->nim;
    }
}

// Class Turunan 2: Dosen
class Dosen extends User {
    private $nidn; [span_8](start_span)// Property khusus dosen[span_8](end_span)

    public function __construct($nama, $email, $nidn) {
        // Memanggil constructor parent (User)
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
    }

    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}

// --- INSTANSIASI OBJEK (Untuk Menampilkan Data) ---

echo "<h3>Data Mahasiswa</h3>";
// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Udin", "udin@polsa.ac.id", "2023001");
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "Email: " . $mahasiswa1->getEmail() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";

echo "<hr>";

echo "<h3>Data Dosen</h3>";
// Membuat objek Dosen
$dosen1 = new Dosen("Pak Budi", "budi@polsa.ac.id", "99887766");
echo "Nama: " . $dosen1->getNama() . "<br>";
echo "Email: " . $dosen1->getEmail() . "<br>";
echo "NIDN: " . $dosen1->getNidn() . "<br>";

?>
