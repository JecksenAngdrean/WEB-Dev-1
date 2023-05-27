<?php
    if(isset($_POST['fnama']))
    {
        $fnama = $_POST['fnama'];
        $fnim = $_POST['fnim'];
        $fkelas = $_POST['fkelas'];
        $fprogramstudi = $_POST['fprogramstudi'];
        $fnamadosen = $_POST['fnamadosen'];
        $falamat = $_POST['falamat'];
        $fhobi = $_POST['fhobi'];
        
        $foto = $_FILES["ffoto"]["name"];
        $tmpfoto = $_FILES["ffoto"]["tmp_name"];
        $gambar = "berkas/" .$foto;
        
        $ijazah=$_FILES["fijazah"]["name"];
        $tmpijazah=$_FILES["fijazah"]["tmp_name"];
        $fotoijazah = "berkas/" .$ijazah;
        
        move_uploaded_file($tmpfoto, $gambar);
        move_uploaded_file($tmpijazah, $fotoijazah);
        echo "<span class='success'>Dengan <b>METODE POST</b></span><br>";
        echo "Nama : " . $fnama . "<br>NIM : " . $fnim . "<br>Kelas : " . $fkelas . "<br>Program Studi : " . $fprogramstudi .  "<br>Nama Dosen : " . $fnamadosen ."<br>Alamat : " . $falamat . "<br>Hobi : " . $fhobi . "<br>Foto : <img src='" . $gambar . "'style='width:100px'/>" . "<br>ijazah : <img src='".  $fotoijazah ."'style='width:100px'/>";
    }

    if(isset($_GET['fnama']))
    {
        $fnama = $_GET['fnama'];
        $fnim = $_GET['fnim'];
        $fkelas = $_GET['fkelas'];
        $fprogramstudi = $_GET['fprogramstudi'];
        $fnamadosen = $_GET['fnamadosen'];
        $falamat = $_GET['falamat'];
        echo "<span class='success'>Dengan <b>METODE GET</b></span><br>";
        echo "Nama : " . $fnama . "<br>NIM : " . $fnim . "<br>Kelas : " . $fkelas . "<br>Program Studi : " . $fprogramstudi . "<br>Nama Dosen : " . $fnamadosen . "<br>Alamat : " . $falamat . "<br>Foto :Tidak ada foto yang ditampilkan karena metode GET";
    }
?>