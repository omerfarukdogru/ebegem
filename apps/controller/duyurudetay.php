<?php
	class duyurudetay extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function duyurudetay($q){
			$this->load->controller("bas/EBEGEM | Duyuru Detayları");
			$this->load->controller("body1");
			$a = $this->load->model("duyuruDetay");
			$data=$a->veriler($q);
			$this->load->view("duyuruDetay",$data);
			$this->load->controller("son");
		}
	}
?>