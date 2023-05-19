<?php
//meminta jembatan koneksi ke database
include "koneksi.php";
//menerima inputan
$username         = $_POST['username'];
$password            = $_POST['password'];


//pemerikasaan jika ada data inputan kosong
//sesuaikan dengan kebutuhan
if(  $username=="" || $password=="")
{
    ?>
    <script language="javascript">
        alert('Masih ada data yang kosong');
        document.location.href="login.html";
    </script>
    <?php
}

else
{ 
    $sql= $koneksi->prepare("select * from akun where username = ?");
    $sql->bind_param("s", $username);
    $sql->execute();
    $sql_result = $sql->get_result();
    if ($sql_result->num_rows > 0){
        $data = $sql_result->fetch_assoc();
        if($data['password'] === $password ) {
             ?>
        <script language="javascript">
            alert('Login Berhasil');
            document.location.href="index.php";
        </script>
        <?php
        }
    }else{
        echo "<h2>Username/Password Salah</h2>";
    }
}?> <!--tutup php--->