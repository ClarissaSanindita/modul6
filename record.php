<?php
require_once"./connect.php";

$sql = 'SELECT nis, nama, alamat FROM tb_siswa';
$result = mysqli_query($connect, $sql);
if ($result) {
  if (mysqli_num_rows($result)) {
    ?>
    <table border=1 cellspacing=1 cellpadding=5 class="tabel">
      <tr>
        <td>No</td>
        <td>NIS</td>
        <td>Nama</td>
        <td>Alamat</td>
      </tr>
      <?php
      $i = 1;
      while ($row = mysqli_fetch_row($result)) {
        ?>
          <tr>
            <td>
              <?php echo $i; ?>
            </td>
              <td>
                <?php echo $row[0]; ?>
              </td>
              <td>
                <?php echo $row[1]; ?>
              </td>
              <td>
                <?php echo $row[2]; ?>
              </td>
          </tr>
        <?php
        $i++;
      }
       ?>
    </table>
    <a href="logout.php" class="logout">LOG OUT</a>
    <?php
  }
  else {
    echo "Data Tidak Ditemukan";
  }
  mysqli_close($connect);
}
 ?>
