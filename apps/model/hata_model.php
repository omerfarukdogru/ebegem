<?php
	class hataModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function modelSec(){
			$data=array();
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
	
?>