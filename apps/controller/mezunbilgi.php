<?php
	class mezunbilgi extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function mezunbilgi($q){
			$this->load->controller("bas/EBEGEM | Mezun Bilgileri");
			$this->load->controller("body1");
			$data = $this->load->model("mezunbilgi")->veriler($q);
			$this->load->view("mezunbilgi",$data);
			$this->load->controller("son");
		}
	}
?>