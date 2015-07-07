<?php
	class kayitModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$data["programlar"]=$this->select("programlar","aktif='1'","","ORDER BY id DESC");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>