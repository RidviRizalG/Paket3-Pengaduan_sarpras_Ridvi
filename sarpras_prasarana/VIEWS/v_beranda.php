<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Pengaduan Sarana Prasarana</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #fce8ec, #f7d4dc);
            color: #4a0e17;
            min-height: 100vh;
        }

        /* =========================
           NAVBAR
        ========================= */
        .navbar {
            background: linear-gradient(135deg, #4a0e17, #3a090f);
            color: white;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        .navbar h2 {
            font-size: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 14px;
        }

        .btn-logout {
            background: #a02030;
            color: white;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            font-size: 14px;
            transition: 0.3s;
        }

        .btn-logout:hover {
            background: #800000;
        }

        /* =========================
           CONTAINER & LAYOUT
        ========================= */
        .container {
            max-width: 1100px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: 1fr 1.8fr;
            gap: 25px;
        }

        @media (max-width: 850px) {
            .grid-layout {
                grid-template-columns: 1fr;
            }
        }

        /* =========================
           CARD COMPONENT
        ========================= */
        .card {
            background: white;
            padding: 25px;
            border-radius: 16px;
            border-top: 6px solid #800000;
            box-shadow: 0 10px 30px rgba(128, 0, 0, 0.1);
        }

        .card h3 {
            color: #5c1320;
            margin-bottom: 20px;
            font-size: 20px;
            border-bottom: 2px solid #fce8ec;
            padding-bottom: 8px;
        }

        /* =========================
           FORM STYLING
        ========================= */
        .form-group {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #6b1d2f;
            font-size: 14px;
        }

        input, select, textarea {
            width: 100%;
            padding: 11px 14px;
            border-radius: 10px;
            border: 1.5px solid #f3cbd3;
            background: #fdf4f5;
            font-size: 14px;
            transition: 0.3s;
            color: #5c1320;
            font-family: inherit;
            box-sizing: border-box;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #800000;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(128, 0, 0, 0.15);
        }

        .btn-submit {
            width: 100%;
            padding: 13px;
            background: linear-gradient(135deg, #800000, #a02030);
            color: white;
            border: none;
            font-weight: bold;
            font-size: 15px;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 8px 20px rgba(128, 0, 0, 0.2);
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, #5e121f, #800000);
            transform: translateY(-2px);
        }

        /* =========================
           TABLE STYLING
        ========================= */
        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        th, td {
            padding: 12px 14px;
            text-align: left;
            border-bottom: 1px solid #f3cbd3;
        }

        th {
            background-color: #fdf4f5;
            color: #6b1d2f;
            font-weight: 700;
        }

        tr:hover {
            background-color: #fff9fa;
        }

        /* Status Badge */
        .badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 12px;
            display: inline-block;
        }

        .badge-menunggu {
            background-color: #ffeeba;
            color: #856404;
        }

        .badge-proses {
            background-color: #b8daff;
            color: #004085;
        }

        .badge-selesai {
            background-color: #c3e6cb;
            color: #155724;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <h2>🏫 Aplikasi Pengaduan Sarpras</h2>
    <div class="user-info">
        <span>Siswa: <strong><?= htmlspecialchars($nama_siswa) ?></strong> (<?= htmlspecialchars($kelas) ?>)</span>
        <a href="../controller/c_logout.php" class="btn-logout">Logout</a>
    </div>
</div>

<div class="container">
    <div class="grid-layout">
        
        <!-- Form Pengaduan / Aspirasi Siswa -->
        <div class="card">
            <h3>Form Pengaduan</h3>
            <form action="../controller/c_aspirasi.php?aksi=tambah" method="POST" autocomplete="off">
                
                <div class="form-group">
                    <label>Kategori Sarpras</label>
                    <select name="id_kategori" required>
                        <option value="">-- Pilih Kategori --</option>
                        <?php foreach($list_kategori as $kat): ?>
                            <option value="<?= $kat['id_kategori'] ?>"><?= htmlspecialchars($kat['ket_kategori']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Lokasi Sarpras</label>
                    <input type="text" name="lokasi" placeholder="Contoh: Ruang XII RPL 1, Lab Komputer" required>
                </div>

                <div class="form-group">
                    <label>Keterangan Pengaduan</label>
                    <textarea name="ket" rows="4" placeholder="Jelaskan detail kerusakan/masalah..." required></textarea>
                </div>

                <button type="submit" class="btn-submit">Kirim Pengaduan</button>
            </form>
        </div>

        <!-- Tabel Histori Pengaduan & Status/Feedback -->
        <div class="card">
            <h3>Histori Pengaduan Anda</h3>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Tgl / Kategori</th>
                            <th>Lokasi & Detail</th>
                            <th>Status</th>
                            <th>Umpan Balik (Feedback)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($list_aspirasi)): ?>
                            <tr>
                                <td colspan="4" style="text-align: center; color: #888; padding: 20px;">
                                    Belum ada pengaduan yang disampaikan.
                                </td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($list_aspirasi as $row): ?>
                                <tr>
                                    <td>
                                        <small style="color: #800000; font-weight: 600;"><?= date('d/m/Y H:i', strtotime($row['tgl_pelaporan'])) ?></small><br>
                                        <strong><?= htmlspecialchars($row['ket_kategori']) ?></strong>
                                    </td>
                                    <td>
                                        <strong><?= htmlspecialchars($row['lokasi']) ?></strong><br>
                                        <span style="color: #666; font-size: 13px;"><?= htmlspecialchars($row['ket']) ?></span>
                                    </td>
                                    <td>
                                        <?php 
                                            $badgeClass = 'badge-menunggu';
                                            if ($row['status'] == 'Proses') $badgeClass = 'badge-proses';
                                            if ($row['status'] == 'Selesai') $badgeClass = 'badge-selesai';
                                        ?>
                                        <span class="badge <?= $badgeClass ?>"><?= htmlspecialchars($row['status']) ?></span>
                                    </td>
                                    <td>
                                        <?= !empty($row['feedback']) ? htmlspecialchars($row['feedback']) : '<em style="color:#aaa;">Belum ada tanggapan</em>' ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

</body>
</html>