<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvt";
$con=mysqli_connect($server,$uname,$pwd,$db) or die('db not connected');
$id=$_POST['id'];
$name=$_POST['name'];
$city=$_POST['city'];
$query="update emp set name='$name'AND city='$city' where id=$id";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('update successfully')</script>";
} 
else
{
	echo"<script>alert('update not success')</script>";
}
?>