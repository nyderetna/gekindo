<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?= $title; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    <link rel="icon" type="image/gif/png" href="favicon.png">
    `
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css" />

    <!-- Custom styles for this template -->
    <!-- <link href="navbar-top-fixed.css" rel="stylesheet"> -->
</head>

<body>

    <div class="container-fluid pb-10">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand mb-0 h1" href="/">
                <img src="../assets/brand/logo-gekindo-removebg-178x150.png" alt="GEKINDO" width="98" height="86" class="d-inline-block align-text-middle">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0" style="font-size: 16px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"><i>BERANDA</i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <strong><i>GEKINDO PONDOK HIJAU PERMAI</i></strong>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="warta">Warta Mingguan</a></li>
                            <li><a class="dropdown-item" href="kebaktian">Kebaktian</a></li>
                            <li><a class="dropdown-item" href="sejarah">Sejarah Gereja</a></li>
                            <li><a class="dropdown-item" href="profil">Profil</a></li>
                            <li><a class="dropdown-item" href="rekening">Rekening</a></li>
                            <li><a class="dropdown-item" href="hubungi">Hubungi Kami</a></li>
                            <li><a class="dropdown-item" href="galeri">Galeri</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </form>
            </div>
        </nav>
    </div>

    <?= $this->renderSection('content'); ?>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#"><u><i>Kembali ke atas</u></i></a>
            </p>
            <p class="mb-1">Gereja Keesaan Injili Indonesia &copy; 2022. dibuat oleh <i>Tim GEKINDO PHP</i>.</p>
        </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>