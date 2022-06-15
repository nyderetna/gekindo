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

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    #myBtn {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Fixed/sticky position */
        bottom: 20px;
        /* Place the button at the bottom of the page */
        right: 30px;
        /* Place the button 30px from the right */
        z-index: 99;
        /* Make sure it does not overlap */
        border: none;
        /* Remove borders */
        outline: none;
        /* Remove outline */
        background-color: #285891;
        /* Set a background color */
        color: white;
        /* Text color */
        cursor: pointer;
        /* Add a mouse pointer on hover */
        padding: 15px;
        /* Some padding */
        border-radius: 10px;
        /* Rounded corners */
        font-size: 12px;
        /* Increase font size */
    }

    #myBtn:hover {
        background-color: #555;
        /* Add a dark-grey background on hover */
    }
</style>

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
                            <li><a class="dropdown-item" href="visimisi">Visi & Misi, Motto, dan Identitas Gereja</a></li>
                            <li><a class="dropdown-item" href="adart">AD & ART</a></li>
                            <li><a class="dropdown-item" href="profil">Profil</a></li>
                            <li><a class="dropdown-item" href="rekening">Rekening</a></li>
                            <li><a class="dropdown-item" href="hubungi">Hubungi Kami</a></li>
                            <li><a class="dropdown-item" href="galeri">Galeri</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                </form> -->
            </div>
        </nav>
    </div>

    <?= $this->renderSection('content'); ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Kembali ke atas <i class="fa fa-arrow-turn-up"></i></button>
    <footer class="text-muted py-5">
        <hr>
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Kembali ke atas <i class="fa fa-arrow-turn-up"></i></a>
            </p>
            <p class="mb-1">Gereja Keesaan Injili Indonesia &copy; 2022. dibuat oleh <i>Tim GEKINDO PHP</i>.</p>
        </div>
        <div class="container text-center">
            <!-- Facebook -->
            <a class="btn btn-primary" style="background-color: #3b5998;" target="_blank" href="https://www.facebook.com/groups/gekindo/" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-primary" style="background-color: #55acee;" target="_blank" href="https://twitter.com/gekindo" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Instagram -->
            <a class="btn btn-primary" style="background-color: #c1558b;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Youtube -->
            <a class="btn btn-primary" style="background-color: #ed302f;" href="#!" role="button"><i class="fab fa-youtube"></i></a>

            <!-- Whatsapp -->
            <a class="btn btn-primary" style="background-color: #25d366;" href="#!" role="button"><i class="fab fa-whatsapp"></i></a>
        </div>
    </footer>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#btnCari").click(function() {
                var val = $("select#select_adart").find(":selected").val();
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(val).offset().top
                }, 2000);
            });
        });

        //Get the button:
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

</body>

</html>