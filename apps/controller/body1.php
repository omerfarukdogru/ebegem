<?php
	class body1 extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function body1($q){
			$this->load->view("body1");
		}
	}
?>