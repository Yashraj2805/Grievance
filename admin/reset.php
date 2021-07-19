<?php require 'nav.php'; ?><?php 
$id1=$_GET['id'];
require 'config.php';
$pass="";

function generateRandomString($length = 10) {
    $characters = '0123456789@!#$%()*&abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$tpass =  generateRandomString();
$q = mysqli_query($connect,"UPDATE student SET t_password = '$tpass', password= '$pass' WHERE er_no = '$id1'") or die(mysqli_error($connect));
if ($q) {

	?>
	<input type="hidden" id="enroll" value="<?php echo $id1; ?>" >
	<input type="hidden" id="tpass" name="" value="<?php echo $tpass?>">
	<script type="text/javascript">
		var id = document.getElementById('enroll').value;
		var pass = document.getElementById('tpass').value;
		alert("id is "+id+" password is "+pass);
		window.location.href = "/gr/admin/view_student.php";
	</script>
	<?php
}

 ?>
