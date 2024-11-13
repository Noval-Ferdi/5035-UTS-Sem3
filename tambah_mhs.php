<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="data.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <!-- Sidebar -->
            <div class="col-2 sidebar">
                <h4>DASHBOARD DOSEN</h4>
                <a href="dashboard.php" class="btn btn-primary"><i class="fa-solid fa-house me-2"></i> Dashboard</a>
                <a href="tambah_mhs.php" class="btn btn-primary"><i class="fa-solid fa-user me-2"></i> Tambah Mahasiswa</a>
                <a href="dosen_data.php" class="btn btn-primary"><i class="fa-solid fa-book-open me-2"></i> Rekapitulasi Nilai</a>
                <a href="logout.php" class="btn btn-danger"><i class="fa-solid fa-power-off me-2"></i> Log Out</a>
            </div>

            <!-- Content -->
            <div class="col-10">
                <div class="content mt-2">
                    <div class="card">
                        <div class="card-header text-dark">
                            <h5><i class="fa-solid fa-user"></i> Tambah Mahasiswa <a href="dashboard.php" class="float-end text-dark"><i class="fa-solid fa-house"></i></a></h5>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-4">Tambah Mahasiswa</h4>
                            <form action="./ctrl_tambah_data.php" method="POST">
                                <div>
                                    <label for="username" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" class="form-control mb-3" id="username" name="username" placeholder="Masukkan Nama" required>

                                    <label for="diskusi" class="form-label">Diskusi (14%)</label>
                                    <input type="number" class="form-control mb-3" id="diskusi" name="diskusi" placeholder="Masukkan Nilai Diskusi" required>

                                    <label for="praktikum" class="form-label">Praktikum (26%)</label>
                                    <input type="number" class="form-control mb-3" id="praktikum" name="praktikum" placeholder="Masukkan Nilai Praktikum" required>

                                    <label for="responsi" class="form-label">Responsi (15%)</label>
                                    <input type="number" class="form-control mb-3" id="responsi" name="responsi" placeholder="Masukkan Nilai Responsi" required>

                                    <label for="uts" class="form-label">UTS (20%)</label>
                                    <input type="number" class="form-control mb-3" id="uts" name="uts" placeholder="Masukkan Nilai UTS" required>

                                    <label for="uas" class="form-label">UAS (25%)</label>
                                    <input type="number" class="form-control mb-4" id="uas" name="uas" placeholder="Masukkan Nilai UAS" required>

                                    <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
