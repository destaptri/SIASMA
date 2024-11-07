<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
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

<div class="search-content">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
            <li class="breadcrumb-item active" aria-current="page">Hasil Pencarian</li>
        </ol>
    </nav>
    <h4>Hasil Pencarian</h4>

    <div class="container-search">
        <form class="search-box d-flex w-100">
            <div class="input-group flex-grow-1">
                <input class="form-control" type="search" placeholder="Hasil Pencarian" aria-label="Search">
                <button class="btn btn-outline-secondary" type="submit">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>NISN</th>
                            <th>Nama Lengkap</th>
                            <th>Tahun Lulus</th>
                            <th>Universitas</th>
                            <th>Program Studi</th>
                        </tr>
                    </thead>
                    <tbody id="resultBody">
                        <tr>
                            <td data-label="NISN">12345678</td>
                            <td data-label="Nama Lengkap">John Doe</td>
                            <td data-label="Tahun Lulus">2020</td>
                            <td data-label="Universitas">Universitas Indonesia</td>
                            <td data-label="Program Studi">Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td data-label="NISN">87654321</td>
                            <td data-label="Nama Lengkap">John Smith</td>
                            <td data-label="Tahun Lulus">2019</td>
                            <td data-label="Universitas">Institut Teknologi Bandung</td>
                            <td data-label="Program Studi">Desain Produk</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination Section -->
    <div class="pagination-container">
        <div class="pagination">
            <button class="page-item" id="prevPage">
                <span>&lt;</span>
            </button>
            <div class="page-item">
                <input type="text" id="currentPage" value="1">
            </div>
            <span class="mx-2">dari</span>
            <span id="totalPages">10</span>
            <button class="page-item" id="nextPage">
                <span>&gt;</span>
            </button>
        </div>
    </div>
</div>
</div>


<!-- Include Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>