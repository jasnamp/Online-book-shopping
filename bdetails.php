
<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
html{
background:url('jky.png') no-repeat center fixed;
background-size:cover;
}
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>employee show</title>
</style>
</head>
<html>
    <head>
<style>
div.sis3 {
  background: transparent ;
    position: absolute;
    top: 660px;
    right: 0;
    left:500px;
    width: 50%;
    height: 300px;
}
</style>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="welcomestyle.css" />
        <title>categories...</title>
    </head>

    <body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                    <h1>ClickToRead</h1>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</div>

                </div>
<nav>
  <a href="index.php">Home</a>
  <li class="dropdown">
      <a href="#" class="dropbtn">Category</a>
      <div class="dropdown-content">
        <a href="category.php">Add Category</a>
        <a href="subcategory.php">Add sub category</a>
        <a href="author.php">Add author details</a>
</div>
</li>
<li class="dropdown">
<a href="#" class="dropbtn">Mange products</a>
<div class="dropdown-content">
<a href="#">Add books</a>
<a href="product.php">Add books pdf</a>
<a href="#"> Book details</a>
</div>
</li>
<li><a href="viewcust.php">View customers</a></li>
<li><a href="viewcustomer.php">View Orders</a></li>
<li><a href="logout.php">Logout</a></li>

    </ul>
</li>
</ul>
</nav>
<body>
<table align="center" width="200" border="1">
  <tr>
  <td><font color="black">&nbsp;Image</font></td>
    <td><font color="black">&nbsp;Book Name</font></td>
<td><font color="black">&nbsp;Language</font></td>
<td><font color="black">&nbsp;Description</font></td>
<td><font color="black">&nbsp;Price</font></td>
<td><font color="black">&nbsp;Discount price</font></td>
  </tr>
<?php
include 'connection.php';
$results=mysqli_query($con,"select * from book");
while($row=mysqli_fetch_array($results))
{
?>
<tr>
<td><a href="<?php echo $row['fimg'];?>target="_blank"> <img src="images/<?php echo $row['fimg'];?>" width="200" height="200"/></a> </td><br>
<td><input name="Book Name" type="text" value="<?php echo $row['title']; ?>"/></td>
<td><input name="Language" type="text" value="<?php echo $row['language']; ?>"/></td>
<td><input name="Description" type="text" value="<?php echo $row['description']; ?>"/></td>
<td><input name="Price" type="text" value="<?php echo $row['price']; ?>"/></td>
<td><input name="Discount Price" type="text" value="<?php echo $row['dprice']; ?>"/></td>
<td><a href="editproduct.php?book_id=<?php echo $row['book_id'];?>" >Edit</a></td>
<td><a href="productdelete.php?book_id=<?php echo $row['book_id'];?>">Delete</a></td>
</tr>
<?php } ?>
</table>
</body>
</html>
