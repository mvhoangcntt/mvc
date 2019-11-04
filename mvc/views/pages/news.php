<?php 
echo $data["Number"];
echo $data["SoThich"][1];
$a = $data["SoThich"];
foreach ($a as $value) {
	echo "<br/>";
	echo $value;
}
echo "<hr/>";

while ($row = mysqli_fetch_array($data["SV"])) {
	echo "<br/>";
	echo $row["hoten"];
}

 ?>