<?php 

class Lampu extends Produk implements label{
	// penggunaan overiding
	public function getLabel(){
		return $this->getProduk();
	}
}

 ?>