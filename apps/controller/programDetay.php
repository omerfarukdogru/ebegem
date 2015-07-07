<?php
	class programDetay extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function programDetay($q){
			$this->load->controller("bas/EBEGEM | Program Detayları");
			$this->load->controller("body1");
			$a = $this->load->model("programDetay");
			$data=$a->veriler($q);
			$this->load->view("programDetay",$data);
			$this->load->controller("son");
		}
	}
?>