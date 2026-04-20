<h3><?= ($_SESSION['role'] == 'admin') ? 'Admin Panel' : 'Mahasiswa Panel'; ?></h3>
<p>Halo, <b><?= $_SESSION['username'] ?? 'User'; ?></b></p>
<hr>
<ul style="line-height: 2;">
    <li><a href="index.php?page=dashboard">Dashboard</a></li>
    
    <?php if ($_SESSION['role'] == 'admin'): ?>
        <li><a href="index.php?page=mahasiswa">Data Mahasiswa</a></li>
    <?php endif; ?>

    <li><a href="index.php?page=auth&aksi=logout" style="color: red;">Logout</a></li>
</ul>