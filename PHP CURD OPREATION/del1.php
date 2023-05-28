<?php
$server="localhost";
$uname="root";
$pwd="";
$db="kvt";
$con=mysqli_connect($server,$uname,$pwd,$db) or die('db not connected');
$id=$_GET['id'];
$query="delete from emp where id=$id";
if($res=mysqli_query($con,$query))
{
	echo"<script>alert('deleted successfully')</script>";
} 
else
{
	echo"<script>alert('delete not success')</script>";
}
?>