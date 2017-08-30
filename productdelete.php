a<?php
$id=$_REQUEST['book_id'];
include 'connection.php';
$sql="delete from book where book_id=$id";
$results=mysqli_query($con,$sql);
if($results>0)
{
	echo "item deleted";
}
else
echo "cannot delete";
header("location:bdetails.php")
?>
