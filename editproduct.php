<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:index.php');
}
$id=$_REQUEST['book_id'];
include 'connection.php';
$sql="select * from book where book_id=$id";
$results=mysqli_query($con,$sql);
//echo $sql;
$row=mysqli_fetch_array($results);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit book details</title>
</style>
</head>

<body>
<table align="center">
<form action="productupdate.php" method="post">

<td><input name="name" type="text" value="<?php echo $row['title']; ?>"/></td>
<td><input name="description" type="text" value="<?php echo $row['description'];?>"/></td>
<td><input name="price" type="text" value="<?php echo $row['price'];?>"/></td>
<td><input name="discountprice" type="text" value="<?php echo $row['dprice'];?>"/></td>
<td><input type="file" name="image" value="<?php echo $row['fimg'];?>target="_blank"> <img src="images/<?php echo $row['fimg'];?>" width="200" height="200"/></a> </tr><br>
<td><input type="hidden" name="book_id" value="<?php echo $row['book_id']; ?>" /> </td>
<td> <input type="submit" value="update"  name="ok"/> </td>

</form></table>
</body>
</html>
