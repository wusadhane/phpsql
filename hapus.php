<?php
require_once 'function.php';


$koneksi = new databasenya;

if (!isset($_GET['id'])) {
    echo '<h1>Data tidak ditemukan</h1>';
    die;
}


if ($koneksi->hapus($_GET['id']) === true) {
    header("location: index.php");
}
