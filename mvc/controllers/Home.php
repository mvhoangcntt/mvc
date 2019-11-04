<?php 
class Home extends Controller{
	function SayHi(){
		$teo = $this->model("SinhVienModel");
		echo $teo->GetSV();
	}
	function Show($x,$y){
		$teo = $this->model("SinhVienModel");
		$tong = $teo->Tong($x,$y);
		$this->view("aodep", [
			"Page"=>"contact",
			"Number"=>$tong,
			"Mau"=>"coler",
			"SoThich"=>["A","B","C"],
			"SV"=> $teo->SinhVien()
		]);
	}
}
 ?>