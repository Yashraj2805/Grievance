<?php require 'nav.php'; ?><?php 
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
$id = $_GET['id'];
echo $id;
?>  <table><thead>
	<tr>
		<th>enrollment</th>
		<th>password</th>
	</tr>
</thead><?php
if ($id=="ALL") {
	$q1 = mysqli_query($connect,"select * from student") or die(mysqli_error($connect));
	while ($row =mysqli_fetch_array($q1)) {
		$id= $row['er_no'];
		$tpass =  generateRandomString();
$q = mysqli_query($connect,"UPDATE student SET t_password = '$tpass', password= '$pass' WHERE er_no = '$id'") or die(mysqli_error($connect));
	}

	$q3=mysqli_query($connect,"select * from student");
	while ($row1=mysqli_fetch_array($q3)) {
		?><tr>
			<td><?php echo $row1['er_no']; ?></td>
			<td><?php echo $row1['t_password']; ?></td>
		</tr><?php
	}
?><?php
}
?>
</table>