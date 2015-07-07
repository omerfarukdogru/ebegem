<?php
	class duyuruSilModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if(@$q[1]){
				$id=clk::temizle($q[1]);
				$this->delete("duyurular","id='$id'");
			}
			$data["duyurular"]=$this->select("duyurular","","","ORDER BY time DESC");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>