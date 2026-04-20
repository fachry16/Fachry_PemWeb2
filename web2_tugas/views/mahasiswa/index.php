<h2>Data Mahasiswa</h2>
<a href="index.php?page=mahasiswa&aksi=tambah" style="background: #28a745; color: white; padding: 5px 10px; text-decoration: none;">+ Tambah Data</a>
<br><br>
<table border="1" cellpadding="8" cellspacing="0" width="100%">
    <tr style="background: #eee;">
        <th>No</th><th>NIM</th><th>Nama</th><th>Email</th><th>Aksi</th>
    </tr>
    <?php 
    $no = 1;
    if ($data && $data->num_rows > 0) {
        while ($row = $data->fetch_assoc()) { ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['nim']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['email']; ?></td>
            <td>
                <a href="index.php?page=mahasiswa&aksi=edit&id=<?= $row['id']; ?>">Edit</a> | 
                <a href="index.php?page=mahasiswa&aksi=hapus&id=<?= $row['id']; ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
    <?php } } else { echo "<tr><td colspan='5' align='center'>Data Kosong</td></tr>"; } ?>
</table>