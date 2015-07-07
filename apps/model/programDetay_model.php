<?php
	class programDetayModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$id=clk::temizle($q[1]);
			if($id){
				$data["detaylar"]=$this->select("programlar","id='$id' and aktif='1'");
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