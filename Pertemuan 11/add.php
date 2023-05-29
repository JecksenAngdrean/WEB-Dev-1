<?php
include('header.php');
?>
<div class="container" style="padding:20px">
    <h2 class="text-center">Form Tambah Data</h3>
    <?php
    session_start();
    if(isset($_SESSION['message']))
    {
    ?>
    <div class="alert alert-success">
        <strong>Success! </strong><?php echo $_SESSION['message'];?>
    </div>
    <?php
    }
    ?>
    <form action="prosesadd.php" method="POST">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname" placeholder="Enter Fisrt Name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="handle">Handle</label>
            <input type="text" class="form-control" id="handle" name="handle" aria-describedby="handle" placeholder="Enter Handle">
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="margin-top:25px">Submit</button>
    </form>
</div>
<?php
include('footer.php');
?>
