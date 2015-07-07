<?php
	class iletisimGonderModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				clk::formVeriDuzelt();
				var_dump($_POST);
				$adSoyad = @$_POST["adSoyad"];
				$email = @$_POST["email"];
				$mesaj = @$_POST["mesaj"];
				$data["hata"]=0;
				if(!$adSoyad or !$email or !$mesaj){
					$data["hata"]=1;
				}
				else{
					$this->insert("iletisim","id,adSoyad,email,mesaj","'','$adSoyad','$email','$mesaj'");
				}
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>