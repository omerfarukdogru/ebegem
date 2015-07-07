<?php
	class programEkleModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				clk::formVeriDuzelt();
				$programAdi=@$_POST["programAdi"];
				$programdetay=@$_POST["programdetay"];
				$this->insert("programlar","id,programAdi,programdetay","'','$programAdi','$programdetay'");
				$id=$this->lastInsertId();
				header("Location:".clk::site()."/programDuzenle/".$id);
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>