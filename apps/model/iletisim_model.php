<?php
	class iletisimModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if($_POST){
				clk::formVeriDuzelt();
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>