<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Alumni</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link href="resources/css/styles.css" rel="stylesheet"/>
    @vite([
            'resources/css/app.css',
            'resources/css/styles.css',
            ])

<body>
<!-- Navbar & Hero Start -->
<div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light">
            <div class="d-flex align-items-center">
            <img src="{{ Vite::asset('public/images/logo.png') }}" alt="Logo" class="logo">
            <div>
                <span class="brand-name">SIASMA</span><br>
                <span class="brand-subtitle">SISTEM INFORMASI ALUMNI SMAN 1 PONTIANAK</span>
            </div>
            </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="{{ route('beranda') }}" class="nav-item nav-link active">Beranda</a>
                        <a href="{{ route('biodata') }}" class="nav-item nav-link">Biodata</a>
                        <a href="service.html" class="nav-item nav-link">Berita</a>
                        <a href="{{ route('login-admin') }}" class="nav-item nav-link">Login</a>
                        
                </div>
            </nav>
</div>
        
    <div class="container-biodata col-lg-12">
        <div class="row justify-content-center col-lg-12">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <!-- Heading -->
                <h3 class="text-lg-start text-center">Biodata Alumni</h3>

                <div class="row">
                    <!-- Foto Profil dan Ganti Foto -->
                    <div class="col-lg-3 col-md-12 text-center">
                        <img src="{{ Vite::asset('public/images/ava_demo.png') }}" class="img-fluid mb-3" alt="Foto Alumni" id="profile-image">
                        <button class="btn btn-primary">Ganti Foto</button>
                    </div>

                    <!-- Tabel Biodata Alumni -->
                    <div class="col-lg-9 col-md-12">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>NISN</th>
                                    <td>1234567890</td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>John Doe</td>
                                </tr>
                                <tr>
                                    <th>Kelas</th>
                                    <td>12 IPA 1</td>
                                </tr>
                                <tr>
                                    <th>Tahun Lulus</th>
                                    <td>2020</td>
                                </tr>
                                <tr>
                                    <th>Universitas</th>
                                    <td>Universitas ABC</td>
                                </tr>
                                <tr>
                                    <th>Fakultas</th>
                                    <td>Fakultas Teknik</td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td>Teknik Informatika</td>
                                </tr>
                                <tr>
                                    <th>Jalur Penerimaan</th>
                                    <td>SNMPTN</td>
                                </tr>
                                <tr>
                                    <th>Tahun Diterima</th>
                                    <td>2021</td>
                                </tr>
                                <tr>
                                    <th>Status Pekerjaan</th>
                                    <td>Bekerja</td>
                                </tr>
                                <tr>
                                    <th>Biodata Valid</th>
                                    <td>Ya</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Tombol Simpan dan Batal -->
                        <div class="d-flex justify-content-center justify-content-lg-end mt-4">
                            <button class="btn btn-success me-2">Simpan</button>
                            <button class="btn btn-secondary">Batal</button>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of column -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->



<!-- Bootstrap 5 JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS (Optional) -->
<script src="js/scripts.js"></script>
@vite([
        'resources/js/app.js',
        'resources/js/script.js'
])
</body>
</html>