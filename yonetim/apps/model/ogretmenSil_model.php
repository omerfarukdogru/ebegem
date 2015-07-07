<?php
	class ogretmenSilModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$id=clk::temizle(@$q[1]);
			if($id){
				$resimIcin = $this->select("ogretmenler","id='$id'");
				foreach($resimIcin as $resim){
					unlink("../images/".$resim["ogretmenResim"]);
				}
				$this->delete("ogretmenler","id='$id'");
				header("Location:".clk::site()."/ogretmenSil");
			}
			$data["ogretmenler"]=$this->select("ogretmenler","","","ORDER BY id DESC");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>