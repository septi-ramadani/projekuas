<?php
include "navbar.php";
include "koneksi.php";
?>
   <!-- carousel start -->
   <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="image/carousel1.png" alt="Slide 1">
            </div>

            <div class="item">
                <img src="image/carousel2.png" alt="Slide 2">
            </div>

            <div class="item">
                <img src="image/carousel3.png" alt="Slide 3">
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- carousel end -->

<!-- pelayanan -->
<div class="container">
    <h2 class="text-center">Pelayanan dari Kami</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="service-box">
                <h3>Konsultasi Produk</h3>
                <p>Memberikan saran tentang pilihan HP berdasarkan kebutuhan pelanggan (misalnya, kamera terbaik, performa gaming, atau baterai tahan lama).</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-box">
                <h3>Pembelian Langsung dan Online</h3>
                <p>Menyediakan opsi pembelian baik secara langsung di toko fisik maupun melalui platform online untuk kenyamanan pelanggan.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-box">
                <h3>Layanan Garansi</h3>
                <p>Memberikan garansi resmi untuk produk yang dijual serta bantuan dalam klaim garansi atau perbaikan jika terjadi kerusakan.</p>
            </div>
        </div>
    </div>
</div>
<!-- pelayanan end -->
<?php include "koneksi.php"; ?>

<?php
$result = $koneksi->query("SELECT * FROM produk ORDER BY RAND() LIMIT 3");
?>

<div class="container">
    <div class="row">
        <?php while($row = $result->fetch_assoc()): ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
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
  
<!-- testimoni -->
<div class="container-fluid testimonial-section">
    <div class="container">
        <h2 class="text-center mb-5">Apa Kata Pelanggan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/hp oppo.jpg" alt="Customer 1">
                    </div>
                    <div class="testimonial-content">
                        <p>"Pelayanan di sini sangat memuaskan! Stafnya ramah dan membantu menjelaskan spesifikasi HP yang saya inginkan."</p>
                        <h5>Rudi Handoko</h5>
                        <span>Pengusaha</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/hp vivo.jpg" alt="Customer 2">
                    </div>
                    <div class="testimonial-content">
                        <p>"Saya sangat senang dengan proses pembelian yang cepat dan pengiriman yang tepat waktu. HP sampai dengan aman dan sesuai harapan."</p>
                        <h5>Dewi Asia</h5>
                        <span>Dokter</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="image/hp poco.jpg" alt="Customer 3">
                    </div>
                    <div class="testimonial-content">
                        <p>"Toko ini punya layanan purna jual yang luar biasa. Saya bisa klaim garansi dengan mudah ketika HP saya bermasalah."</p>
                        <h5>Wahyu Sugianto</h5>
                        <span>Wiraswasta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimoni end -->


<?php include "footer.php"; ?>
