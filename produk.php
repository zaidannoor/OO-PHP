<?php 
// pengenalan property dan method
// studi kasus toko elektronik


// Overiding yaitu function atau property yang namanya sama dengan parentnya
// cara memanggilnya yaitu
// parent::namafunction


// visibility atau access modifier
// 1. Public bisa dipakai dimana saja
// 2. Protected bisa dipakai di class parent dan turunanya
// 3. private hanya bisa dipakai di class nya saja
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

class televisi extends Produk{
	// penggunaan overiding
	public function getLabel(){
		return parent::getLabel();
	}
}

$produk1 = new produk('Lampu Neon','LG','Lampu',300000);
echo "<pre>";
var_dump($produk1);
echo "</pre>";

echo "<br>";
echo "produk 1 : " . $produk1->getLabel();
echo "<hr>";

$produk2 = new televisi('TV LED' , 'LG' , 'TV' , 500000);
echo "Produk 2 : " . $produk2->getLabel();




 ?>