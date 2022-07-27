<?php

require 'function.php';

$id = $_GET["id"];

$orang = query("SELECT * FROM anggota_piket WHERE id=$id")[0];




if (isset($_POST["submit"])) {

  if (ubah_piket($_POST) > 0) {
    echo "
    <script>
    
    alert('data anggota berhasil diubah')
    document.location.href = '../index.php';
    
    </script>";
  } else {
    echo "
    <script>
    
    alert('data anggota gagal diubah')
    
    
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
    <h1 class="text-center my-3">Ubah Data Anggota Piket</h1>

    <form action="" method="POST">

      <input type="hidden" name="id" value="<?= $orang["id"] ?>">

      <div class="mb-3">
        <label class="form-label" for="senin">senin</label>
        <input class="form-control" type="text" name="senin" id="senin" required autofocus autocomplete="off" value="<?= $orang["senin"] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="selasa">selasa</label>
        <input class="form-control" type="text" name="selasa" id="selasa" required autofocus autocomplete="off" value="<?= $orang["selasa"] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="rabu">rabu</label>
        <input class="form-control" type="text" name="rabu" id="rabu" required autofocus autocomplete="off" value="<?= $orang["rabu"] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="kamis">kamis</label>
        <input class="form-control" type="text" name="kamis" id="kamis" required autofocus autocomplete="off" value="<?= $orang["kamis"] ?>">
      </div>
      <div class="mb-3">
        <label class="form-label" for="jumat">Jum'at</label>
        <input class="form-control" type="text" name="jumat" id="jumat" required autofocus autocomplete="off" value="<?= $orang["jumat"] ?>">
      </div>



      <button type="submit" name="submit" class="btn btn-primary mb-5">Ubah Data</button>


    </form>


  </div>

</body>

</html>