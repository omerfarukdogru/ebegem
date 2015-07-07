<?php
	class kurslarModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler(){
			$data=array();
			$data["kurslar"]=$this->select("programlar","aktif='1'","","ORDER BY id DESC");
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>