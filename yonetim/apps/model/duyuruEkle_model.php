<?php
	class duyuruEkleModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				clk::formVeriDuzelt();
				$duyuruBaslik=rtrim(@$_POST["duyuruBaslik"]," ");
				$duyuruDetay=rtrim(@$_POST["duyuruDetay"]," ");
				$tarih=date("d.m.y");
				$time=time();
				$this->insert("duyurular","id,duyuruBaslik,duyurudetay,duyuruTarih,time","'','$duyuruBaslik','$duyuruDetay','$tarih','$time'");
				header("Location:".clk::site()."/duyuruDuzenle/".$this->lastInsertId());
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>