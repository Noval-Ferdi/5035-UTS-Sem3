<?php

include "./config.php";

$username = @$_GET["username"];
$query = mysqli_query($sambung, "SELECT * from user where username='$username'");

$username = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background: linear-gradient(135deg, #283048, #859398);
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background-color: #f5f5f5;
            padding: 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            color: #333;
        }

        .card h2 {
            color: #333;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .btn-primary {
            background-color: #3a4d65;
            border: none;
            width: 100%;
            font-weight: bold;
            margin-top: 1rem;
        }

        .btn-primary:hover {
            background-color: #506985;
        }

        .btn-danger {
            width: 100%;
            font-weight: bold;
            margin-top: 0.5rem;
            background-color: #e74c3c;
            border: none;
        }

        .btn-danger:hover {
            background-color: #d43f3a;
        }

        .btn:focus {
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="card">
        <form action="./ctrl_update.php" method="POST">
            <h2>Edit Nilai Mahasiswa</h2>
            <div class="mb-3">
                <label for="username" class="form-label">Mahasiswa</label>
                <input type="text" id="username" name="username" class="form-control"
                    value="<?php echo $username['username']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="diskusi" class="form-label">Diskusi (14%)</label>
                <input type="number" id="diskusi" name="diskusi" class="form-control"
                    value="<?php echo $username['diskusi']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="praktikum" class="form-label">Praktikum (26%)</label>
                <input type="number" id="praktikum" name="praktikum" class="form-control"
                    value="<?php echo $username['praktikum']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="responsi" class="form-label">Responsi (15%)</label>
                <input type="number" id="responsi" name="responsi" class="form-control"
                    value="<?php echo $username['responsi']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="uts" class="form-label">UTS (20%)</label>
                <input type="number" id="uts" name="uts" class="form-control" value="<?php echo $username['uts']; ?>"
                    required>
            </div>
            <div class="mb-3">
                <label for="uas" class="form-label">UAS (25%)</label>
                <input type="number" id="uas" name="uas" class="form-control" value="<?php echo $username['uas']; ?>"
                    required>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
            <a href="dosen_data.php" class="btn btn-danger mt-3">Kembali</a>
        </form>
    </div>
</body>

</html>