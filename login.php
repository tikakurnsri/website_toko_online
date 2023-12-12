<?php
session_start();
require "../koneksi.php"

?>


if (isset($_POST['loginbtn'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM users WHERE username = '$username'");
    $countdata = mysqli_num_rows($query);

    if ($countdata > 0) {
        $data = mysqli_fetch_array($query);
        if (password_verify($password, $data['password'])) {
            $_SESSION['username'] = $username;
            // Redirect ke halaman utama atau tampilkan pesan sukses
            echo '<div class="alert alert-success" role="alert">Login berhasil!</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Password salah!</div>';
        }
    } else {
        echo '<div class="alert alert-warning" role="alert">Akun tidak tersedia!</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .main {
            height: 100vh;
            display: flex;
            flex-direction: column; /* Perbaiki typo */
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 400px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .login-box h2 {
            text-align: center;
        }

        .login-input-container {
            text-align: center;
        }

        .login-input {
            width: 80%;
            padding: 10px;
            margin: 10px auto;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }

        .mt-3 {
            width: 500px; /* Perbaiki typo */
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="login-box">
            <h2>Login</h2>
            <form action="" method="post">
                <div class="login-input-container">
                    <label for="username" style="float: left;">Username</label>
                    <input type="text" class="form-control login-input" name="username" id="username" required>
                </div>
                <div class="login-input-container">
                    <label for="password" style="float: left;">Password</label>
                    <input type="password" class="form-control login-input" name="password" id="password" required>
                </div>
                <button class="btn btn-success login-btn" type="submit" name="loginbtn">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
