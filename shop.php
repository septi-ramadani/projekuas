<?php 
include "navbar.php";
include "koneksi.php";

// Tentukan jumlah produk per halaman
$products_per_page = 16;

// Dapatkan halaman saat ini dari parameter URL, default ke halaman 1
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Hitung offset
$offset = ($current_page - 1) * $products_per_page;

// Query untuk mendapatkan total produk
$total_products_result = $koneksi->query("SELECT COUNT(*) as total FROM produk");
$total_products = $total_products_result->fetch_assoc()['total'];

// Hitung total halaman
$total_pages = ceil($total_products / $products_per_page);

// Query untuk mendapatkan produk dengan pagination
$sql = "SELECT * FROM produk ORDER BY created_at DESC LIMIT $products_per_page OFFSET $offset";
$result = $koneksi->query($sql);
?>
<?php

$result = $koneksi->query("SELECT * FROM produk");
?>
 <!-- card start  -->
 <div class="container">
    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
            <div class="col-xs-12 col-sm-6 col-md-4" >
                <div class="card">
                    <img src="image/<?php echo $row['gambar']; ?>" alt="<?php echo $row['nama']; ?>">
                    <div class="title"><?php echo $row['nama']; ?></div>
                    <div class="rating">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <div class="reviews">1500 reviews</div>
                    <div class="price">Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?></div>
                    <div class="buttons">
                        <button class="btn">Buy Now</button>
                        <button class="btn">Add to Cart</button>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
    <!-- card end  -->

   <!-- pagination start -->
   <div class="container text-center">
    <nav aria-label="Page navigation">
        <ul class="pagination pagination-centered">
            <?php if ($current_page > 1): ?>
                <li>
                    <a href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="<?php echo ($i == $current_page) ? 'active' : ''; ?>">
                    <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($current_page < $total_pages): ?>
                <li>
                    <a href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<!-- pagination end -->
<?php include "footer.php"; ?>