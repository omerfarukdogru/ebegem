<?php
	class seminerDetay extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function seminerDetay($q){
			$this->load->controller("bas/EBEGEM | Anasayfa");
			$this->load->controller("body1");
			$data = $this->load->model("seminerDetay")->veriler($q);
			$this->load->view("seminerDetay",$data);
			$this->load->controller("son");
		}
	}
?>