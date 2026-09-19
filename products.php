<?php
// File: products.php
// Data Layer: Menyimpan daftar produk ATK Kantor

$products = [
    [
        'id'        => 201,
        'nama'      => 'Kertas HVS A4 80gsm (1 Rim)',
        'kategori'  => 'Kertas',
        'harga'     => 55000,
        'stok'      => 12,
        'deskripsi' => 'Kertas HVS putih berkualitas untuk cetak dokumen kantor.'
    ],
    [
        'id'        => 202,
        'nama'      => 'Pulpen Gel Hitam 0.5mm (Pack 12 pcs)',
        'kategori'  => 'Alat Tulis',
        'harga'     => 36000,
        'stok'      => 2, // Stok < 3 (Kritis)
        'deskripsi' => 'Pulpen gel tinta lancar dan cepat kering.'
    ],
    [
        'id'        => 203,
        'nama'      => 'Ordner Bindex Folio 75mm',
        'kategori'  => 'Arsip & Map',
        'harga'     => 28000,
        'stok'      => 8,
        'deskripsi' => 'Map kuitansi dan arsip besar bahan karton tebal.'
    ],
    [
        'id'        => 204,
        'nama'      => 'Stapler Heavy Duty + Isi Refill',
        'kategori'  => 'Peralatan Meja',
        'harga'     => 45000,
        'stok'      => 1, // Stok < 3 (Kritis)
        'deskripsi' => 'Stapler sedang hemat tenaga untuk dokumen tebal.'
    ],
    [
        'id'        => 205,
        'nama'      => 'Sticky Notes Warna 3x3 Inci',
        'kategori'  => 'Catatan',
        'harga'     => 15000,
        'stok'      => 15,
        'deskripsi' => 'Kertas catatan tempel warna-warni perekat kuat.'
    ]
];