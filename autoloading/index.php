<?php 

require_once 'app/init.php';

$produk1 = new lampu('Lampu Neon','LG','Lampu',300000);
$produk2 = new Televisi('TV LED' , 'LG' , 'TV' , 500000);

//var_dump($produk1->getLabel()) ;
$info = new InfoProduk();
$info->tambah($produk1);
$info->tambah($produk2);

echo $info->cetak();
echo $produk2->getLabel();
echo("<hr>");
new tes();

 ?>