<?php 
	
	// Kelas abstak yaitu kelas yang tidak bisa di instansiasi
	// kelas abstrak harus mempunnyai setidaknya 1 method abstrak
	class Produk {
	protected 	$nama,
			$produsen,
			$jenis,
			$harga;

	public function __construct($nama,$produsen,$jenis,$harga){
		$this->nama = $nama;
		$this->produsen = $produsen;
		$this->jenis = $jenis;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->nama, 
				$this->produsen, 
				$this->jenis, 
				$this->harga";
	}

}

class Televisi extends Produk{
	// penggunaan overiding
	public function getLabel(){
		return parent::getLabel();
	}

}

class Lampu extends Produk{
	// penggunaan overiding
	public function getLabel(){
		return parent::getLabel();
	}
}

class getInfoProduk{
	public $daftarProduk = [];

	public function tambah(produk $produk){
		$this->daftarProduk[] = $produk;
	}

	public function cetak(){
		$str = "Daftar Produk : <br>";

		foreach ($this->daftarProduk as $p) {
			//$str =$str . "- {$p->getLabel()} <br>"; cara lain
			$str .="- " . $p->getLabel() . " <br>";
		}

		return $str;
	}
}

$produk1 = new lampu('Lampu Neon','LG','Lampu',300000);
$produk2 = new Televisi('TV LED' , 'LG' , 'TV' , 500000);
//var_dump($produk1->getLabel()) ;
$info = new getInfoProduk();
$info->tambah($produk1);
$info->tambah($produk2);

echo $info->cetak();

