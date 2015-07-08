<?php
	class tumOnKayitlarModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$data["tumOnKayitlar"] = $this->select("onKayit");
			$sayac=0;
			foreach($data["tumOnKayitlar"] as $on){
				$ogrenciid=$on["id"];
				$aldigidersleridler=$this->select("onkayitdigerbilgiler","onkayitid='$ogrenciid'");
				$programlar=array();
				foreach($aldigidersleridler as $aldigi){
					$dersid=$aldigi["programid"];
					$ders=$this->select("programlar","id='$dersid'");
					array_push($programlar,$ders[0]["programAdi"]);
				}
				$data["tumOnKayitlar"][$sayac]["programlar"]=$programlar;
				$sayac++;
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>