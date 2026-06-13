<?php

namespace Database\Seeders;

use App\Models\ToThePointPackage;
use Illuminate\Database\Seeder;

class ToThePointPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Bersihkan data lama terlebih dahulu agar tidak duplikat saat dijalankan ulang
        ToThePointPackage::truncate();

        $packages = [
            [
                'category' => 'edukasi',
                'badge_label' => 'Edukasi — SMK/SMA',
                'title' => 'Pendampingan Proyek Website SMK/SMA',
                'price' => 'Mulai Rp100.000',
                'description' => 'Bimbingan pembuatan web tugas sekolah kurikulum PPLG/RPL. Hasil rapi, terstruktur, dan siap dipresentasikan di kelas.',
                'sort_order' => 1,
            ],
            [
                'category' => 'edukasi',
                'badge_label' => 'Akademik — Mahasiswa',
                'title' => 'Pendampingan Proyek Website Mahasiswa',
                'price' => 'Mulai Rp200.000',
                'description' => 'Solusi project semester, Tugas Akhir, atau skripsi pakai framework modern (Laravel/Vue). Code bersih dan mudah dipahami untuk sidang.',
                'sort_order' => 2,
            ],
            [
                'category' => 'event',
                'badge_label' => 'Event — Undangan',
                'title' => 'Undangan Digital Spesial',
                'price' => 'Mulai Rp99.000',
                'description' => 'Website undangan ultah, nikah, wisuda, atau khitanan. Lengkap dengan RSVP, rute Maps, countdown, dan galeri foto.',
                'sort_order' => 3,
            ],
            [
                'category' => 'fnb',
                'badge_label' => 'F&B — Kafe & Resto',
                'title' => 'Menu Digital QR Code (Kafe & Resto)',
                'price' => 'Mulai Rp300.000',
                'description' => 'Ubah menu fisik jadi buku menu digital via scan QR. Bebas ganti harga dan update konten kapan saja tanpa cetak ulang.',
                'sort_order' => 4,
            ],
            [
                'category' => 'retail',
                'badge_label' => 'Retail — UMKM',
                'title' => 'Katalog Digital Produk UMKM',
                'price' => 'Mulai Rp350.000',
                'description' => 'Etalase produk online praktis untuk perluas pasar lokal. Desain menarik dan langsung terintegrasi ke WhatsApp admin.',
                'sort_order' => 5,
            ],
            [
                'category' => 'event',
                'badge_label' => 'Event — Reservasi',
                'title' => 'Website Event & Reservasi',
                'price' => 'Mulai Rp500.000',
                'description' => 'Sistem pendaftaran acara atau booking fasilitas online. Rekap data otomatis dan anti-bentrok jadwal.',
                'sort_order' => 6,
            ],
            [
                'category' => 'services',
                'badge_label' => 'Services — Konten',
                'title' => 'Website Portal Berita / Blog Siap Pakai',
                'price' => 'Mulai Rp500.000',
                'description' => 'Web berita atau blog personal yang super ringan dan SEO-friendly. Tampilan responsif dan siap didaftarkan Google AdSense.',
                'sort_order' => 7,
            ],
            [
                'category' => 'properti',
                'badge_label' => 'Properti — Travel',
                'title' => 'Katalog Rental Kendaraan & Travel',
                'price' => 'Mulai Rp249.000',
                'description' => 'Katalog online armada rental mobil/motor atau travel. Informasi harga transparan dan order langsung via WhatsApp.',
                'sort_order' => 8,
            ],
            [
                'category' => 'properti',
                'badge_label' => 'Properti — Kos',
                'title' => 'Landing Page Properti, Kos & Kontrakan',
                'price' => 'Mulai Rp249.000',
                'description' => 'Landing page informasi kos atau properti. Tampilkan fasilitas, galeri foto, dan lokasi tanpa perlu survei langsung.',
                'sort_order' => 9,
            ],
            [
                'category' => 'properti',
                'badge_label' => 'Profesional — Portofolio',
                'title' => 'Website Profil Portofolio Profesional',
                'price' => 'Mulai Rp249.000',
                'description' => 'Website personal branding minimalis untuk pajang hasil karya, CV online, testimoni, dan penawaran jasa profesional.',
                'sort_order' => 10,
            ],
            [
                'category' => 'services',
                'badge_label' => 'Services — Revamp',
                'title' => 'Revamp / Perbaikan Website',
                'price' => 'Mulai Rp200.000',
                'description' => 'Perbaikan website error, lambat, atau ganti tampilan jadi lebih modern tanpa harus bikin ulang dari nol.',
                'sort_order' => 11,
            ],
            [
                'category' => 'services',
                'badge_label' => 'Services — Bulanan',
                'title' => 'Jasa Update / Admin Website Bulanan',
                'price' => 'Rp150.000 / bulan',
                'description' => 'Layanan terima beres kelola website. Bantu upload konten, optimasi keamanan, dan backup rutin tiap bulan.',
                'sort_order' => 12,
            ],
            [
                'category' => 'retail',
                'badge_label' => 'Kreator — Link Bio',
                'title' => 'Link in Bio Premium',
                'price' => 'Mulai Rp149.000',
                'description' => 'Alternatif Linktree dengan domain dan branding Anda sendiri. Tampilan kekinian, cocok untuk kreator lokal, seniman, dan UMKM.',
                'sort_order' => 13,
            ],
            [
                'category' => 'services',
                'badge_label' => 'Kesehatan — Klinik',
                'title' => 'Website Klinik / Apotek Kecil',
                'price' => 'Mulai Rp1.000.000',
                'description' => 'Tampil profesional dengan integrasi rute Google Maps, jadwal praktik dokter, daftar layanan medis, dan tombol reservasi WhatsApp.',
                'sort_order' => 14,
            ],
            [
                'category' => 'fnb',
                'badge_label' => 'F&B — Katering',
                'title' => 'Website Katering Online',
                'price' => 'Mulai Rp500.000',
                'description' => 'Tampilkan menu katering dengan foto menggugah selera. Fitur pemesanan online langsung ke WhatsApp untuk kemudahan pelanggan.',
                'sort_order' => 15,
            ],
            [
                'category' => 'event',
                'badge_label' => 'Event — Organizer',
                'title' => 'Website Wedding Organizer / EO',
                'price' => 'Mulai Rp500.000',
                'description' => 'Website portofolio khusus vendor EO & WO. Menampilkan katalog paket acara, galeri dokumentasi elegan, dan form inquiry pesanan.',
                'sort_order' => 16,
            ],
        ];

        foreach ($packages as $package) {
            ToThePointPackage::create(array_merge($package, [
                'is_active' => true, // Default semua paket langsung aktif online
            ]));
        }
    }
}
