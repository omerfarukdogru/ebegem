<?php
	class son extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function son($q){
			$this->load->view("son");
		}
	}
?>