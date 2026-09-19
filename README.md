# 🛒 Product Information System

Sistem Informasi Inventaris Produk berbasis web sederhana yang dibangun menggunakan **PHP Native** tanpa *framework*. Proyek ini menerapkan konsep pemisahan komponen (*Separation of Concerns*) dan pengelolaan data produk ATK.

## Fitur Utama

- **Pemisahan Logika & Tampilan**: Memisahkan komponen data (`products.php`), logika bisnis (`functions.php`), dan tampilan (`index.php`).
- **Dashboard Inventaris**: Menampilkan tabel produk ATK beserta kalkulasi total nilai inventaris secara otomatis.
- **Indikator Stok Kritis**: Penandaan warna khusus (*badge*) untuk produk yang memiliki stok menipis (< 3).
- **Antarmuka Modern**: Desain responsif berbasis CSS dengan tema warna biru.

## Struktur Proyek

```text
MINI-PROJECT/
├── README.md         # Dokumentasi proyek
├── functions.php     # Logika bisnis & fungsi bantuan
├── index.php         # Halaman utama tampilan inventaris
└── products.php      # Penyimpanan data produk ATK
