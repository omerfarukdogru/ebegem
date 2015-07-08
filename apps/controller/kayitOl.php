<?php
	class kayitOl extends controller{
		public function __construct($q){
			parent::__construct();
			$this->$q[0]($q);
		}
		public function kayitOl($q){
			$a=$this->load->model($q[0]);/* model dosyalarımızı include ettik */
			$data=$a->veriler($q);/*Verimizi aldık */
			$this->load->controller("bas/EBEGEM | Kayıt Tamamlandı");
			$this->load->controller("body1");
			$this->load->view("kayitOl");
			$this->load->controller("son");
		}
	}
?>