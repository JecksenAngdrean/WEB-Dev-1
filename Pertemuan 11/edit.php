<?php
include('header.php');
?>
<div class="container" style="padding:20px">
    <h2 class="text-center">Form Edit Data</h3>
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
    include_once("config.php");
    $id = $_GET['id'];
    $result = mysqli_query($mysqli, "SELECT * FROM namauser ORDER BY id DESC");
    while($user_data = mysqli_fetch_array($result))
    {
        $firstname = $user_data['firstname'];
        $lastname = $user_data['lastname'];
        $handle = $user_data['handle'];
    }
    ?>
    <form action="prosesedit.php" method="POST">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="firstname" placeholder="Enter Fisrt Name" value="<?php echo $firstname;?>">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastname" placeholder="Enter Last Name" value="<?php echo $lastname;?>">
        </div>
        <div class="form-group">
            <label for="handle">Handle</label>
            <input type="text" class="form-control" id="handle" name="handle" aria-describedby="handle" placeholder="Enter Handle" value="<?php echo $handle;?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary" style="margin-top:25px">Submit</button>
    </form>
</div>
<?php
session_destroy();
include('footer.php');
?>