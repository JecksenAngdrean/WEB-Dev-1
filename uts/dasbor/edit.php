<?php

include_once("../config.php");
session_start();

include('../../header.php');
include('../../menu.php');

    
    if(isset($_POST['update'])){
        $nama = $_SESSION['uname'];

        $hobi = $_POST['hobi'];
        $deskripsi = $_POST['deskripsi_hobi'];
        
        $result = mysqli_query($mysqli, "UPDATE 2044088_hobi SET hobi='$hobi', deskripsi_hobi='$deskripsi' WHERE nama_lengkap='$nama'");

        echo "<script> location.replace('index.php'); </script>";
    }
?>
<?php  
    $id = $_GET['id'];
    $nama = $_SESSION['uname'];
    if ($nama != $id ){
        echo "<script>alert('Maaf, tidak boleh mengubah hobi orang lain!.');location='index.php'</script>";
    }
    else{
        $result = mysqli_query($mysqli, "SELECT * FROM 2044088_hobi WHERE nama_lengkap='$id'");

    while($user_data = mysqli_fetch_array($result)){
        $hobi = $user_data['hobi'];
        $deskripsi = $user_data['deskripsi_hobi'];
    }
    }
    
    
?>
<html>
    <head>
        <title>Edit User Data</title>
    </head>
    <body>
        <a href="index.php">Home</a>
        <br><br>
        <form name="update_user" method="post" action="edit.php">
            <table border="0">
                <tr>
                    <td>Hobi :</td>
                    <td><input type="text" name="hobi" value="<?php echo $hobi;?>"></td>
                </tr>
                <tr>
                    <td>Deskripsi Hobi :</td>
                    <td><input type="text" name="deskripsi_hobi" value="<?php echo $deskripsi;?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name='nama_lengkap' value="<?php echo $_GET['nama_lengkap'];?>"></td>
                    <td><input type="submit" name='update' value="Update"></td>
                </tr>

            </table>
        </form>
    </body>
</html>
<?php
include('../../footer.php');
?>