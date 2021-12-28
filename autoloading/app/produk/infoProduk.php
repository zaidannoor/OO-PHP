<?php 

class InfoProduk{
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

 ?>