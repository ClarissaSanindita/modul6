<?php
session_start();

if (!(isset($_SESSION['tb_siswa']))) {
  header("location: form_login.php");
}

include'connect.php';

$nis = $_SESSION['tb_siswa'];

$query = "SELECT * FROM tb_siswa ORDER BY nama"  ;
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tamah Data</title>
    <style>
    *{
      margin: 0;
      padding: 0;

    }

    body{
      background-color: #F0F4F3;
    }
    .tabel{
      width: 700px;
      height: 25vh;
      text-align:center;
      border-collapse: collapse;
      font-size: 20px;
      margin-left: 350px;
      margin-top: 100px;
      background-color: #C1BBA8;
    }

    .form{
      margin: 20px;
      font-size: 16px;
      
    }

    .logout{
      margin-left: 20px;
    }

    .simpan{
      font-size: 17px;
      width:70px;
      height: 35px;
      border: none;
      background-color: #EFBFA8;
      color: grey;
    }
    </style>
  </head>
  <body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
      <table class="form">
        <tr>
          <td>NIS</td>
          <td></td>
          <td><input type="text" name="nis"></td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td></td>
          <td><input type="text" name="nama" ></td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td></td>
          <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td>Password</td>
          <td></td>
          <td><input type="password" name="password"></td>
        </tr>
        <tr>
          <td><br></td>
        </tr>
        <tr>
          <td></td>

          <td><input type="submit" value="Simpan" class="simpan"></td>
        </tr>
      </table>
    </form>

  </body>
</html>

<?php
  require_once"./connect.php";

  //jika diisi lalu disubmit
  if (isset($_POST['nis']) && isset($_POST['nama'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];


    //tambah data
    $sql = "INSERT INTO tb_siswa VALUES('".$nis."','".$nama."','".$alamat."','".$password."')";
    $result = mysqli_query($connect, $sql);
    if ($result) {
      echo "Data berhasil ditambah";
    }
    else {
      echo "Gagal Menambahkan Data <br />";
      echo mysqli_error($connect);
    }
  }

  echo "<hr />";
  require_once "./record.php"

 ?>
