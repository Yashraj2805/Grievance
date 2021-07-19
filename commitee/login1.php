<?php 
session_start();
require 'config.php';
$uname = $_POST['username'];
$pass = $_POST['pass'];


if($uname != null && $pass != null)
{
	$q = mysqli_query($connect,"SELECT * FROM commitee WHERE username = '$uname' AND t_password = '$pass'");
	if ($q) {
	
		$r = mysqli_num_rows($q);
		if($r == 1)
		{	
			$_SESSION['uname'] = $uname;
			$_SESSION['pass'] = $pass;
			header("location:change_pass.php");
		}
		else
		{
			
			$q2 = mysqli_query($connect,"SELECT * FROM commitee WHERE username = '$uname' AND password = '$pass'");
		if($q2)
		{
			$r2 = mysqli_num_rows($q2);
			if($r2 == 1)
			{
				$_SESSION['uname'] = $uname;
				header("location:com_home.php");
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("wrong inputs");
					window.location.href = "/gr/commitee/"
				</script>
				<?php
			}
		}
		else
		{
			
		}
		}
	}
	else
	{
		echo "not2";


	}

}
else
{
	?><script type="text/javascript">
					alert("wrong inputs");
					window.location.href = "/gr/commitee/"
				</script> <?php
}
?>
