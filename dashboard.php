<?php

session_start();

$username = @$_SESSION['username'];
$password = @$_SESSION['password'];

$akses = @$_SESSION["akses"];

require "./config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dash.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-2 sidebar">
                <h4>DASHBOARD DOSEN</h4>
                <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-house me-2"></i> Dashboard</a>
                <a href="tambah_mhs.php" class="btn btn-primary"><i class="fa-solid fa-user me-2"></i> Tambah Mahasiswa</a>
                <a href="dosen_data.php" class="btn btn-primary"><i class="fa-solid fa-book-open me-2"></i> Rekapitulasi Nilai</a>
                <a href="logout.php" class="btn btn-danger"><i class="fa-solid fa-power-off me-2"></i> Log Out</a>
            </div>
            <div class="col-10">
                <div class="content mt-2">
                    <div class="card">
                        <div class="card-header text-dark">
                            <h5><i class="fa-solid fa-house"></i> Dashboard</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="fw-bold mb-3">Tambah Mahasiswa</h6>
                                            <p class="text-muted">Akses untuk menambah data mahasiswa baru.</p>
                                        </div>
                                        <div class="card-footer"><a href="tambah_mhs.php">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a></div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="fw-bold mb-3">Rekapitulasi Nilai</h6>
                                            <p class="text-muted">Lihat rekap nilai mahasiswa secara lengkap.</p>
                                        </div>
                                        <div class="card-footer"><a href="dosen_data.php">Selengkapnya <i class="fa-solid fa-arrow-right"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
