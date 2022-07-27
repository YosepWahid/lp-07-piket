<?php
require 'include/function.php';

$tanggal = query("SELECT * FROM hari_piket");

$anggota = query("SELECT * FROM anggota_piket");


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal piket site</title>
  <!--bootstrap css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- bootstrap css -->



</head>

<body>

  <!-- container -->

  <div class="container my-5">

    <h1 class="text-center">Jadwal Hari</h1>

    <div class="table-responsive">
      <table class="table table-bordered border-secondary table-hover table-sm align-middle text-center">

        <thead>
          <tr>
            <th>No</th>
            <th>ubah</th>
            <th>Tanggal</th>
            <th>piket</th>
          </tr>
        </thead>


        <?php $i = 1 ?>
        <?php foreach ($tanggal as $tgl) : ?>

          <tbody>

            <tr>
              <td><?= $i ?></td>
              <td>
                <a href="include/ubah.php?id=<?= $tgl["id"] ?>" class="btn btn-sm btn-primary" type="button">ubah</a>
              </td>
              <td>
                <?php
                $tanggal2 = $tgl["Hari"];

                $tanggal3 = date("d-F-Y", strtotime($tanggal2));

                echo $tanggal3

                ?>
              </td>

              <td>
                <?php

                $hari = $tgl["Hari"];

                $hari2 = date("l", strtotime($hari));

                echo $hari2
                ?>
              </td>
            </tr>







          </tbody>



          <?php $i++ ?>
        <?php endforeach ?>
      </table>
    </div>

  </div>
  <!-- akhir container -->





















  <!-- container -->
  <div class="container my-5">

    <h1 class="text-center">Jadwal piket</h1>

    <a href="include/tambah.php" type="button" class="btn btn-sm btn-dark mb-1">tambah anggota baru</a>

    <div class="table-responsive">
      <table class="table table-bordered border-secondary table-hover table-sm align-middle text-center">

        <thead class="table-dark">
          <tr>
            <th>ubah</th>
            <th>senin</th>
            <th>selasa</th>
            <th>rabu</th>
            <th>kamis</th>
            <th>jum'at</th>
          </tr>
        </thead>



        <?php foreach ($anggota as $agt) : ?>

          <tbody>

            <tr>
              <td>
                <a type="button" class="btn btn-success btn-sm" href="include/ubah2.php?id=<?= $agt["id"] ?>">
                  ubah
                </a>

                <a type="button" class="btn btn-danger btn-sm" href="include/hapus.php?id=<?= $agt["id"]; ?>" onclick="return confirm('yakin data anggota piket dihapus');">
                  hapus
                </a>
              </td>

              <td><?= $agt["senin"] ?></td>
              <td><?= $agt["selasa"] ?></td>
              <td><?= $agt["rabu"] ?></td>
              <td><?= $agt["kamis"] ?></td>
              <td><?= $agt["jumat"] ?></td>
            </tr>
          </tbody>



        <?php endforeach ?>
      </table>

    </div>
  </div>
  <!-- akhir container -->






  <!-- boostrap js -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- boostrap js -->
</body>

</html>