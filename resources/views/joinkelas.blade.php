<?php
date_default_timezone_set('Asia/Jakarta');

// Ambil ID dosen dari parameter URL
$id = $_GET['id'] ?? null;

// Data jadwal dosen
$jadwal = [
  'rahmat' => [
    'nama' => 'Dr. Rahmat',
    'hari' => 'Senin & Rabu',
    'mulai' => '09:00',
    'selesai' => '10:40',
    'zoom' => 'https://us05web.zoom.us/j/89776858598?pwd=sJdxEEyFzAEcXRTBKD85QLwUQ4Qtyx.13'
  ],
  'andini' => [
    'nama' => 'Andini, M.Kom',
    'hari' => 'Wednesday',
    'mulai' => '10:00',
    'selesai' => '11:40',
    'zoom' => 'https://zoom.us/j/andini456'
  ],
  'fauzan' => [
    'nama' => 'Ahmad Fauzan',
    'hari' => 'Thursday',
    'mulai' => '13:00',
    'selesai' => '14:40',
    'zoom' => 'https://zoom.us/j/fauzan789'
  ],
  'atih sari' => [
    'nama' => 'Atih Sari',
    'hari' => 'Thursday',
    'mulai' => '13:00',
    'selesai' => '14:40',
    'zoom' => 'https://zoom.us/j/fauzan789'
  ],
  'farhan' => [
    'nama' => 'Farhan Hidayat',
    'hari' => 'Thursday',
    'mulai' => '13:00',
    'selesai' => '14:40',
    'zoom' => 'https://zoom.us/j/fauzan789'
  ],
  'Nurlela' => [
    'nama' => 'Nurlela Hidayat',
    'hari' => 'Thursday',
    'mulai' => '13:00',
    'selesai' => '14:40',
    'zoom' => 'https://zoom.us/j/fauzan789'
  ],
  'danis' => [
    'nama' => 'Muhammad Danis',
    'hari' => 'Thursday',
    'mulai' => '13:00',
    'selesai' => '14:40',
    'zoom' => 'https://zoom.us/j/fauzan789'
  ],
  'yusnia' => [
    'nama' => 'Laily Yusnia',
    'hari' => 'Thursday',
    'mulai' => '13:00',
    'selesai' => '14:40',
    'zoom' => 'https://zoom.us/j/fauzan789'
  ],
  'rizky' => [
    'nama' => 'Rizky Ramadhan',
    'hari' => 'Thursday',
    'mulai' => '13:00',
    'selesai' => '14:40',
    'zoom' => 'https://zoom.us/j/fauzan789'
  ],
];

// Validasi ID
if (!$id || !isset($jadwal[$id])) {
  $pesan = "Dosen tidak ditemukan atau ID tidak valid.";
  $warna = "danger";
} else {
  $data = $jadwal[$id];
  $hari_ini = date('l');
  $waktu = date('H:i');

  if ($hari_ini === $data['hari']) {
    if ($waktu >= $data['mulai'] && $waktu <= $data['selesai']) {
      header("Location: " . $data['zoom']);
      exit;
    } else {
      $pesan = "⏰ Halo! Saat ini bukan jam kelas.<br>Jadwal: <strong>{$data['mulai']} - {$data['selesai']} WIB</strong>.";
      $warna = "warning";
    }
  } else {
    $pesan = "📅 Hai, kelas <strong>{$data['nama']}</strong> hanya tersedia setiap hari <strong>{$data['hari']}</strong>.";
    $warna = "info";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Join Kelas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f9fbff;
    }
    .center-box {
      max-width: 600px;
      margin: 100px auto;
    }
  </style>
</head>
<body>
  <div class="container center-box text-center">
    <div class="alert alert-<?= $warna ?> shadow-sm p-4">
      <?= $pesan ?>
    </div>
    <a href="beranda.php" class="btn btn-outline-primary mt-3">Kembali ke Beranda</a>
  </div>
</body>
</html>
