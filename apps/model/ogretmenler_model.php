<?php
	class ogretmenlerModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$data["ogretmenler"] = $this->select("ogretmenler");
			$data["programlar"] = $this->select("programlar","","","ORDER BY id DESC");
			$data["duyurular"] = $this->select("duyurular","","","ORDER BY id DESC LIMIT 5");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>