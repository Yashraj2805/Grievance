<?php require 'nav.php'; 
require 'config.php';
$q=mysqli_query($connect,"SELECT * FROM commitee");

?>
<!DOCTYPE html>
<html>
<head>
	<title>view commitee</title>
	<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
#ta{
	padding: 20px;
}
thead{
	background-color: #e8c9c9;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<?php 
$r=mysqli_num_rows($q);
if ($r!=0) {
	?>
	<div id="ta">
	<table>
		<thead>
			<tr>
				
				<th>username</th>
				<th>name</th>
				<th>designation</th>
				<th>position</th>
				<th>action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=mysqli_fetch_array($q)) {
				?>
				<tr>
					<td><?php echo $row['username'] ?></td>
					<td><?php echo $row['fname']." ".$row['lname']; ?></td>
					<td><?php echo $row['designation']; ?></td>
					<td><?php echo $row['commitee']; ?></td>
					<td><a href="cd.php?id=<?php echo $row['username']; ?>">delete</a></td>
				</tr>
				<?php
			} ?>
		</tbody>
	</table>
</div>
	<?php
}
 ?>
</body>
</html>