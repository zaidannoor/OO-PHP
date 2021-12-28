<?php 
	
	// keyword static
	// yaitu dapat mengakses hal yang bersifat static tanpa insiasi objek
	// cara pemanggilannya namaclass::properti/method yang ingin diakses
	// contoh statis::$angka
	// tujuannya yaitu membuat kode seolah olah prosedural
	// visibility tetap memengaruhi hak akses dari class

	// konstanta 
	class statis{
		protected static $angka = 1;

		public static function halo(){
			// cara pengaksesan self::properti
			// contoh self::$angka
			return "Halo mas " . self::$angka++ . " kali<br>";
		}

		public static function hello(){
			return "Hello World";
		}
	}

// echo statis::$angka;
// echo "<br>";
echo statis::halo();
echo statis::halo();
echo statis::halo();
echo "<hr>";
//echo statis::hello();

// konstanta
// dapat menggunakan define atau const
// isinya tidak dapat diubah
// define harus diletakkan diluar class atau diletakkan secara global
// const bisa diletakkan didalam class

define('NAMA', 'zaidan noor irfan');
const NAMA2 = 'zaidan noor';
echo NAMA;
echo "<br>";
echo NAMA2;