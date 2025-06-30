<?php
$dosen = $_GET['dosen'] ?? null;
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SISCourse - Tugas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .card-icon {
      font-size: 2rem;
      color: #0d6efd;
    }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">SISCourse</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarMain">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="/mycourse">My Course</a></li>
        <li class="nav-item"><a class="nav-link active" href="tugas.php">Tugas</a></li>
      </ul>
    </div>
  </div>
</nav>

<main class="container py-5">
  <h2 class="fw-bold text-center mb-4">📚 Daftar Tugas</h2>

  <div class="row row-cols-1 row-cols-md-2 g-4">
    <!-- Tugas Dosen 1 -->
    <?php if ($dosen === null || $dosen === 'rahmat'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Dr. Rahmat</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Analisis risiko jaringan komputer</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>04/02/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Analisis risiko jaringan komputer">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Konfigurasi firewall dengan iptables</td>
              <td><span class="badge bg-primary">Dalam Progres</span></td>
              <td>04/10/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Konfigurasi firewall dengan iptables">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Presentasi keamanan IoT</td>
              <td><span class="badge bg-success">Selesai</span></td>
              <td>04/24/2025</td>
              <td>Susun ulang materi</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Presentasi keamanan IoT">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>
<!-- Tugas Dosen 2 -->
<?php if ($dosen === null || $dosen === 'andini'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Bu Andini</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Analisis UX aplikasi e-commerce</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>04/05/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Analisis UX aplikasi e-commerce">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Prototyping aplikasi mobile</td>
              <td><span class="badge bg-primary">Dalam Progres</span></td>
              <td>04/12/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Prototyping aplikasi mobile">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Studi kasus data science</td>
              <td><span class="badge bg-success">Selesai</span></td>
              <td>04/20/2025</td>
              <td>Perlu tambahan visualisasi</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Studi kasus data science">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- Tugas Dosen 3 -->
<?php if ($dosen === null || $dosen === 'fauzan'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Pak Fauzan</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Topologi jaringan LAN</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>04/03/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Topologi jaringan LAN">
                  <input type="hidden" name="nama_dosen" value="Fauzan">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Simulasi routing dengan Cisco Packet Tracer</td>
              <td><span class="badge bg-success">Selesai</span></td>
              <td>04/18/2025</td>
              <td>Sudah direvisi</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Simulasi routing dengan Cisco Packet Tracer">
                  <input type="hidden" name="nama_dosen" value="Fauzan">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!--- Dosen 4 --->
<?php if ($dosen === null || $dosen === 'atih sari'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Bu Atih Sari</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">ERD dan relasi database</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>04/06/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="ERD dan relasi database">
                  <input type="hidden" name="nama_dosen" value="Asih Sari">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Implementasi database IoT sederhana</td>
              <td><span class="badge bg-primary">Dalam Progres</span></td>
              <td>04/12/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Implementasi database IoT sederhana">
                  <input type="hidden" name="nama_dosen" value="Asih Sari">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<!---- dosen 5 --->
<?php if ($dosen === null || $dosen === 'farhan'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Pak Farhan</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Perancangan sistem inventaris</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>04/05/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Perancangan sistem inventaris">
                  <input type="hidden" name="nama_dosen" value="Farhan">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Pengujian dan debugging sistem</td>
              <td><span class="badge bg-primary">Dalam Progres</span></td>
              <td>04/18/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Pengujian dan debugging sistem">
                  <input type="hidden" name="nama_dosen" value="Farhan">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!---- dosen 6 --->
<?php if ($dosen === null || $dosen === 'nurlela'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Bu Nurlela</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Implementasi Cloud Storage dengan Firebase</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>05/01/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Implementasi Cloud Storage dengan Firebase">
                  <input type="hidden" name="nama_dosen" value="Nurlela">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>

            <tr>
              <td class="text-start">Penerapan Load Balancer di Layanan Cloud</td>
              <td><span class="badge bg-primary">Dalam Progres</span></td>
              <td>05/14/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Penerapan Load Balancer di Layanan Cloud">
                  <input type="hidden" name="nama_dosen" value="Nurlela">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<!---- dosen 7 --->
<?php if ($dosen === null || $dosen === 'danis'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Muhammad Danis</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Analisis Algoritma Pencarian</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>06/05/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Analisis Algoritma Pencarian">
                  <input type="hidden" name="nama_dosen" value="Danis">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
            <tr>
              <td class="text-start">Struktur Data Stack dan Queue</td>
              <td><span class="badge bg-primary">Dalam Progres</span></td>
              <td>06/12/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Struktur Data Stack dan Queue">
                  <input type="hidden" name="nama_dosen" value="Danis">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

<!-- dosen 8 --->
 <?php if ($dosen === null || $dosen === 'yusnia'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Laily Yusnia</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Studi Kasus Etika Profesi</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>06/20/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Studi Kasus Etika Profesi">
                  <input type="hidden" name="nama_dosen" value="Yusnia">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
            <tr>
              <td class="text-start">Kode Etik dan UU ITE</td>
              <td><span class="badge bg-primary">Dalam Progres</span></td>
              <td>06/27/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Kode Etik dan UU ITE">
                  <input type="hidden" name="nama_dosen" value="Yusnia">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>


<!--- dosen 9 --->
<?php if ($dosen === null || $dosen === 'rizky'): ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive mt-4">
        <h5 class="fw-bold mb-3 text-center">📋 Tugas dari Rizky Ramadhan</h5>
        <table class="table table-bordered align-middle">
          <thead class="table-light text-center">
            <tr>
              <th>Tugas</th>
              <th>Status</th>
              <th>Batas Waktu</th>
              <th>Catatan</th>
              <th>Upload</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td class="text-start">Membuat Web CRUD dengan PHP</td>
              <td><span class="badge bg-warning text-dark">Menunggu</span></td>
              <td>07/03/2025</td>
              <td>-</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Membuat Web CRUD dengan PHP">
                  <input type="hidden" name="nama_dosen" value="Rizky">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
            <tr>
              <td class="text-start">Responsive Mobile App dengan Bootstrap</td>
              <td><span class="badge bg-success">Selesai</span></td>
              <td>07/10/2025</td>
              <td>Tambahkan validasi</td>
              <td>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file_tugas" class="form-control form-control-sm mb-1" required>
                  <input type="hidden" name="nama_tugas" value="Responsive Mobile App dengan Bootstrap">
                  <input type="hidden" name="nama_dosen" value="Rizky">
                  <button type="submit" class="btn btn-sm btn-outline-primary w-100">Upload</button>
                </form>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

  </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>