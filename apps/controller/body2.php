<?php
	class body2 extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function body2($q){
			$datas = $this->load->model("body2");
			$data = $datas->veriler($q);
			$this->load->view("body2",$data);
		}
	}
?>