<?php 
session_start();
require 'config.php';
$un=$_GET['id'];


 ?>
<input type="hidden" id="na" value="<?php echo $un; ?>">
 <script type="text/javascript">
 	var x= document.getElementById('na').value;
 	var r= confirm("do you want to delete user "+x);
		if (r==true) {
			window.location.href="cd1.php?id="+x;
		}
		else
		{
			window.location.href="view_commitee.php";
		}

 </script>