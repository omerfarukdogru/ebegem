<?php
	class iletisim extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function iletisim($q){
			$this->load->controller("bas/EBEGEM | İletişim");
			$this->load->controller("body1");
			$this->load->view("iletisim");
			$this->load->controller("son");
		}
	}
?>