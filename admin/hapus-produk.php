<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:../login.php");
}

include "../koneksi.php";

// Dapatkan ID produk dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Hapus produk berdasarkan ID
$query = "DELETE FROM produk WHERE id = $id";
if ($koneksi->query($query) === TRUE) {
    header("location:tampil-produk.php?pesan=hapusBerhasil");
} else {
    echo "Error: " . $query . "<br>" . $koneksi->error;
}
?>