<?php 

// menggunakan require
// require_once 'produk/infoProduk.php';
// require_once 'produk/label.php';
// require_once 'produk/produk.php';
// require_once 'produk/lampu.php';
// require_once 'produk/televisi.php';

// menggunakan autoload
spl_autoload_register(function($class){
	require_once 'produk/' . $class . '.php';
});
