<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Links -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/bootstrap.ico">
    
    <!-- Titles-->
    <title>Registrasi Murid</title>
</head>

<body class="bg-secondary">
<nav class="navbar navbar-primary">
  <form class="form-inline">
    <label for="title" class="text-light font-weight-bold">Tugas 8</label>
  </form>
</nav>

 <div class="col-md-8 col-md-offset-2">
        <br><br>
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="table">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>Nomer</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Nama Ayah</th>
                                <th>Nama Ibu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no=0;
                            $result = mysqli_query($koneksi, "SELECT * FROM murid ORDER BY namaLengkap ASC");
                            while($row = mysqli_fetch_assoc($result)) {
                                $no++
                                ?>
                                <tr class="">
                                    <td><?php echo $row['NIS'];?></td>
                                    <td><?php echo $row['nomer'];?></td>
                                    <td><?php echo $row['NISN'];?></td>
                                    <td><?php echo $row['namaLengkap'];?></td>
                                    <td><?php echo $row['namaAyah'];?></td>
                                    <td><?php echo $row['namaIbu'];?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                            <div class="panel-heading">
                <div class="alert alert-warning">
                    <a href="index.php" class="btn btn-danger"><i class="glyphicon glyphicon-plus"></i> Kembali</a>
                </div>
            </div>
            </div>  
        </div>
    </div>

    <script src="js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/hapus.js"></script>
    <script src="js/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>


    <!-- Footer -->
    <footer class="main-footer text-center">
        <p>Tugas 8 &copy;21082010038 </p>
    </footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>