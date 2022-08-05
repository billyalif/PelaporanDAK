<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E-SIDAK | Home</title>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800;900&display=swap');"
        rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a href="#">
                <img src="../img/Group 3776.svg" width="400" height="70" class="d-inline-block align-text-top" href="{{ url('home') }}">
                </a>
            </div>
        </nav>

        <a>
            <img class ="kiri" src="../img/Group 2.svg" width="475" height="475" style="mt-6"/>
        </a>

        <div class="jarak">
            <h1 class="font">SISTEM INFORMASI</h1>
            <h1 class="font">PELAPORAN DAK</h1>
            <h1 class="font">TAHUN 2022</h1>
            {{-- <div class="d-flex flex-column flex-lg-row align-items-center">
                <a class="me-lg-3 mb-4 mb-lg-0" href="#!"><img class="app-badge" src="assets/img/google-play-badge.svg" alt="..." /></a>
                <a href="#!"><img class="app-badge" src="assets/img/app-store-badge.svg" alt="..." /></a>
            </div> --}}

            <a class="btn1 btn-masuk" href="{{ url('login') }}">   MASUK   </a>
            <a class="btn1 btn-masuk" href="{{ url('satker') }}">   Home   </a>
        </div>

    </body>
</html>
