<?php
// File: index.php
// Presentation Layer: Merajut berkas data dan fungsi

require_once 'products.php';
require_once 'functions.php';

$totalAset = hitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Informasi ATK Kantor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            margin: 30px;
        }
        .container {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #1e3a8a; /* Biru Tua */
            border-bottom: 3px solid #3b82f6; /* Biru Cerah */
            padding-bottom: 10px;
            margin-top: 0;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #bfdbfe;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #1e40af; /* Biru Header */
            color: #ffffff;
        }
        tr:nth-child(even) {
            background-color: #eff6ff; /* Aksen Biru Muda Selang-seling */
        }
        /* Style Penanda Stok Kritis (< 3) dengan aksen peringatan biru keunguan */
        .stok-kritis {
            background-color: #dbeafe !important;
            color: #1e3a8a;
            font-weight: bold;
        }
        .badge-kritis {
            background-color: #ef4444;
            color: white;
            padding: 2px 8px;
            border-radius: 12px;
            font-size: 11px;
            margin-left: 5px;
        }
        tfoot tr {
            background-color: #1e3a8a;
            color: #ffffff;
            font-weight: bold;
        }
        tfoot th {
            background-color: #1d4ed8;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Sistem Informasi ATK Kantor</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk ATK</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $p): ?>
                    <?php 
                        $kelasWarna = isStokKritis($p['stok']) ? 'stok-kritis' : ''; 
                    ?>
                    <tr class="<?= $kelasWarna; ?>">
                        <td><?= $p['id']; ?></td>
                        <td><?= $p['nama']; ?></td>
                        <td><?= $p['kategori']; ?></td>
                        <td>Rp <?= number_format($p['harga'], 0, ',', '.'); ?></td>
                        <td>
                            <?= $p['stok']; ?>
                            <?php if (isStokKritis($p['stok'])): ?>
                                <span class="badge-kritis">Stok Kritis!</span>
                            <?php endif; ?>
                        </td>
                        <td><?= $p['deskripsi']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">Total Nilai Aset Gudang ATK</th>
                    <th colspan="3">Rp <?= number_format($totalAset, 0, ',', '.'); ?></th>
                </tr>
            </tfoot>
        </table>
    </div>

</body>
</html>