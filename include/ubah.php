<?php

require 'function.php';

$id = $_GET["id"];

$hari = query("SELECT * FROM hari_piket WHERE id=$id")[0];




if (isset($_POST["submit"])) {

  if (ubah_hari($_POST) > 0) {
    echo "
    <script>
    
    alert('data tanggal hari berhasi diubah');
    document.location.href = '../index.php';
    
    </script>";
  } else {
    echo "
    <script>
    
    alert('data tanggal hari gagal diubah');
    
    
    </script>";
  }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>tambah data siswa</title>
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- style sendiri -->
  <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>




  <div class="container-md">
    <h2 class="text-center my-2">Ubah Data Jadwal hari</h2>

    <form action="" method="POST">

      <input type="hidden" name="id" value="<?= $hari["id"] ?>">

      <div class="mb-3">
        <label class="form-label" for="Hari">Hari</label>
        <input class="form-control" type="date" name="Hari" id="Hari" required autofocus autocomplete="off" value="<?= $hari["Hari"] ?>">
      </div>



      <button type="submit" name="submit" class="btn btn-primary mb-5">Ubah Data</button>


    </form>


  </div>

</body>

</html>