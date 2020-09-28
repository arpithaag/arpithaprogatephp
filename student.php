<?php 


$con= mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No Connection";
}

mysqli_select_db($con,'phpdata');

$user=$_POST['user'];
$Email=$_POST['email'];
$Mobile =$_POST['mobile'];
$subject=$_POST['subject'];
$doubts=$_POST['doubts'];

$query="insert into stuinfodata(user,email,mobile,subject,doubts) values('$user','$email','$mobile','$subject','$doubts')";

mysqli_query($con,$query);



echo "$query";








 ?>