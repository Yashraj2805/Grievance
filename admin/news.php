<?php 
require 'nav.php';
require 'config.php';
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>news</title>
 	<style type="text/css">
 		
 		#dis{
 			padding:20px;
 			width: 900px;
 			background-color: rgba(1,0,0,0.2);
 			margin-left: 16%;
 		}
 		#input
 		{
 			padding:20px;
 			background-color: rgba(1,255,0,0.2);
 			width: 900px;
 			margin-left:16%;
 		}
 		input[type=text]{
 			width: 800px;
 			height: 40px;
 		}
 		textarea{
 			width: 800px;
 			height:100px;
 		}
 	</style>
 </head>
 <body>
 <div id="input">
 	<form action="newsadd.php" method="post">
 		Title:   <br>   <input type="text" name="title"><br><br>
 		Discrpition:<br> <textarea name="dis"></textarea><br><br>
 		<input type="submit" name="submit" value="submit">
 	</form>
 </div>
 <div id="dis">
 	<?php $i =1;
$q=mysqli_query($connect,"SELECT * FROM news ORDER BY id DESC") or die(mysqli_error($connect));
while ($row=mysqli_fetch_array($q)) {
	?><hr><span style="float: right;">Date: <?php echo $row['date1']; ?> Time: <?php echo $row['time1']; ?></span><br><b>Title:</b><?php echo $row['title']; ?>
	<br><br>
	<b>Discription:</b> <?php echo nl2br($row['dis']); ?><br><br>
	 <a href="dn.php?id=<?php echo $row['id']; ?>">delete</a><hr>
	<?php
}
 	 ?>


 </div>

 </body>
 </html>