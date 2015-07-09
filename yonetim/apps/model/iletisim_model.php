<?php
	class iletisimModel extends model{
		public function __construct(){
			parent::__construct();
		}
		public function veriler($q){
			$data=array();
			$islem=@$q[1];
			if(!$islem){
				$data["yeniGelenler"]=$this->select("iletisim","okunma='0'");
				$data["eskiGelenler"]=$this->select("iletisim","okunma='1'");
			}
			else if($islem==="oku"){
				$okunacak=clk::temizle(@$q[2]);
				if(!$okunacak){
					header("Location:".clk::site()."/iletisim");
				}
				$data["okunan"]=$this->select("iletisim","id='$okunacak'");
				$this->update("iletisim","okunma='1'","id='$okunacak'");
			}
			else if($islem==="sil"){
				$silinecek=clk::temizle(@$q[2]);
				if(!$silinecek){
					header("Location:".clk::site()."/iletisim");
				}
				$this->delete("iletisim","id='$silinecek'");
				header("Location:".clk::site()."/iletisim");
			}
			else{
				$data["yeniGelenler"]=$this->select("iletisim","okunma='0'");
				$data["eskiGelenler"]=$this->select("iletisim","okunma='1'");
			}
			return $data;
		}
		public function __destruct(){
			$db=null;
		}
	}
?>