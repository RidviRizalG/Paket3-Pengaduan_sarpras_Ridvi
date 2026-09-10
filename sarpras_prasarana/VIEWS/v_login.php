<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pengaduan Sarana Prasarana</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #fce8ec, #f7d4dc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: white;
            padding: 35px;
            border-radius: 18px;
            width: 380px;
            box-shadow: 0 20px 50px rgba(128, 0, 0, 0.15);
            border-top: 6px solid #800000;
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(15px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #5c1320;
            font-size: 26px;
        }

        .input-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #6b1d2f;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1.5px solid #f3cbd3;
            background: #fdf4f5;
            font-size: 15px;
            transition: 0.3s;
            color: #5c1320;
        }

        input:focus {
            outline: none;
            border-color: #800000;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(128, 0, 0, 0.15);
        }

        .login-btn {
            width: 100%;
            padding: 14px;
            margin-top: 10px;
            background: linear-gradient(135deg, #800000, #a02030);
            color: white;
            border: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 10px 25px rgba(128, 0, 0, 0.3);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #5e121f, #800000);
        }

        .text-center {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
            color: #6b1d2f;
        }

        .text-center a {
            color: #800000;
            text-decoration: none;
            font-weight: 600;
        }

        .text-center a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

<div class="login-container">
    <h2>Login Pengaduan Sarana Prasarana</h2>

    <form action="../controller/c_login.php" method="POST">

        <div class="input-group">
            <label>NIS</label>
            <input type="number" name="login" placeholder="Masukkan NIS" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan password" required>
        </div>

        <button type="submit" class="login-btn">Login</button>

    </form>

    <div class="text-center">
        <p>Belum punya akun? <a href="v_registrasi.php">Daftar</a></p>
    </div>
</div>

</body>
</html>