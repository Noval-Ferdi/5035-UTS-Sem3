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
    <title>Tambah Data</title>
    <script language="JavaScript" type="text/javascript">
        function Hapus() {
            return confirm('Apakah Anda yakin ingin menghapus?');
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dosen.css">
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
                            <h5><i class="fa-solid fa-user me-2"></i> Update Data
                                <a href="dashboard.php" class="float-end text-dark">
                                    <i class="fa-solid fa-house"></i>
                                </a>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="table-container">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nomor</th>
                                            <th scope="col">Mahasiswa</th>
                                            <th scope="col">Diskusi (14%)</th>
                                            <th scope="col">Praktikum (26%)</th>
                                            <th scope="col">Responsi (15%)</th>
                                            <th scope="col">UTS (20%)</th>
                                            <th scope="col">UAS (25%)</th>
                                            <th scope="col">Nilai</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($sambung, "SELECT * FROM user WHERE level = 'mahasiswa'");
                                        $i = 1;
                                        while ($db_uts_5035 = mysqli_fetch_array($query)) {
                                            $total_nilai =
                                                ($db_uts_5035['diskusi'] * 0.14) +
                                                ($db_uts_5035['praktikum'] * 0.26) +
                                                ($db_uts_5035['responsi'] * 0.15) +
                                                ($db_uts_5035['uts'] * 0.20) +
                                                ($db_uts_5035['uas'] * 0.25);

                                            echo "<tr>";
                                            echo "<td>$i</td>";
                                            echo "<td>" . $db_uts_5035["username"] . "</td>";
                                            echo "<td>" . $db_uts_5035["diskusi"] . "</td>";
                                            echo "<td>" . $db_uts_5035["praktikum"] . "</td>";
                                            echo "<td>" . $db_uts_5035["responsi"] . "</td>";
                                            echo "<td>" . $db_uts_5035["uts"] . "</td>";
                                            echo "<td>" . $db_uts_5035["uas"] . "</td>";
                                            echo "<td>" . number_format($total_nilai, 2) . "</td>";
                                            echo "<td>
                                                <a href='./update.php?username=$db_uts_5035[username]' class='btn btn-primary'>Edit</a>
                                                <a href='./delete.php?username=$db_uts_5035[username]' onclick='return Hapus()' class='btn btn-danger ms-2'>Hapus</a>
                                            </td>";
                                            echo "</tr>";
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>