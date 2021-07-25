<?php
    session_start();
    include"koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="awal">
        <h3>LOGIN</h3>
    
    <div class="lgn">
        <div class="table">
            <form method="post">
                <table style="width: 500px">
                <tr  height="80px">
                    <td>Username :</td>
                    <td><input type="text" name="fusername" style="height: 30px; width:300px"></td>
                </tr>
                <tr height="80px">
                    <td>Password :</td>
                    <td><input type="password" name="fpassword" style="height: 30px; width:300px"></td>
                </tr>
                <tr height="80px">
                    <td colspan="2" align="center"><button type="submit" name="fmasuk" style="width: 150px; height: 30px">Login</button></td>
                </tr>
                <table>
            </form>
        </div>
    </div>
</div>
<div class="footer1">
    <p>&copy 2000018193 - Rosila - Teknik Informatika - Universitas Ahmad Dahlan</p>
</div>

    <?php
        if(isset($_POST['fmasuk'])){
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];
            $qry = mysqli_query($koneksi , "SELECT * FROM form_login WHERE username='$username' AND password='$password'");
            $cek = mysqli_num_rows($qry);
            if($cek==1){
                $_SESSION['userweb'] = $username;
                header("location: menu.html");
                exit;
            }
            else{
                echo"Maaf Username & Password Yang Anda Masukan Salah";
            }
        }
    ?>
</body>
</html>
