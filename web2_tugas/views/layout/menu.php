<h3>Admin Panel</h3>
<p>Halo, <b><?= $_SESSION['username'] ?? 'Admin'; ?></b></p>
<hr>
<ul style="line-height: 2;">
    <li><a href="index.php?page=dashboard">Dashboard</a></li>
    <li><a href="index.php?page=mahasiswa">Data Mahasiswa</a></li>
    <li><a href="index.php?page=auth&aksi=logout" style="color: red;">Logout</a></li>
</ul>