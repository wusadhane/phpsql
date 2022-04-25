<?php
require_once 'function.php';
$koneksi = new databasenya;
$datas = $koneksi->tambilData();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tugas PHP pake database</title>
    <link href="style.css" rel="stylesheet" type="text/style">

<body>

    <table border="1px">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Opsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $data['Nm_barang']; ?></td>
                <td><?= $data['stok']; ?></td>
                <td><?= number_format($data['harga_beli']); ?></td>
                <td><?= number_format($data['harga_jual']); ?></td>
                <td>
                    <a href="ubah.php?id=<?= $data['Id_barang']; ?>">Edit</a>
                    <a href="hapus.php?id=<?= $data['Id_barang']; ?>" onclick="alert('Apakah Yakin Untuk Dihapus?')">Hapus</a>
                </td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    <div class="tambah">
        <a href="tambah.php">Tambah Data</a>
    </div>

</body>

</html>