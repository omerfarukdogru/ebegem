<?php
	class programSilModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$id=clk::temizle(@$q[1]);
			if($id){
				$this->delete("programlar","id='$id'");
			}
			$data["programlar"]=$this->select("programlar","","","ORDER BY id DESC");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>