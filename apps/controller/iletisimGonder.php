<?php
	class iletisimGonder extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function iletisimGonder($q){
			$this->load->controller("bas/EBEGEM | İletişim");
			$this->load->controller("body1");
			$data = $this->load->model("iletisimGonder")->veriler($q);
			$this->load->view("iletisimGonder",$data);
			$this->load->controller("son");
		}
	}
?>