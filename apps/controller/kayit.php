<?php
	class kayit extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function kayit($q){
			$this->load->controller("bas/EBEGEM | Ön Kayıt");
			$this->load->controller("body1");
			$a=$this->load->model($q[0]);
			$data=$a->veriler($q);
			$this->load->view($q[0],$data);
			$this->load->controller("son");
		}
	}
?>