<?php 	
	// mencakup awal materi oop 
	// property , method ,comstructor

	class produk{
		public $nama = "nama",
				$jenis = "jenis" ,
				$harga = 0;

		public function __construct($nama = "nama", $jenis = "jenis", $harga = 0 ){
			$this->nama = $nama;
			$this->jenis = $jenis;
			$this->harga = $harga;
		}

		public function getLabel(){
			return "$this->nama , $this->jenis, $this->harga";
		}

	};

	// mencetak info produk
	class cetakInfoProduk{
		public function cetak(produk $produk){
			$str = "{$produk->getLabel()}";
			return $str;
		}
	}



	// inisialisasi pembuat objek
	$lampu = new produk("Lampu Neon" , "Lampu" , 100000);
	var_dump($lampu); 
	echo("<br>");
	echo("lampu : " . $lampu->getLabel());
	echo("<br>");

	$televisi = new produk("TV LED" , "Televisi" , 1000000 );
	var_dump($televisi);
	echo("<br>");
	echo("televisi : " . $televisi->getLabel());
	echo("<br>");
	echo("<br>");
	// object type
	$infoProduk = new cetakInfoProduk();
	echo("Info Produk : ") . $infoProduk->cetak($televisi);
	echo("<br>");
	echo("Info Produk : ") . $infoProduk->cetak($lampu);

 