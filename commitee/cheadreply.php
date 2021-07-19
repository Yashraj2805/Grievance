<?php 
$q2= mysqli_query($connect,"select * from complaintreply WHERE complaintid='$cid'") or die (mysqli_error($connect));
 ?>
<div>
	<table>
		<thead>
			<tr>
				<th>commitee</th>
				<th>reply</th>
				<th>date</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=mysqli_fetch_array($q2)) {
				?><tr><td><?php echo $row['complaintid']; ?></td>
				<td><?php echo $row['reply']; ?></td>
				<td><?php echo $row['date1']; ?></td>
				</tr><?php
			} ?>
		</tbody>
	</table>
</div>
<div>
	<form action="" method="post">
		<textarea name="reply"></textarea><br>
		<input type="hidden" name="uname" value="<?php echo $uname; ?>">
		<input type="hidden" name="cid" value="<?php echo $cid; ?>">
		<input type="submit" name="submit" value="submit">
	</form>
</div>
<div>
	<form action="" method="post">
	<input type="date" name="date1">
	<input type="hidden" name="cid" value="<?php echo $cid; ?>">
	<input type="submit" name="su" value="enter">	
	</form>
</div>
<?php 
if (isset($_POST['submit'])) {
	$reply= $_POST['reply'];
	$uname=$_POST['uname'];
	$cid=$_POST['cid'];
	$date1 = date("d/m/Y");
	$q=mysqli_query($connect,"INSERT INTO complaintreply (complaintid,commitee,reply,date1) VALUES ('$cid','$uname','$reply','$date1')");
	if ($q) {
		header("location:dis.php?id=$cid");
	}
	else
		echo mysqli_error($connect);
}

if (isset($_POST['su'])) {
	$da=$_POST['date1'];
	$cid=$_POST['cid'];
	echo $da;
	$rr= mysqli_query($connect,"UPDATE complaints SET rdate='$da' WHERE c_id='$cid'");
	if ($rr) {
		header("location:dis.php?id=$cid");
	}
	else
		echo mysqli_error($connect);
}
 ?>