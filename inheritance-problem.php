<?php 	
	// mencakup awal materi oop 
	// property , method ,comstructor

	class produk{
		public $judul = "judul",
				$penulis = "penulis" ,
				$penerbit = "penerbit" ,
				$jmlHalaman = 0,
				$tamat = 0 ,
				$harga = 0;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit" , $harga = 0 , $jmlHalaman = 0 , $tamat = 0 ){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->tamat = $tamat;
		}

		public function getLabel(){
			return "$this->penulis , $this->penerbit";
		}

	};

	class komik extends produk{
		public function cetak(komik $produk){
			$str = "{$produk->judul} , {$produk->getLabel()} , Rp {$produk->harga} - {$produk->jmlHalaman} Halaman.";
			return $str;
		}
	}

	class game extends produk{
		public $tamat;

		public function cetak(game $produk){
			$str = "{$produk->judul} , {$produk->getLabel()} , Rp {$produk->harga} - {$produk->tamat} Jam.";
			return $str;
		}
	}




	// inisialisasi pembuat objek
	$produk1 = new komik("Naruto" , "Masashi Kishimoto" , "Shonen Jump", 30000 , 150);
	var_dump($produk1); 
	echo("<br>");
	echo("Komik : " . $produk1->getLabel());
	echo("<br>");

	$produk2 = new game("Dota 2" , "Gaben" , "Steam", "gratis" , 0 , "unlimited");
	var_dump($produk2);
	echo("<br>");
	echo("Game : " . $produk2->getLabel());
	echo("<br>");
	echo("<br>");
	// object type atau objek sebagai parameter
	
	echo("Info Komik : ") . $produk1->cetak($produk1);
	echo("<br>");
	echo("Info Game : ") . $produk2->cetak($produk2);

	// membuat tulisan
	// komik : "Naruto" , "Masashi Kishimoto" , "Shonen Jump", 30000 , jumlah halaman
	// Game : "Dota 2" , "Gaben" , "Steam", 0 , lama main unlimited
 