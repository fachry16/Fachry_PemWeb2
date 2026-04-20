<?php
session_start();

require_once 'config/Database.php';
$dbConnection = (new Database())->koneksi;

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : 'index';

// 1. ROUTING AUTHENTICATION (LOGIN/LOGOUT)
if ($page == 'auth') {
    require_once 'controllers/AuthController.php';
    $auth = new AuthController($dbConnection);
    
    if ($aksi == 'login') $auth->login();
    elseif ($aksi == 'proses_login') $auth->proses_login();
    elseif ($aksi == 'logout') $auth->logout();
    else $auth->login();
    exit; 
}

// 2. PROTEKSI HALAMAN (Cek Sesi)
if (!isset($_SESSION['user_login'])) {
    header("Location: index.php?page=auth&aksi=login");
    exit;
}

// 3. LAYOUT & ROUTING HALAMAN ADMIN
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sistem Kampus - MVC</title>
</head>
<body style="display: flex; margin: 0; font-family: sans-serif;">

    <nav style="width: 200px; background: #f8f9fa; padding: 20px; min-height: 100vh; border-right: 1px solid #ddd;">
        <?php include 'views/layout/menu.php'; ?>
    </nav>

    <main style="flex: 1; padding: 20px;">
        <?php
        if ($page == 'dashboard') {
            include 'views/dashboard.php';
        } 
        elseif ($page == 'mahasiswa') {
            require_once 'controllers/MahasiswaController.php';
            $controller = new MahasiswaController($dbConnection);
            if(method_exists($controller, $aksi)) $controller->$aksi();
            else $controller->index();
        }
        elseif ($page == 'profil') {
            // Panggil controller atau view untuk profil mahasiswa
            echo "<h2>Halaman Profil Mahasiswa</h2>";
        }
        else {
            echo "<h2>Halaman 404 - Tidak Ditemukan</h2>";
        }
        ?>
    </main>

</body>
</html>