<?php
	class bas extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function bas($q){
			$data["title"]=@$q[1];
			$this->load->view("bas",$data);
		}
	}
?>