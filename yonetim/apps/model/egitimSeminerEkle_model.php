<?php
	class egitimSeminerEkleModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				clk::formVeriDuzelt();
				$seminerAdi=@$_POST["seminerAdi"];
				$detay=@$_POST["detay"];
				$resim = $_FILES["resim"];
				$rand=rand(100000,999999);
				if($resim["type"]=="image/jpeg"){
					$resimIsim=$rand.".jpeg";
				}
				else if($resim["type"]=="image/jpg"){
					$resimIsim=$rand.".jpg";
				}
				else if($resim["type"]=="image/png"){
					$resimIsim=$rand.".png";
				}
				else{
					$resimIsim="yok.png";
				}
				if($resimIsim!="yok.png"){
					copy($resim["tmp_name"],"../images/".$resimIsim);
				}
				$this->insert("egitimseminerleri","id,seminerAdi,detay,resim","'','$seminerAdi','$detay','$resimIsim'");
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>