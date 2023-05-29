<?php
    include_once("config.php");
    session_start();
    $error='';
    if(isset($_POST['submit'])){
        $nama = $_POST['namalengkap'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $alamat =htmlspecialchars ($_POST['alamat']);
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(cek_nama($username,$mysqli) == 0){
            $pass  = password_hash($password, PASSWORD_DEFAULT);
            $register = "INSERT INTO login (username,password)VALUES('$username','$password')";
            $result = mysqli_query($mysqli, $register);
            if ($result) {
                $_SESSION['username'] = $username;
                header('location:index.php');
            }else {
                $message =  'Register gagal, Silahkan coba lagi!';
            }
        }else{
            $message = "<center><h3> username sudah terdaftar </h3></center>";
        }
    }
            
    function cek_nama($username,$mysqli){
    $nama = mysqli_real_escape_string($mysqli, $username);
    $query = "SELECT * FROM login WHERE username = '$username'";
    if($result = mysqli_query($mysqli, $query) ) return mysqli_num_rows($result);
    }
    
?>
<!DOCTYPE html>
<html>
<?php
include('../header.php');
include('../menu.php');
?>
<head>
    <title>Sistem Informasi Berbasis Website</title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="main">
            <form method="post" action="daftar.php" id="form">
                <h2>Daftar/Register</h2><hr>

                <label>Nama Lengkap :</label>
                <input type="text" name="namalengkap" id="namalengkap" required>

                <label>Jenis Kelamin :</label>
                <select name="jeniskelamin" id="jeniskelamin" required>
                    <option value="Laki-laki" selected>Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label>Alamat :</label>
                <br>
                <textarea name="alamat" id="alamat" cols="30" rows="5" required></textarea>

                <label>Username :</label>
                <input type="text" name="username" id="username" required>
                <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>

                <label>Password :</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" name="submit" id="submit" value="DAFTAR">

                <br><br>
                <center><b>Jika sudah punya akun? Silahkan</b> <a href="index.php">Login</a></center>
            </form>
       
        </div>
    </div>
        <?php
        include('../footer.php');
        ?>
</body>
</html>