<?php
	class onKayitListeYazdirModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$id=clk::temizle(@$q[1]);
			if($id){
				$dersiAlanlarId=$this->select("onkayitdigerbilgiler","programid='$id'");
				$data["dersiAlanlar"]=array();
				foreach($dersiAlanlarId as $alan){
					$alanid=$alan["onkayitid"];
					$eklenecek=$this->select("onkayit","id='$alanid'","ad,soyad");
					array_push($data["dersiAlanlar"],$eklenecek);
				}
				$data["dersAdi"]=$this->select("programlar","id='$id'");
			}
			else{
				header("Location:".clk::site());
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>