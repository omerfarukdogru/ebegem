<?php
	class www extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function www($q){
			$this->load->controller("bas");
			$this->load->controller("body1");
		}
	}
?>