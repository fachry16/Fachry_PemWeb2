<!DOCTYPE html>
<html>
<head>
    <title>Login Web2 Tugas</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-box { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; }
        .login-box h2 { text-align: center; margin-bottom: 20px; }
        .login-box input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        .login-box button { width: 100%; padding: 10px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .alert { color: red; text-align: center; margin-bottom: 10px; font-size: 14px; }
    </style>
</head>
<body>
<div class="login-box">
    <h2>Login</h2>
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == 'gagal') : ?>
        <div class="alert">Username atau Password salah!</div>
    <?php endif; ?>
    <form action="index.php?page=auth&aksi=proses_login" method="POST">
        <label>Username</label>
        <input type="text" name="username" required>
        <label>Password</label>
        <input type="password" name="password" required>
        <button type="submit">LOGIN</button>
    </form>
</div>
</body>
</html>