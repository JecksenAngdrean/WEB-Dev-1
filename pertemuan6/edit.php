<?php
include_once("config.php");
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $hobi = $_POST['hobi'];
    $makanankesukaan = $_POST['makanankesukaan'];
    $citacita = $_POST['citacita'];

    $result = mysqli_query($mysqli, "UPDATE biodata SET name='$name', email='$email', mobile='$mobile', hobi='$hobi', makanankesukaan='$makanankesukaan', citacita='$citacita' WHERE id=$id");
    echo "<script> location.replace('index.php');</script>";
}
?>
<?php
$id = $_GET['id'];
$result = mysqli_query($mysqli,"SELECT*FROM biodata WHERE id=$id");

while($user_data = mysqli_fetch_array($result)){
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
    $hobi = $_POST['hobi'];
    $makanankesukaan = $_POST['makanankesukaan'];
    $citacita = $_POST['citacita'];
}
?>
<html>
<head>
    <title>Edit User Data</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    <form name="update_user" method="post" action="edit.php">
        <table width="25%" border="0">
            <tr>
                <td>Name<td>
                <td><input type="text" name="name" value="<?php echo $name;?>"></td>
            </tr>
            <tr>
                <td>Email<td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td>Mobile<td>
                <td><input type="text" name="mobile" value="<?php echo $mobile;?>"></td>
            </tr>
            <tr>
                <td>Hobi<td>
                <td><input type="text" name="hobi" value="<?php echo $hobi;?>"></td>
            </tr>
            <tr>
                <td>Makanan Kesukaan<td>
                <td><input type="text" name="makanankesukaan" value="<?php echo $makanankesukaan;?>"></td>
            </tr>
            <tr>
                <td>Cita-cita<td>
                <td><input type="text" name="citacita" value="<?php echo $citacita;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>