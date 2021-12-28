<?php 

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
	
	public function getProduk(){
		return "$this->nama, 
				$this->produsen, 
				$this->jenis, 
				$this->harga";
	}

}

 ?>