<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mengimplementasikan Library (Boostrap dan font Awesome)</title>
        <link rel="stylesheet" href="bootstrap5beta/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome5beta/css/all.css">
    </head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">
        <img src="assets/gambar/logo.png" alt="logo" style="width:100px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-book"></i>Pemograman</a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-calendar"></i>Database</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://<?php echo $_SERVER['HTTP_HOST']?>/template/pertemuan9/framework"><i class="fas fa-cog"></i>Framework</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-envelope-open"></i>Lainnya</a>
            </li>         
        </ul>
    </div>
</nav>
<div class="jumbotron text-center">
    <h1>Belajar programing itu mudah</h1>
    <p>Tingkatkan skill programing kamu belajar tutorial pemograman gratis</p>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="assets/gambar/HTML_&_CSS.png" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>Belajar HTML dan CSS</h3>
                    <p>Lorem ipsum dolor sit amet, cpnsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="assets/gambar/Programming.png" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3><a href="artikel.html" style="text-decoration:none;color: black;">Web programing</h3>
                    <p>Lorem ipsum dolor sit amet, cpnsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="assets/gambar/Python.png" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>Belajar Python</h3>
                    <p>Lorem ipsum dolor sit amet, cpnsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail">
                <a href="artikel.html"><img src="assets/gambar/Desain_UI_&_UX.png" width="100%" alt="Cinque Terre"></a>
                <div class="caption">
                    <h3>Desain UI & UX</h3>
                    <p>Lorem ipsum dolor sit amet, cpnsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    <p><a href="artikel.html" class="btn btn-light btn-block" role="button">Selengkapnya</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="jumbotron text-center" style="margin-bottom:0">
    <p>copyright 2021 pemograman web</p>
</div>
</body>
</html>

