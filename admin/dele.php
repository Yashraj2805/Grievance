<?php require 'nav.php'; ?><?php 
$id1=$_GET['id'];
require 'config.php';

?>
<input type="hidden" id="en" value="<?php echo $id1;?>">
<script type="text/javascript">
	
		var id= document.getElementById('en').value;
		var r= confirm("do you want to delete enrollment number"+id);
		if (r==true) {
			window.location.href="dele1.php?id="+id;
		}
		else
		{
			window.location.href="view_student.php";
		}

	</script>