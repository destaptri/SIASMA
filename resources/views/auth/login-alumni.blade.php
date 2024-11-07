<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Alumni</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom CSS -->
    <link href="resources/css/styles.css" rel="stylesheet"/>
    @vite([
            'resources/css/app.css',
            'resources/css/styles.css',
            ])
<style>
    body {
        background-color: #DEEBFE;
    }
</style>
</head>
<body>
<div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex align-items-center">
            <img src="{{ Vite::asset('public/images/logo.png') }}" alt="Logo" class="logo">
            <div>
                <span class="brand-name">SIASMA</span><br>
                <span class="brand-subtitle">SISTEM INFORMASI ALUMNI SMAN 1 PONTIANAK</span>
            </div>
            </div>
</nav>
</div>
<div class="login-page">
<!-- Login Form -->
<div class="login-container">
    <div class="login-box">
        <h2>LOGIN</h2>
        <form>
            <label for="nisn">Nomor Induk Siswa Nasional (NISN)</label>
            <input type="text" id="nisn" name="nisn" placeholder="Masukkan NISN Anda" required>
            <div class="links d-flex flex-row-reverse">
                <a href="#">Lupa NISN?</a> 
            </div>
            <label for="password">Password</label>
            <div class="password-container">
                <input type="password" id="password" placeholder="Masukkan Password Anda">
                <i class="fas fa-eye" id="togglePassword"></i>
            </div>
            <div class="links d-flex flex-row-reverse">
                <a href="#">Lupa Password?</a>            
            </div>
            <button type="submit" class="login-button">Masuk</button>
        </form>
    </div>
</div>
</div>
<!-- Bootstrap 5 JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS (Optional) -->
<script src="js/scripts.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@vite([
        'resources/js/app.js',
        'resources/js/script.js'
])
</body>
</html>
