<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:index.php');
}
include 'connection.php';
if(isset($_POST['ok']))
{
$id=$_POST["book_id"];
$a=$_POST["name"];
$b=$_POST["description"];
$d=$_POST["image"];
$e=$_POST["price"];
$f=$_POST["discountprice"];
$sql="UPDATE `book` SET `title`='$a',`price`='$e',`dprice`='$f',`fimg`='$d',`description`='$b' WHERE book_id=$id";
$results=mysqli_query($con,$sql);
//echo $sql;
header("location:bdetails.php");
}
?>
