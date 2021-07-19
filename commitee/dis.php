<?php 
error_reporting(0);
require_once 'nav.php';
require 'config.php';

?>
<head>
	
	<style type="text/css">
		#container {
			padding: 20px;
			background-color: gray;
			width: 100%;
			line-height: 1.5;	

		}

		
	</style>
</head>
<body onload="myFunction()">
<script type="text/javascript">
	function myFunction() {
    var element = document.getElementById("view");
    element.classList.add("active");
}
</script><?php
$uname = $_SESSION['uname'];
$cid = $_GET['id'];
$q = mysqli_query($connect,"SELECT * from complaints WHERE c_id = '$cid'");
$row=mysqli_fetch_array($q);
?><div id="container"><div ><b>Date: <?php echo $row['date1'];?></b></div><div id="name"></div><div><b>complaint id : </b><?php echo $row['c_id'];?></div>
<div><b>Complait titile: </b><?php
echo $row['title']; ?> </div>
<div><b>Discription: </b><?php
echo nl2br($row['discription']); ?> </div> </div>
<div id="right"></div>

<div>
status: <?php echo $row['status']; ?> <br>


</div>
<?php



$readres= $row['readres'];
if (strpos($readres,$uname)=== false) {
	$readres = $readres.$uname;
	$q1 = mysqli_query($connect,"UPDATE complaints SET readres = '$readres' WHERE c_id = '$cid'");
}
	$a= "head";
$q11 = mysqli_query($connect,"select * from commitee where username='$uname' and commitee = '$a'");
if ($q11) {
	$r = mysqli_num_rows($q11);
	if ($r==1) {
?><div>
	select status:
<form action="status.php" method="post">
	<select name="status">
		<option>under process</option>
		<option>no reply yet</option>
		<option>completed</option>
	</select>
	<input type="hidden" name="cid" value="<?php echo $cid;?>">
	<input type="submit" name="st" value="set">
</form>	
</div><?php
		$enroll = $row['enrollment'];
		$qq=mysqli_query($connect,"SELECT * FROM student WHERE er_no = '$enroll'");
		$r= mysqli_fetch_array($qq);
		$fname=$r['fname'];
		$lname = $r['lname'];
		
		?>
		<input type="hidden" id="en" value="<?php echo $enroll; ?>">
		<input type="hidden" id="fname" value="<?php echo $fname; ?>">
		<input type="hidden" id="lname" value="<?php echo $lname; ?>">
		<script type="text/javascript">
			var e=document.getElementById('en').value;
			var x=document.getElementById('fname').value;
			var y = document.getElementById('lname').value;
			document.getElementById('name').innerHTML="<b>Enrollment no:</b> "+e+"<br><b>Name:</b> "+x+" "+y;
		</script>
		<?php
		
			include 'cheadreply.php';
		}
		else
		{
			echo mysqli_error($connect);
			include 'creply.php';
		}
	
}


 ?>
</body>