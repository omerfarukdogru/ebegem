<?php
	class seminerKayitModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($id){
			$data=array();
			$id = clk::temizle($id);
			$seminerBilgi = $this->select("egitimseminerleri","id='$id'");
			if(count($seminerBilgi)<1){
				header("Location:".clk::site());
			}
			if(clk::temizle($id) and $_POST){
				$adSoyad = clk::formVeriDuzelt(@$_POST["adSoyad"]);
				$this->insert("egitimseminerkayit","id,adsoyad,seminerid","'','$adSoyad','$id'");
				$data["kaydedilen"]=$adSoyad;
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>