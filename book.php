<?php
session_start();
if(!isset($_SESSION['email_id']))
{
  //header('location:category.php');
}
include 'connection.php';
if(isset($_POST['submit']))
{
$z=$_POST["book_id"];
$a=$_POST["title"];
$b=$_POST["subcat_name"];
$c=$_POST["author_name"];
//$d=$_POST["title"];
$e=$_POST["description"];
$f=$_POST["publisher"];
$g=$_POST["yofpub"];
$h=$_POST["language"];
$i=$_POST["quantity"];
$j=$_POST["price"];
$k=$_POST["dprice"];
$l=$_POST["fimg"];
$m=$_POST["bimg"];
$n=$_POST["pageno"];
$s=$_POST["ean"];
$p=$_POST["binding"];
$q=$_POST["edition"];
$r=$_POST["seller"];

$sql="INSERT INTO `book`(`book_id`,`title`, `subcat_id`, `author_id`, `publisher`, `yofpub`, `language`, `quantity`, `price`, `dprice`, `fimg`, `bimg`, `pageno`, `ean`, `binding`, `edition`, `seller`, `description`) VALUES ('$z','$a','$b','$c','$f','$g','$h','$i','$j','$k','$l','$m','$n','$s','$p','$q','$r','$e')";
//print_r($sq
$result=mysqli_query($con,$sql);

//echo "successfully inserted";
}
?>
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
                      <a href="category.php" class="dropbtn">Category</a>
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
     <a href="bdetails.php"> Book details</a>
    </div>
  </li>
<li><a href="viewcust.php">View customers</a></li>
<li><a href="viewcustomer.php">View Orders</a></li>
<li><a href="logout.php">Logout</a></li>

                    </ul>
</li>
</ul>
                </nav>
            </header>
            <div id="b_image">
         <a href="http://www.w3schools.com">
      <img border="0" alt="banner image" src="a.jpeg" width="1320" height="450" >
      </a>
                   </div>
&nbsp&nbsp&nbsp&nbsp&nbsp

</br>
<br>
<br>
<br>
<br>

<div class="sis3">
<form action="#" name="myForm" id="myForm" onsubmit="return validateForm()" method="post">
<fieldset>
<legend><b>Add new Book details</b></legend>
<table border="0">
<tr>
<td colspan=2>
<center><font size=3><h3><u> Book list</u></h3></font></center>
</td>
</tr>
<tr><td>CATEGORY</td>
<td><select name="cat_name">
  <option value="">--select--</option>
<?php
$results= mysqli_query($con,"select cat_id,cat_name from category");
$i=1;
while($row=mysqli_fetch_array($results))
{ ?>
  <option value="<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>

<?php }
?>
</TR>
<tr><td>SUB CATEGORY</td>
<td><select name="subcat_name">
  <option value="">--select--</option>
<?php
$results= mysqli_query($con,"select subcat_id,subcat_name from subcategory");
$i=1;
while($row=mysqli_fetch_array($results))
{ ?>
  <option value="<?php echo $row['subcat_id']; ?>"><?php echo $row['subcat_name']; ?></option>

<?php }
?>
</tr>
<tr><td>BOOK NUMBER</TD><TD><INPUT TYPE="TEXT" NAME="book_id" size="28.5"></td></tr>
<tr><td>TITLE</TD><TD><INPUT TYPE="TEXT" NAME="title" size="28.5"></td></tr>
  <tr><td>EAN</TD><TD><INPUT TYPE="TEXT" NAME="ean" size="28.5"></td></tr>
  <tr><td>DESCRIPTION</TD><TD><INPUT TYPE="TEXT" NAME="description" size="28.5"></td></tr>
    <tr><td>AUTHOR NAME</td>
    <td><select name="author_name">
      <option value="">--select--</option>
    <?php
    $results= mysqli_query($con,"select author_id,name from author");
    $i=1;
    while($row=mysqli_fetch_array($results))
    { ?>
      <option value="<?php echo $row['author_id']; ?>"><?php echo $row['name']; ?></option>

    <?php }
    ?>
  </TR>

    <tr><td>PUBLISHER</TD><TD><INPUT TYPE="TEXT" NAME="publisher" size="28.5"></td></tr>
        <tr><td>YEar OF PUBLISHING</TD><TD><INPUT TYPE="TEXT" NAME="yofpub" size="28.5"></td></tr>
            <tr><td>QUANTITY</TD><TD><INPUT TYPE="TEXT" NAME="quantity" size="28.5"></td></tr>
                <tr><td>PRICE</TD><TD><INPUT TYPE="TEXT" NAME="price" size="28.5"></td></tr>
                    <tr><td>DISCOUNT PRICE</TD><TD><INPUT TYPE="TEXT" NAME="dprice" size="28.5"></td></tr>
                      <tr><td>LANGUAGE</td>
                        <td><select name="language">
                        <option value="">--select--</option>
                        <option value="Malayalam">Malayalam</option>
                        <option value="English">English</option>
                        <option value="Hindi">Hindi</option>
                      </select></td></tr>
        <tr><td>PAGE NUMBER</TD><TD><INPUT TYPE="TEXT" NAME="pageno" size="28.5"></td></tr>
            <tr><td>BINDING</TD><TD><INPUT TYPE="TEXT" NAME="binding" size="28.5"></td></tr>
                <tr><td>EDITION</TD><TD><INPUT TYPE="TEXT" NAME="edition" size="28.5"></td></tr>
                    <tr><td>SELLER</TD><TD><INPUT TYPE="TEXT" NAME="seller" size="28.5"></td></tr>
                      <tr>
                      <td>FRONT PAGE</td>
                      <td><input type="file" name="fimg" id="photo" size="30">
                      </td>
                      </tr>
                      <tr>
                      <td>BACK PAGE</td>
                      <td><input type="file" name="bimg" id="photo" size="30">
                      </td>
                      </tr>

<tr>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
<td><input type="submit" value="ADD" name="submit" ></td></tr>
</table></form></div>
<script>
function validateForm() {
    var cname = document.myForm.cat_name.value;
    if (cname == null || cname == "") {
        alert("Category Name can't be blank");
        return false;
    }
  }
  </script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>
<hr>
          <!--  <footer>
                <div id="ourc">
                    <h1>OUR COMPANY</h1>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Ethnico</a></li>
                        <li><a href="#">Mehendi design</a></li>

                    </ul>
                </div>
                <div id="topctgr">
                    <h1>TOP CATEGORIES</h1>
                 <ul>
                        <li><a href="#">sarees</a></li>
                        <li><a href="#">lahengas</a></li>
                        <li><a href="#"></a>salwars</li>
                        <li><a href="#"></a>gowns</li>

                    </ul>
                    </div>
<div id="useful">
<h1>USEFUL INFO</h1>
<ul>
                        <li><a href="#">contact us</a></li>
                        <li><a href="#">How to buy</a></li>
                        <li><a href="#">Terms&condetions</a></li>

                    </ul>

 </div>
            </footer>
        </div>-->
</div>
    </body>
</html>
