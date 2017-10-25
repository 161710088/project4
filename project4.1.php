<?php
require_once "project4.php";

$ikin = new mobil ('avansa','toyota','rp.200.0000.0000');
	echo "==============================".'<br>';
 	echo "Tipe ".$ikin->tipe.'<br>';
 	echo "Merk ".$ikin->merk.'<br>';
 	echo "Harga ".$ikin->harga.'<br>';
	echo "==============================".'<br>';
$ikin = new mobil ('pajero spot','toyota','rp.400.0000.0000');
 	echo "Tipe ".$ikin->tipe.'<br>';
 	echo "Merk ".$ikin->merk.'<br>';
 	echo "Harga ".$ikin->harga.'<br>';
	echo "==============================".'<br>';
$ikin = new mobil ('kijang','toyota','rp.150.0000.0000');
 	echo "Tipe ".$ikin->tipe.'<br>';
 	echo "Merk ".$ikin->merk.'<br>';
 	echo "Harga ".$ikin->harga.'<br>';
	echo "==============================".'<br>';
?>