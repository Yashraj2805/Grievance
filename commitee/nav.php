<?php 
session_start();
?><!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
<div class="topnav">


  <?php if(isset($_SESSION['uname']))
  {
    $uname = $_SESSION['uname'];
    ?>  <a class="" id="home" href="com_home.php">Home</a>

  <a class="" id="view" href="view_complaint.php">View Complaint</a>

  <a  href="logout.php" style="float:right;">logout</a> <a style="float:right;">Hello, <?php require 'config.php';
  $q = mysqli_query($connect,"SELECT * FROM commitee Where username = '$uname'");
  $row= mysqli_fetch_array($q);
  echo $row['fname']." ".$row['lname'];?></a><?php 
  }
  else
  {
    ?>
    <a href="login.php">login</a>
    <?php
  }
  ?>


</div>
</body>
</html>