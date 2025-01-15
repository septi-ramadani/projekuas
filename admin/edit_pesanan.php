<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "navbar.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pesanan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pesanan where NP='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nim">NP</label>
                        <input type="hidden" name="NP" value="<?php echo $row['NP']?>" class="form-control">
                        <input type="number" name="NP" value="<?php echo $row['NP']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="NP" value="<?php echo $row['NP']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="SIZE">SIZE</label>
                        <textarea name="SIZE" class="form-control"><?php echo $row['SIZE']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="ALAMAT">ALAMAT</label>
                        <textarea name="ALAMAT" class="form-control"><?php echo $row['ALAMAT']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="HARGA">HARGA</label>
                        <textarea name="HARGA" class="form-control"><?php echo $row['HARGA']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="SEPATU">SEPATU</label>
                        <textarea name="SEPATU" class="form-control"><?php echo $row['SEPATU']?></textarea>
                    </div>
                   

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>