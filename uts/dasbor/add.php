<?php
include_once('../config.php');

session_start();
include('../../header.php');
include('../../menu.php');
?>
<html>
    <head>
        <title>Add Users</title>
    </head>
    <body>
        <a href="index.php">Go To Home</a>    
        <br><br>
        <form action="add.php" method="post" name="form1">
            <table>
                <tr>
                    <td>Hobi :</td>
                    <td><input type="text" name="hobi"></td>
                </tr>
                <tr>
                    <td>Deskripsi Hobi :</td>
                    <td><input type="text" name="deskripsi_hobi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Add"></td>
                </tr>
                </table>
        </form>
        <?php
            if(isset($_POST['Submit'])){
                $nama = $_SESSION['uname'];
                $hobi = $_POST['hobi'];
                $deskripsi = $_POST['deskripsi_hobi'];

                include_once("../config.php");

                $result = mysqli_query($mysqli, "INSERT INTO 2044088_hobi(nama_lengkap,hobi,deskripsi_hobi) VALUES('$nama','$hobi','$deskripsi')");

                echo "User added successfully. <a href='index.php'>View Users</a>";
            }
            include('../../footer.php');
        ?>
    </body>
</html>