<?php
	class duyuruDuzenleModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			if(!@$q[1]){
				$data["duyurular"]=$this->select("duyurular","","","ORDER BY id DESC");
			}
			else{
				$id=clk::temizle(@$q[1]);
				$data["duyuruDetay"]=$this->select("duyurular","id='$id'");
				if(count($data["duyuruDetay"])<1){
					header("Location:".clk::site());
				}
				else{
					if($_POST){
						$id=clk::temizle(@$q[1]);
						clk::formVeriDuzelt();
						$duyuruBaslik=rtrim(@$_POST["duyuruBaslik"]," ");
						$duyuruDetay=rtrim(@$_POST["duyuruDetay"]," ");
						$tarih=date("d.m.y");
						$time=time();
						$this->update("duyurular","duyuruBaslik='$duyuruBaslik',duyurudetay='$duyuruDetay',duyuruTarih='$tarih',time='$time'","id='$id'");
						$data["duyuruDetay"]=$this->select("duyurular","id='$id'");
					}
				}
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>