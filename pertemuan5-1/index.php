<!DOCTYPE html>
<html>
<head>
    <title>Nyekrip PHP GET dan POST</title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/metode.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div class="main">
            <form method="get" action="index.php" id="form" enctype="multipart/form-data">
                <h2>Membuat dan Menimplementasikan Form Method Get dan Post</h2><hr>

                <label>Nama :</label>
                <input type="text" name="fnama" id="fnama" required>

                <label>NIM :</label>
                <input type="text" name="fnim" id="fnim" required>

                <label>Kelas :</label>
                <input type="text" name="fkelas" id="fkelas" required>

                <label>Program Studi :</label>
                <select name="fprogramstudi" id="fprogramstudi" required>
                    <option selected>Teknik Informatika</option>
                    <option>Sistem Informasi</option>
                </select>

                <label>Nama Dosen :</label>
                <input type="text" name="fnamadosen" id="fnamadosen" required>

                <label>Alamat :</label>
                <input type="text" name="falamat" id="falamat" required>

                <label>Hobi :</label>
                <input type="text" name="fhobi" id="fhobi" required>
            
                <label>Upload Foto :</label>
                <input type="file" name="ffoto" id="ffoto" required>
                
                <label>Upload Ijazah :</label>
                <input type="file" name="fijazah" id="fijazah" required>

                <label>Pilih Metode :</label>
                <span>
                    <input type="radio" name="method" value="get" checked> GET &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="method" value="post"> POST 
                </span>
                <input type="submit" name="submit" id="submit" value="Submit">
            </form>
            <?php include "proses.php";?>
        </div>
    </div>
</body>
</html>