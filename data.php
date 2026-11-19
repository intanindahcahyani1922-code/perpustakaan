<?php
require_once 'koneksi.php';

$hasil = mysqli_query($koneksi, "SELECT * FROM anggota ORDER BY id DESC");

if (!$hasil) {
    die("Query gagal dijalankan: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
</head>
<body>
    <h1>Data Anggota</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>No Anggota</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Jenis Anggota</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php if (mysqli_num_rows($hasil) > 0): ?>
                <?php $no = 1; ?>
                <?php while ($row = mysqli_fetch_assoc($hasil)): ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= htmlspecialchars($row['no_anggota'] ?? ''); ?></td>
                        <td><?= htmlspecialchars($row['nama_lengkap'] ?? ''); ?></td>
                        <td><?= htmlspecialchars($row['email'] ?? ''); ?></td>
                        <td><?= htmlspecialchars($row['no_hp'] ?? ''); ?></td>
                        <td><?= htmlspecialchars($row['jenis_anggota'] ?? ''); ?></td>
                        <td><?= htmlspecialchars($row['alamat'] ?? ''); ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Belum ada data anggota.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>