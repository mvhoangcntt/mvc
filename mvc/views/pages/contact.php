<?php 
echo "Contact";

 ?>
 <form action="http://localhost/english/home/Show/1/2/<?php if(isset($_POST['m'])){echo $_POST['m'];} ?>" method="POST" enctype="multipart/form-data">
 	<input type="hidden" name="m" value="4">
 	<input type="submit" name="ad" value="abc">	
 </form>
 