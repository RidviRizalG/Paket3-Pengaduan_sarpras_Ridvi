<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Siswa - Pengaduan Sarana Prasarana</title>

    <style>
        /* =========================
           BACKGROUND
        ========================= */
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #fce8ec, #f7d4dc);
        }

        /* =========================
           NAVBAR
        ========================= */
        .navbar {
            background: linear-gradient(135deg, #4a0e17, #3a090f);
            padding: 14px 20px;
            color: white;
            font-weight: bold;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* =========================
           CONTAINER
        ========================= */
        .main-container {
            display: flex;
            justify-content: center;
            padding: 40px 20px;
        }

        /* =========================
           CARD FORM
        ========================= */
        .form-container {
            width: 100%;
            max-width: 650px;
            background: white;
            padding: 35px;
            border-radius: 18px;
            border-top: 6px solid #800000;
            box-shadow: 0 20px 50px rgba(128, 0, 0, 0.15);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(15px);}
            to {opacity: 1; transform: translateY(0);}
        }

        /* =========================
           TITLE
        ========================= */
        h3 {
            text-align: center;
            color: #5c1320;
            font-size: 26px;
            margin-bottom: 25px;
        }

        h3::after {
            content: "Pengaduan Sarana & Prasarana Sekolah";
            display: block;
            font-size: 13px;
            color: #800000;
            margin-top: 5px;
            font-weight: normal;
        }

        /* =========================
           FORM GROUP
        ========================= */
        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #6b1d2f;
            font-size: 14px;
        }

        /* INPUT */
        input, select {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1.5px solid #f3cbd3;
            background: #fdf4f5;
            font-size: 15px;
            transition: 0.3s;
            color: #5c1320;
            box-sizing: border-box;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #800000;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(128, 0, 0, 0.15);
        }

        /* =========================
           BUTTON
        ========================= */
        .button-submit {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            background: linear-gradient(135deg, #800000, #a02030);
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 10px 25px rgba(128, 0, 0, 0.3);
        }

        .button-submit:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, #5e121f, #800000);
        }

        /* =========================
           LINK LOGIN (WARNA MAROON)
        ========================= */
        .text-center {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #6b1d2f;
        }

        .text-center a, 
        .text-center a:visited, 
        .text-center a:active {
            color: #800000 !important; /* Memaksa warna menjadi Maroon */
            text-decoration: none;
            font-weight: 700;
        }

        .text-center a:hover {
            color: #5e121f !important;
            text-decoration: underline;
        }

        /* =========================
           RESPONSIVE
        ========================= */
        @media (max-width: 700px) {
            .form-container {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="navbar">
    🏫 Registrasi Siswa - Pengaduan Sarpras
</div>

<div class="main-container">
    <div class="form-container">
        
        <h3>Registrasi Akun Siswa</h3>

        <form action="../CONTROLLERS/c_registrasi.php?aksi=daftar" method="post" autocomplete="off">

            <div class="form-group">
                <label>NIS (Nomor Induk Siswa)</label>
                <input type="number" name="nis" placeholder="Masukkan NIS" required autocomplete="off">
            </div>

            <div class="form-group">
                <label>Nama Lengkap Siswa</label>
                <input type="text" name="nama_siswa" placeholder="Masukkan nama lengkap" required autocomplete="off">
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" placeholder="Contoh: XII RPL 1" required autocomplete="off">
            </div>

            <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" placeholder="Contoh: Rekayasa Perangkat Lunak" required autocomplete="off">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" required>
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Buat password akun" required autocomplete="new-password">
            </div>

            <button type="submit" class="button-submit">
                Daftar Akun Siswa
            </button>

            <div class="text-center">
                <p>Sudah punya akun? <a href="v_login.php">Login di sini</a></p>
            </div>

        </form>
    </div>
</div>

</body>
</html>
