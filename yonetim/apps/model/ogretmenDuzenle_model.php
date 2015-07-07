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