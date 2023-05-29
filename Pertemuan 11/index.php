<?php
include ('header.php');
?>

<div class="container">
    <div class="row">
        <div class="col">
            <p class="fw-bolder">
                <h1>Laid-Back Camp</h1>
                <h6>Original title: Yuru Camp</h6>
                <h6>TV Series-2018-24m</h6>
            </p>
        </div>
        <div class="col-6">
            <div class="d-flex flex-row-reverse">
                    <i class="fas fa-star fa-3x"></i>
            </div>
        </div>
    </div>
</div>

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="img"><img class="d-block w-100" src="assets/yc1.png" alt="First slide"></div>
        </div>
        <div class="carousel-item">
            <div class="img"><img class="d-block w-100" src="assets/yc2.png" alt="Second slide"></div>
        </div>
    </div>
</div>

<section class="bg-light py-4 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                    <img src="assets/yc2.png" class="img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                    <img src="assets/yc2.png" class="img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                    <img src="assets/yc2.png" class="img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>

<div class="container">
    <div class="bs-example">
        <div class="accordion" id="accordionExample">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Sipnosis
            </button>
        </h2>
        </div>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Episode
            </button>
        </h2>
        </div>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <a href="add.php" class="btn btn-primary">Tambah data</a>
    <div class="card my-3">
        <table class="table table-borderless">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once("config.php");
                $result = mysqli_query($mysqli, "SELECT * FROM namauser ORDER BY id DESC");
                while($user_data = mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <th scope="row"><?php echo $user_data['id'];?></th>
                    <td><?php echo $user_data['firstname'];?></td>
                    <td><?php echo $user_data['lastname'];?></td>
                    <td><?php echo $user_data['handle'];?></td>
                    <td><a href='edit.php?id=<?php echo $user_data["id"]?>' class="btn btn-info">Edit</a></td>
                    <td><a href='delete.php?id=<?php echo $user_data["id"]?>' class="btn btn-danger">Delete</a></td>
                </tr>    
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include('footer.php');
?>



