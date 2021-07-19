<?php require 'nav.php'; ?><?php
require ('config.php');

function generateRandomString($length = 10) {
    $characters = '0123456789@!#$%()*&abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


$pass =  generateRandomString();
//echo $pass;

$en_no = $_POST['Enrollment'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$g= $_POST['gender'];


$q = mysqli_query($connect,"INSERT INTO student (er_no,t_password,fname,lname,gender) VALUES ('$en_no','$pass','$fname','$lname','$g')");
if($q)
{
	?><div style="background-color: rgba(1,1,1,0.4); padding:20px; margin: 5%;">
		name : <?php echo $fname." ".$lname; ?><br>
        gender : <?php echo $g; ?> <br>
		enrollment : <?php echo $en_no; ?><bR>
		temp password : <?php echo $pass;?><br>
	</div><?php
}
else
{
	echo "error";
}


?> 