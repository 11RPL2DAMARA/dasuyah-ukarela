<?php
class sepakbola{
	var $club;
	var $jumlah_pemain;
	var $warna_seragam;
	var $negara;
	public function setclub($club=''){
		$this->club= $club;
	}

	public function setjumlah_pemain($jumlah_pemain=''){
		$this->jumlah_pemain= $jumlah_pemain;
	}

	public function setwarna_seragam($warna_seragam=''){
		$this->warna_seragam= $warna_seragam;
	}

	public function setnegara($negara=''){
		$this->negara= $negara;
	}

	public function cetak(){
		echo'club :'.$this->club;
		echo'<br>';
		echo'jumlah_pemain :'.$this->jumlah_pemain;
		echo'<br>';
		echo'warna_seragam :'.$this->warna_seragam;
		echo'<br>';
		echo'negara :'.$this->negara;
		echo'<br>';
	}
} 

$chelsea =new sepakbola();
$chelsea->setclub('chelsea');
$chelsea->setjumlah_pemain('26');
$chelsea->setwarna_seragam('biru');
$chelsea->setnegara('inggris');
$chelsea->cetak();
