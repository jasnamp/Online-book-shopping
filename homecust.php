<?php
session_start();
if(!isset($_SESSION['username']))
{
  //header('location:index.php');
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="welcomestyle.css" />
        <title>book shop</title>
    </head>

    <body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                  <!--  <img src="booklogo.jpeg" alt="Logo click2fashion" id="logo"  width="50" height="60" />-->
                    <h1>Click2Read</h1>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</div>

                </div>

                <nav>
                  <a href="wlcmadmin.php">Home</a>
                  <li class="dropdown">
                      <a href="#" class="dropbtn">Books</a>
                      <div class="dropdown-content">
                        <a href="category.php">Educational</a>
                        <a href="subcategory.php">Indian writings</a>
</div>
</li>
<li class="dropdown">
    <a href="#" class="dropbtn">Mange products</a>
    <div class="dropdown-content">
      <a href="product.php">Add books</a>
<a href="product.php">Add books pdf</a>
     <a href="podts.php"> Book details</a>
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
      <img border="0" alt="banner image" src="aaa.jpg" width="1320" height="350" >
      </a>
                   </div>
&nbsp&nbsp&nbsp&nbsp&nbsp

</br>


<br>
<div id="aside">
             <ul>

                        <li><a href="categories.php">Add category</a></li>
<li><a href="product.php">Add Subcategory</a></li>
                        <li><a href="product.php">Add Book details</a></li>
<li><a href="#">View customers</a></li>

</ul>

</div>
<div id="welcome">
<br>
<br>
<br><br>
<br>
<h3><b><i>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspWELCOME TO SHOPPING CART ADMINISTRATOR............ </i></b></h3>

</div>
<br>


<br>

<hr>
           <footer>
                <div id="ourc">
                    <h1>OUR COMPANY</h1>
                    <ul>
                        <li><a href="about.php">About us</a></li>


                    </ul>
                </div>
                <div id="topctgr">
                    <h1>TOP Books</h1>
                 <ul>
                        <li><a href="saree.php">sarees</a></li>
                        <li><a href="lehanga.php">lahengas</a></li>
                        <li><a href="salwar.php">salwars</a></li>
                        <li><a href="gown.php">gowns</a></li>

                    </ul>
                    </div>
<div id="useful">
<h1>USEFUL INFO</h1>
<ul>
                        <li><a href="contact.php">contact us</a></li>
                        <li><a href="howtobuy.php">How to buy</a></li>
                        <li><a href="terms.php">Terms&condetions</a></li>

                    </ul>

 </div>
            </footer>
        </div>
</div>
    </body>
</html>
