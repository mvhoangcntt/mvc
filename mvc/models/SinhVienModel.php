<?php 
class SinhVienModel extends db{
	public function GetSV(){
		return "Nguyen Van A";
	}
	public function Tong($a,$b){
		return $a + $b;
	}
	public function SinhVien(){
		$sql = "SELECT * FROM sinhvien";
		return mysqli_query($this->con, $sql);
	}
}
 ?>