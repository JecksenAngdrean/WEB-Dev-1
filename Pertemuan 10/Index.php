/creates a folder<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mengimplementasikan Library (Boostrap dan Font Awesome)</title>
    <link rel="stylesheet" href="bootstrap5beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome5beta/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body background="black">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
        <img src="assets/gambar/logo.png" alt="logo" style="width:100px;">
    </a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-book"></i> Pemrograman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-calendar"></i> Database</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cog"></i> Framework</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-envelope-open"></i> Lainnya</a>
            </li>
        </ul>
    </div>
</nav>
<div class="bd-example">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/gambar/image1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gambar Slide Yang Pertama</h5>
                    <p>Gambar pemandangan matahari 1.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/gambar/image2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Gambar Slide Yang Kedua</h5>
                    <p>Gambar matahari 2.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<section class="bg-light py-4 my-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-3 text-danger">Bootstrap 5 Cards</h2>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assets/gambar/image-one.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">What is Lorem Ipsum?</a></h3>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assets/gambar/image-two.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">Why do we use it?</a></h3>
                        <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assets/gambar/image-three.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">Where does it come from?</a></h3>
                        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assets/gambar/image-four.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">What is Lorem Ipsum?</a></h3>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assets/gambar/image-five.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">Why do we use it?</a></h3>
                        <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="assets/gambar/image-six.jpg" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title"><a href="#" class="text-secondary">Where does it come from?</a></h3>
                        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it</p>
                        <a href="#" class="btn btn-danger">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-bottom: 40px">
    <div class="bs-example">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">1. What is HTML?</button>                                  
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">2. What is Bootstrap?</button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Bootstrap is a sleek, intuitive, and powerful front-end framework for faster and easier web development. It is a collection of CSS and HTML conventions. <a href="https://www.tutorialrepublic.com/twitter-bootstrap-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree">3. What is CSS?</button>                     
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>CSS stands for Cascading Style Sheet. CSS allows you to specify various style properties for a given HTML element such as colors, backgrounds, fonts etc. <a href="https://www.tutorialrepublic.com/css-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</div>
<!-- Footer -->
<footer class="text-center text-lg-start text-white" style="background-color: #3e4551">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">FOOTER CONTENT</h5>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae modi cum ipsam ad, illo possimus laborum ut reiciendis obcaecati. Ducimus, quas. Corrupti, pariatur eaque? Reiciendis assumenda iusto sapiente inventore animi?
                    </p>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-lg-2 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="#!" class="text-white">Link 1</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 2</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 3</a>
                        </li>
                        <li>
                            <a href="#!" class="text-white">Link 4</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->
        <hr class="mb-4" />
        <!-- Section: CTA -->
        <section class="">
            <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Register for free</span>
                <button type="button" class="btn btn-outline-light btn-rounded">Sign up!
                </button>
            </p>
        </section>
        <!-- Section: CTA -->
        <hr class="mb-4" />

        <!-- Section: Social media -->
        <section class="mb-4 text-center">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
        </section>
      <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">© 2020 Copyright:<a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
<!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html>
