<?php
session_start();
if (empty($_SESSION['user_id'])) {
    header("location:login.php");
}
include "header.php";
?>

<div class="container">
    <h2>Daftar Produk</h2>
    <table id="produkTable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>
                    <a href="tambah-produk.php" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-plus"></i></a>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../koneksi.php";
            $result = $koneksi->query("SELECT * FROM produk");
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['nama']); ?></td>
                    <td>Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <img src="../image/<?php echo htmlspecialchars($row['gambar']); ?>" width="100" alt="<?php echo htmlspecialchars($row['nama']); ?>">
                    </td>
                    <td>
                        <a href="edit-produk.php?id=<?php echo $row['id']; ?>">
                            <button class="btn btn-xs btn-warning glyphicon glyphicon-edit"></button>
                        </a>
                        <a href="hapus-produk.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">
                            <button class="btn btn-xs btn-danger glyphicon glyphicon-trash"></button>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#produkTable').DataTable();
    });
</script>
<?php include "footer.php"; ?>


