<h2>Edit Mahasiswa</h2>
<form action="index.php?page=mahasiswa&aksi=update" method="POST">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">
    NIM: <input type="text" name="nim" value="<?= $data['nim']; ?>" required><br><br>
    Nama: <input type="text" name="nama" value="<?= $data['nama']; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $data['email']; ?>" required><br><br>
    <button type="submit">Update</button>
    <a href="index.php?page=mahasiswa">Batal</a>
</form>