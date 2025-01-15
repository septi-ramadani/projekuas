<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Pesanan</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>NO</th><th>NAMA</th><th> MERK</th><th>ALAMAT</th><th>HARGA</th>
                <th>
                <a href="input-pesanan.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
        $sql=$koneksi->query("select * from pesanan order by NP ASC");
        while($row= $sql->fetch_assoc()){
        ?>

            <tr>
                <td><?php echo $row['NP']?></td>
                <td><?php echo $row['NAMA']?></td>
                <td><?php echo $row['SIZE']?></td>
                <td><?php echo $row['ALAMAT']?></td>
                <td><?php echo $row['HARGA']?></td>
                <td><?php echo $row['SEPATU']?></td>
                <td>
                <a href="edit-pesanan.php?id=<?php echo $row['NAMA']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-pesanan.php?id=<?php echo $row['NP']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>
                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>