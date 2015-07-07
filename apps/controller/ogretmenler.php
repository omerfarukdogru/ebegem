<?php
	class ogretmenler extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function ogretmenler($q){
			$this->load->controller("bas/EBEGEM | Öğretmenler");
			$this->load->controller("body1");
			$data = $this->load->model("ogretmenler")->veriler($q);
			$this->load->view("ogretmenler",$data);
			$this->load->controller("son");
		}
	}
?>