<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

#staff {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 60%;
    margin-left: 20%;
    margin-top: 10px;
}

#staff td, #staff th {
    border: 1px solid #ddd;
    padding: 8px;
}

#staff tr:nth-child(even){background-color: #f2f2f2;}

#staff tr:hover {background-color: #ddd;}

#staff th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<?php require 'banner.php'; ?>
<ul>
	<li><a href="index.php">HOME</a></li>
	<li><a href="student">STUDENT PORTAL</a></li>
	<li><a href="commitee">COMMITEE PORTAL</a></li>
	<li><a href="commitee_m.php">COMMITEE</a></li>
	<li><a href="contact.php">CONTACT Us</a></li>
</ul>

<div>
	<table id="staff">
		<thead>
			<tr>
				<th>sr.no</th>
				<th>Name of Member</th>
				<th>Portfolio</th>
				<th>Affiliation</th>
			</tr>
		</thead>
		<tbody>
			<?php $i="1"; require 'admin/config.php'; 
$q=mysqli_query($connect,"SELECT * FROM commitee where commitee='head'");
while ($row=mysqli_fetch_array($q)) {
	?>
	<tr style="background-color: #f2f2f2;">
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $row['fname']." ".$row['lname'];  ?></td>
		<td><?php echo $row['commitee']; ?></td>
		<td><?php  echo $row['designation']; ?></td>
	</tr>
	<?php } ?>
	<tr> <?php
		$q=mysqli_query($connect,"SELECT * FROM commitee where commitee!='head'");
while ($row=mysqli_fetch_array($q)) {
	?>
	<tr>
		<td><?php echo $i; $i++; ?></td>
		<td><?php echo $row['fname']." ".$row['lname'];  ?></td>
		<td><?php echo $row['commitee']; ?></td>
		<td><?php  echo $row['designation']; ?></td>
	</tr>
	<?php } ?>
	</tr>
		</tbody>
	</table>
</div>