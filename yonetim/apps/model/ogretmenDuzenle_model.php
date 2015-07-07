<?php
	class ogretmenDuzenleModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$data["q"]=$q;
			$id = clk::temizle(@$q[1]);
			if($id){
				if($_POST){
					clk::formVeriDuzelt();
					$ogretmenAdi=@$_POST["ogretmenAdi"];
					$ogretmenBilgileri=@$_POST["ogretmenBilgileri"];
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
						$resimIsim=false;
					}
					if($resimIsim){
						$this->update("ogretmenler","ogretmenAdi='$ogretmenAdi',ogretmenBilgileri='$ogretmenBilgileri',ogretmenResim='$resimIsim'","id='$id'");
						copy($resim["tmp_name"],"../images/".$resimIsim);
					}
					else{
						$this->update("ogretmenler","ogretmenAdi='$ogretmenAdi',ogretmenBilgileri='$ogretmenBilgileri'","id='$id'");
					}
				}
				$data["ogretmenDetay"] = $this->select("ogretmenler","id='$id'");
			}
			$data["ogretmenler"] = $this->select("ogretmenler");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>