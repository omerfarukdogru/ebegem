<?php
	class programDuzenleModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$id=clk::temizle(@$q[1]);
			if($id){
				if($_POST){
					$programAdi=@$_POST["programAdi"];
					$programdetay=@$_POST["programdetay"];
					$this->update("programlar","programAdi='$programAdi',programdetay='$programdetay'","id='$id'");
				}
				$data["programDetay"]=$this->select("programlar","id='$id'");
			}
			else{
				$data["programDetay"]=array();
				$data["programlar"]=$this->select("programlar","","","ORDER BY id DESC");
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>