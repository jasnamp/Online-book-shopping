<?php
session_start();
if(!isset($_SESSION['email_id']))
{
  //header('location:category.php');
}
include 'connection.php';
if(isset($_POST['submit']))
{
$a=$_POST["cat_name"];
$sql="INSERT INTO `category`(`cat_name`) VALUES ('$a')";
//print_r($sql);
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
                      <a href="#" class="dropbtn">Category</a>
                      <div class="dropdown-content">
                        <a href="#">Add Category</a>
                        <a href="subcategory.php">Add sub category</a>
                        <a href="author.php">Add author details</a>
</div>
</li>
<li class="dropdown">
    <a href="#" class="dropbtn">Mange products</a>
    <div class="dropdown-content">
      <a href="book.php">Add books</a>
<a href="product.php">Add books pdf</a>
     <a href="bdetails.php"> Book details</a>
    </div>
  </li>
<li><a href="viewcustomer.php">View customers</a></li>
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
<legend><b>Add new categories</b></legend>
<table border="0">
<tr>
<td colspan=2>
<center><font size=3><h3><u> Category list</u></h3></font></center>
</td>
</tr>
<tr><td>CATEGORY NAME</TD><TD><INPUT TYPE="TEXT" NAME="cat_name" size="28.5"></td></tr>
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
