<?php
	class cikis extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function cikis($q){
			@$_SESSION["giris"]=false;
			header("Location:".clk::site());
		}
	}
?>