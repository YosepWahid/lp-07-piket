<?php

require 'function.php';



if (isset($_POST["submit"])) {

  if (tambah($_POST) > 0) {
    echo "
    <script>

    alert('data anggota berhasil ditambahkan')
    document.location.href = '../index.php';

    </script>";
  } else {
    echo "
    <script>

    alert('data anggota gagal ditambahkan')
    document.location.href = '../index.php';

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
  <title>tambah data anggota piket</title>
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- style sendiri -->
  <link rel="stylesheet" href="assets/style/style.css">
</head>

<body>


  <div class="container-md">
    <h1 class="text-center my-3">Tambah Data Anggota Piket</h1>

    <form action="" method="post">

      <div class="mb-3">
        <label class="form-label" for="senin">senin</label>
        <input class="form-control" type="text" name="senin" id="senin" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label" for="selasa">selasa</label>
        <input class="form-control" type="text" name="selasa" id="selasa" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label" for="rabu">rabu</label>
        <input class="form-control" type="text" name="rabu" id="rabu" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label" for="kamis">kamis</label>
        <input class="form-control" type="text" name="kamis" id="kamis" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label" for="jumat">jumat</label>
        <input class="form-control" type="text" name="jumat" id="jumat" autocomplete="off">
      </div>



      <button type="submit" name="submit" class="btn btn-primary mb-5">Tambah Data</button>


    </form>


  </div>

</body>

</html>