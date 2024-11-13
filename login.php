<?php

session_start();

$message = '';
if (isset($_SESSION["message"])) {
    $message = $_SESSION["message"];
    unset($_SESSION["message"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #283048, #859398);
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            background-color: #ffffff;
            color: #333;
        }

        .card h4 {
            color: #283048;
            font-weight: bold;
        }

        .form-label {
            color: #283048;
            font-weight: 500;
        }

        .btn-primary {
            background-color: #283048;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #859398;
        }

        .text-center {
            color: #283048;
        }

        .message {
            color: red;
            font-style: italic;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="card">
        <h4 class="text-center mb-4">Login</h4>
        <form action="./ctrl_login.php" method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
            </div>

            <?php if ($message): ?>
                <p class="message"><?= $message ?></p>
            <?php endif ?>

            <button type="submit" name="submit" class="btn btn-primary w-100 mt-3">Login</button>
        </form>
        <div class="mt-3 text-center">
            <span>Belum punya akun? <a href="register.php" style="color: #283048; font-weight: bold;">Daftar di sini</a></span>
        </div>
    </div>
</body>

</html>
