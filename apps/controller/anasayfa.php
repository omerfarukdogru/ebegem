<?php
	class anasayfa extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function anasayfa($q){
			$this->load->controller("bas/EBEGEM | Anasayfa");
			$this->load->controller("body1");
			$this->load->controller("body2");
			$this->load->controller("son");
		}
	}
?>