<?php
class mobil{
 		public $tipe;
 		public $merk;
 		public $harga;
 		//KONSTRAKTOR
 		public function __construct($a,$b,$c)
 		{
			$this->tipe = $a;
			$this->merk = $b;
			$this->harga = $c;
 		}
}
?>