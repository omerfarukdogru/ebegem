<?php
	class body2Model extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$data["programlar"] = $this->select("programlar","","","ORDER BY id DESC");
			$data["duyurular"] = $this->select("duyurular","","","ORDER BY time DESC LIMIT 5");
			$data["seminerler"] = $this->select("egitimseminerleri","","","ORDER BY id DESC");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>