<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $nopendaftaran = $_POST['nopendaftaran'];
        $jenispend = $_POST['jenispend'];
        $tglmsksklh = $_POST['tglmsksklh'];
        $nis = $_POST['nis'];
        $nopesujian= $_POST['nopesujian'];
        $appaud = $_POST['appaud'];
        $aptk = $_POST['aptk'];
        $noserskhun = $_POST['noserskhun'];
        $noserijazah = $_POST['noserijazah'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

      // Menyimpan ke database
      $sql = mysqli_query($koneksi, "INSERT INTO registrasi (nopendaftaran, jenispend, tglmsksklh, nis, nopesujian, appaud, aptk, noserskhun, noserijazah, hobi, citacita) VALUES ('$nopendaftaran', '$jenispend', '$tglmsksklh', '$nis', '$nopesujian', '$appaud', '$aptk', '$noserskhun', '$noserijazah', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Diri!'); window.location.href='2_formDataDiri.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!!');";
        }
      }
?>