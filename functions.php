<?php
// File: functions.php
// Processing Layer: Mengolah logika bisnis data

// Fungsi mengkalkulasi total nilai aset gudang
function hitungTotalNilaiStok($daftarProduk) {
    $totalNilai = 0;
    foreach ($daftarProduk as $item) {
        $totalNilai += ($item['harga'] * $item['stok']);
    }
    return $totalNilai;
}

// Fungsi mengecek kondisi stok kritis (< 3)
function isStokKritis($stok) {
    return $stok < 3;
}