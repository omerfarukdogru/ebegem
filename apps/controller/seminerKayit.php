<?php
	class seminerKayit extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function seminerKayit($q){
			$this->load->controller("bas/EBEGEM | Seminer Kayıt");
			$this->load->controller("body1");
			$data = $this->load->model("seminerKayit")->veriler($q[1]);
			$this->load->view($q[0],$data);
			$this->load->controller("son");
		}
	}
?>