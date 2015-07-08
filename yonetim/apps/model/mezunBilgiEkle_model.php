<?php
	class mezunBilgiEkleModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				clk::formVeriDuzelt();
				$adSoyad = @$_POST["adSoyad"];
				$calistigiYer = @$_POST["calistigiYer"];
				$this->insert("mezunbilgi","id,adSoyad,calistigiYer","'','$adSoyad','$calistigiYer'");
				$data["eklendi"]=true;
				$data["eklenen"]=$adSoyad;
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>