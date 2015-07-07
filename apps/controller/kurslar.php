<?php
	class kurslar extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function kurslar($q){
			$this->load->controller("bas/EBEGEM | Kurslarımız");
			$this->load->controller("body1");
			$data = $this->load->model("kurslar")->veriler();
			$this->load->view("kurslar",$data);
			$this->load->controller("son");
		}
	}
?>