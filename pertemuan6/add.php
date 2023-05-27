<html>
<head>
    <title> Add User</title>
</head>
<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Name<td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email<td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Mobile<td>
                <td><input type="text" name="mobile"></td>
            </tr>
            <tr>
                <td>Hobi<td>
                <td><input type="text" name="hobi"></td>
            </tr>
            <tr>
                <td>Makanan Kesukaan<td>
                <td><input type="text" name="makanankesukaan"></td>
            </tr>
            <tr>
                <td>Cita-cita<td>
                <td><input type="text" name="citacita"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="add"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $hobi = $_POST['hobi'];
        $makanankesukaan = $_POST['makanankesukaan'];
        $citacita = $_POST['citacita'];

        include_once("config.php");

        $result = mysqli_query($mysqli,"INSERT INTO biodata(name,email,mobile,hobi,makanankesukaan,citacita)VALUES('$name','$email','$mobile','$hobi','$makanankesukaan','$citacita')");

        echo"User added successfully.<a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>