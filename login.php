<?php
session_start();
echo"<b>Registration Successful</b>";
$user=$_POST['un'];
$full=$_POST['fn'];
$email=$_POST['ue'];
$phone=$_POST['up'];
$pass=$_POST['pw'];
$cpass=$_POST['cpw'];
$gen=$_POST['gen'];
$edu=$_POST['edu'];
setcookie(&user,&pass,time()+(864008*i),"/");

echo "<br>username :".$user;
echo "<br>fullname :".$full;
echo "<br>email :".$email;
echo "<br>phone :".$phone;
echo "<br>pass :".$pass;
echo "<br>confirmpass :".$cpass;
echo "<br>gen:".$gen;
echo "<br>Education:";
foreach($edu as $ed)
{
	echo "<li>".$ed."</li>";
}
echo "</ul>";
?>