<?php if ($_SESSION['role'] == 'admin'): ?>
    <h2>Selamat Datang, Admin</h2>
    <p>Anda memiliki akses penuh untuk mengelola data mahasiswa dan sistem.</p>
<?php else: ?>
    <h2>Selamat Datang, <?= $_SESSION['username']; ?></h2>
    <p>Ini adalah halaman dashboard mahasiswa. Di sini Anda dapat melihat progres studi dan tugas Anda.</p>
    
    <div style="display: flex; gap: 20px; margin-top: 20px;">
        <div style="padding: 20px; background: #e3f2fd; border-radius: 8px; flex: 1;">
            <h3>Tugas Aktif</h3>
            <p>Belum ada tugas aktif.</p>
        </div>
    </div>
<?php endif; ?>