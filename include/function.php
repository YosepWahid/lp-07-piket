<?php

$conn = mysqli_connect("localhost", "root", "", "piket");

function query($query)
{
  global $conn;

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  };

  return $rows;
};


// function ubah hari
function ubah_hari($data)
{
  global $conn;

  $id = $data["id"];
  $hari = htmlspecialchars($data['Hari']);

  $query = " UPDATE hari_piket SET 
        Hari = '$hari'
        WHERE id = $id
    ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

// function ubah anggota piket
function ubah_piket($data)
{
  global $conn;

  $id = $data["id"];
  $senin = htmlspecialchars($data["senin"]);
  $selasa = htmlspecialchars($data["selasa"]);
  $rabu = htmlspecialchars($data["rabu"]);
  $kamis = htmlspecialchars($data["kamis"]);
  $jumat = htmlspecialchars($data["jumat"]);




  $query = " UPDATE anggota_piket SET 
        senin = '$senin',
        selasa = '$selasa',
        rabu = '$rabu',
        kamis = '$kamis',
        jumat = '$jumat'
        WHERE id = $id
    ";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}


// function tambah
function tambah($data)
{
  global $conn;


  $senin = htmlspecialchars($data["senin"]);
  $selasa = htmlspecialchars($data["selasa"]);
  $rabu = htmlspecialchars($data["rabu"]);
  $kamis = htmlspecialchars($data["kamis"]);
  $jumat = htmlspecialchars($data["jumat"]);

  $query = "INSERT INTO anggota_piket VALUES(
    '',
    '$senin',
    '$selasa',
    '$rabu',
    '$kamis',
    '$jumat'
  )";


  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}





// function hapus

function hapus($id)
{

  global $conn;

  mysqli_query($conn, "DELETE FROM anggota_piket WHERE id=$id");

  return mysqli_affected_rows($conn);
}
