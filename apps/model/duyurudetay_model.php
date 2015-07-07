<?php
	class duyurudetayModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$id=$q["1"];
			if(!($id<=0)){
				$id=clk::temizle($id);
				$data["detaylar"]=$this->select("duyurular","id='$id'");
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