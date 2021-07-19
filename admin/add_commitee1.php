<?php require 'nav.php'; ?><?php
require 'config.php';
function generateRandomString($length = 10) {
    $characters = '0123456789@!#$%()*&abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$uname = $_POST['uname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$designation = $_POST['designation'];
$commitee = $_POST['commitee'];
$pass = generateRandomString();
$commitee1="head";
if ($commitee==$commitee1) {

$q33 = mysqli_query($connect,"SELECT * FROM commitee where commitee = '$commitee1'");
$rrr=mysqli_num_rows($q33);
if ($rrr==0) {

$q = mysqli_query($connect,"SELECT * FROM commitee where username = '$uname'");
$r = mysqli_num_rows($q);
if($r)
{
?>
<script type="text/javascript">
	alert("try another username");
	window.location.href = "add_commitee.php";
</script>
<?php
 }
 else
 {
 	$q1= mysqli_query($connect,"INSERT INTO commitee (username,fname,lname,designation,commitee,t_password) VALUES ('$uname','$fname','$lname','$designation','$commitee','$pass')");
 	if($q1)
 	{
 		?><div style="background-color: rgba(1,1,1,0.4); padding:20px; margin: 5%;">
 			Username : <?php echo $uname; ?><br>
 			Temp password : <?php echo $pass;?><br>
 		</div><?php
 	}

 }
}
else
{
	?>
    <script type="text/javascript">
        alert("head is already present");
        window.location.href="add_commitee.php";
    </script><?php
}
}
else
{
	$q = mysqli_query($connect,"SELECT * FROM commitee where username = '$uname'");
$r = mysqli_num_rows($q);
if($r)
{
?>
<script type="text/javascript">
	alert("try another username");
	window.location.href = "add_commitee.php";
</script>
<?php
 }
 else
 {
 	$q1= mysqli_query($connect,"INSERT INTO commitee (username,fname,lname,designation,commitee,t_password) VALUES ('$uname','$fname','$lname','$designation','$commitee','$pass')");
 	if($q1)
 	{
 		?><div style="background-color: rgba(1,1,1,0.4); padding:20px; margin: 5%;">
 			Username : <?php echo $uname; ?><br>
 			Temp password : <?php echo $pass;?><br>
 		</div><?php
 	}

 }
}
?>