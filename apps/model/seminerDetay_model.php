<?php
	class seminerDetayModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$id = clk::temizle(@$q[1]);
			if($id){
				$data["seminerBilgi"]=$this->select("egitimseminerleri","id='$id'");
				$data["seminerResimler"] = $this->select("egitimseminerresimler","seminerid='$id'");
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