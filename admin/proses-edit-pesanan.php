<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$NP=$_POST['NP'];
$NAMA=$_POST['NAMA'];
$SIZE=$_POST['SIZE'];
$ALAMAT=$_POST['ALAMAT'];
$HARGA=$_POST['HARGA'];
$SEPATU=$_POST['SEPATU'];



$simpan=$koneksi->query("insert into pesanan(NP,NAMA,SIZE,ALAMAT,HARGA,SEPATU) 
                        values ('$NP', '$NAMA', '$SIZE', '$ALAMAT' ,'$HARGA' , '$SEPATU')");
                        if($ubah=true){
    header("location:tampil-pesanan.php?pesan=editBerhasil");

} else{
    echo "Error";
}

?>