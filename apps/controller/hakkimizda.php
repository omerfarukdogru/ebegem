<?php
	class hakkimizda extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function hakkimizda($q){
			$this->load->controller("bas/EBEGEM | Hakkımızda");
			$this->load->controller("body1");
			$data = $this->load->model("hakkimizda")->veriler($q);
			$this->load->view("hakkimizda",$data);
			$this->load->controller("son");
		}
	}
?>