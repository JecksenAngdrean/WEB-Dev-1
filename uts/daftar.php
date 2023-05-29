<?php
    include_once("config.php");
    session_start();
    $error='';
    if(isset($_POST['submit_daftar'])){
        $username_daftar = $_POST['username_daftar'];
        $password_daftar = $_POST['password_daftar'];
        $nama_daftar = $_POST['nama_daftar'];
        $kelamin_daftar = $_POST['kelamin_daftar'];
        $alamat_daftar = htmlspecialchars($_POST['alamat_daftar']);
        $tanggal = date('Y-m-d', strtotime($_POST['tanggal']));
        
        if(cek_nama($username_daftar,$mysqli) == 0){
            $pass  = password_hash($password_daftar, PASSWORD_DEFAULT);
            $register = "INSERT INTO 2044088_uts(username,password,namalengkap,jeniskelamin,alamat,tanggallahir) VALUES('$username_daftar','$password_daftar','$nama_daftar','$kelamin_daftar','$alamat_daftar','$tanggal')";
            $result = mysqli_query($mysqli, $register);
            if ($result) {
                $_SESSION['username_daftar'] = $username_daftar;
                echo "<script>alert('Pendaftaran berhasil, Silahkan Login!.');location='index.php'</script>";
            }else {
                $error =  'Register gagal, Silahkan coba lagi!';
            }
        }else{
            $error = "<center><h3> username sudah terdaftar </h3></center>";
        }

                // INSERT INTO _quiz(username,password,nama_lengkap,jenis_kelamin,alamat) VALUES('Sand','tes','Sandd','Laki-Laki','Tidakada')
    }
            
    function cek_nama($username_daftar,$mysqli){
    $nama = mysqli_real_escape_string($mysqli, $username_daftar);
    $query = "SELECT * FROM 2044088_UTS WHERE username = '$username_daftar'";
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
    <script src="js/metode.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div class="main">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="form" name="form" onsubmit="return checkform()">
                <h2>Daftar/Register</h2><hr>
                <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>

                <label>Nama Lengkap :</label>
                <input type="text" name="nama_daftar" id="nama_daftar" required>

                <label>Jenis Kelamin :</label>
                <select name="kelamin_daftar" id="kelamin_daftar" required>
                    <option value="Laki-laki" selected>Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label>Alamat :</label>
                <br>
                <textarea name="alamat_daftar" id="alamat_daftar" cols="30" rows="5" required></textarea>
                <br>

                <label>Tanggal Lahir :</label>
                <input type="date" name="tanggal" id="tanggal" value="<?php echo date("Y-m-d"); ?>" required>
                <br>

                <label>Username :</label>
                <input type="text" name="username_daftar" id="username_daftar" required>

                <label>Password :</label>
                <input type="password" name="password_daftar" id="password_daftar" required>

                <input type="submit" name="submit_daftar" id="submit_daftar" value="DAFTAR">

                <br><br>
                <center><b>Jika sudah punya akun? Silahkan</b> <a href="index.php">Login</a></center>
            </form>
            <script type="text/javascript">
                function checkform()
                {
                var dateString = document.form.tanggal.value;
                var myDate = new Date(dateString);
                var today = new Date();
                    if (document.form.tanggal.value == "")
                    { 
                    //something is wrong
                    alert('REQUIRED FIELD ERROR: Please enter date in field!')
                    return false;
                    }
                    else if (myDate>today)
                    { 
                    //something else is wrong
                        alert('Pendaftaran gagal, tanggal lahir tidak boleh melewati hari ini!')
                        return false;
                    }
                    // if script gets this far through all of your fields
                    // without problems, it's ok and you can submit the form
                    return true;
                }
            </script>
        </div>
    </div>
       
</body>
</html>