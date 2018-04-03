<?php
include 'connection.php';
//session_start();
if(!isset($_SESSION["email_id"]))
{
//header("location: ./");
}
else
{
$id=$_SESSION['email_id'];
}
if(session_status()==PHP_SESSION_NONE)
{
session_start();
}
//SESSION_start(); //database connection page
if(isset($_POST["submit1"]))
{
	echo "Invalid username or password";
	$username=$_POST["email_id"];   //username value from the form
	$password=$_POST["password"];	//password value from the form
	//echo $username;
	$sql="select* from login where email_id='$username' and password='$password'"; //value querried from the table
	$res=mysqli_query($con,$sql);  //query executing function

	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch[role]==1) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["email_id"]=$username;	// setting username as session variable
			header("location:admin.php");	//home page or the dashboard page to be redirected
		}
		else if($fetch[role]==0) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["email_id"]=$username;	// setting username as session variable
			header("location:loghome.php");

		}

	}


}
?>

<!DOCTYPE HTML>
<!--
	Colorized by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Colorized by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>

		<script src="js/java.js"></script>
		<noscript>
			<link rel="stylesheet" href="style.css" />
			<link rel="stylesheet" href="css/bootstrap.min.css" />
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="style1.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<style>
#coolMenu,
#coolMenu ul {
    list-style: none;
}
#coolMenu {
    float: left;
}
#coolMenu > li {
    float: left;
}
#coolMenu li a {
display: block;
    height: 2em;
    line-height: 2em;
    padding: 0 1.5em;
    text-decoration: none;
}
#coolMenu ul {
    position: absolute;
    display: none;
z-index: 999;
}
#coolMenu ul li a {
    width: 80px;
}
#coolMenu li:hover ul {
    display: block;
}
</style>
		<style>
						.dropbtn {
					    background-color: #F08080;
					    color: white;
					    padding: 16px;
					    font-size: 16px;
					    border: none;
					    cursor: pointer;
					}

					.dropbtn:hover, .dropbtn:focus {
					    background-color: #FA8072;
					}

					.dropdown {
					    position: relative;
					    display: inline-block;
					}

					.dropdown-content {
					    display: none;
					    position: absolute;
					    background-color: #f9f9f9;
					    min-width: 160px;
					    overflow: auto;
					    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
					    z-index: 1;
					}

					.dropdown-content a {
					    color: black;
					    padding: 12px 16px;
					    text-decoration: none;
					    display: block;
					}

					.dropdown a:hover {background-color: #F08080}

					.show {display:block;}

					.dropbtn1 {
						background-color: #F08080;
						color: white;
						padding: 16px;
						font-size: 16px;
						border: none;
						cursor: pointer;
				}

				.dropbtn1:hover, .dropbtn:focus {
						background-color: #FA8072;
				}
				.dropdown1 {
						position: relative;
						display: inline-block;
				}

				.dropdown-content1 {
						display: none;
						position: absolute;
						background-color: #f9f9f9;
						min-width: 160px;
						overflow: auto;
						box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
						z-index: 1;
				}

				.dropdown-content1 a {
						color: black;
						padding: 12px 16px;
						text-decoration: none;
						display: block;
				}

				.dropdown1 a:hover {background-color: #F08080}

				.show {display:block;}
					</style>
					<style>
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid pink;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.6s ease-in-out;
    transition: width 0.6s ease-in-out;
}
div.deal{
display:inline-block;
}

input[type=text]:focus {
    width: 100%;
}
h5 {
	color: blue;
 font-family: verdana;
 font-size: 40px;
}
</style>
<style>
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: pink;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:50%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
	</head>
	<body class="homepage">
<?php include_once("analyticstracking.php") ?>
	<!-- Header -->
		<div id="header">
			<div id="logo-wrapper">
				<div class="container">

					<!-- Logo -->
						<div id="logo">
							<table>
							<tr><td><h1><a href="#">Click to read</a></h1></td>
							<td>	<h3>More read for More growth</h3></td>

							<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp</td>
<!--<li>bgyv</li>--><td>
<h3 style="color:white;font-size:24px;"><?php

							$results= mysqli_query($con,"SELECT * FROM `regestration` WHERE email_id='$id'");
							$i=1;
							while($row5=mysqli_fetch_array($results))
							{
								?>
               Hai
							<?php echo $row5['name'];?>
....
							<?php

							}

							?></h3>
							<link rel="stylesheet" href="css/skel-noscript.css" />
							<link rel="stylesheet" href="css/style.css" />
							<span><form><input type="text" name="search" placeholder="Search."></form></span></td></tr></table>

						</div>

				</div>
			</div>
			<div class="container">
				<!-- Nav -->
				<script>
				// Get the modal
				var modal = document.getElementById('id01');

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				    if (event.target == modal) {
				        modal.style.display = "none";
				    }
				}
				</script>





			<script>
			/* When the user clicks on the button,
			toggle between hiding and showing the dropdown content */
			function myFunction() {
			    document.getElementById("myDropdown").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
			  if (!event.target.matches('.dropbtn')) {

			    var dropdowns = document.getElementsByClassName("dropdown-content");
			    var i;
			    for (i = 0; i < dropdowns.length; i++) {
			      var openDropdown = dropdowns[i];
			      if (openDropdown.classList.contains('show')) {
			        openDropdown.classList.remove('show');
			      }
			    }
			  }
			}
			function myFunction1() {
					document.getElementById("myDropdown1").classList.toggle("show");
			}

			// Close the dropdown if the user clicks outside of it
			window.onclick = function(event) {
				if (!event.target.matches('.dropbtn1')) {

					var dropdowns = document.getElementsByClassName("dropdown-content");
					var i;
					for (i = 0; i < dropdowns.length; i++) {
						var openDropdown = dropdowns[i];
						if (openDropdown.classList.contains('show')) {
							openDropdown.classList.remove('show');
						}
					}
				}
			}
			</script>

<nav id="nav">
	<ul>
								<li><a href="loghome.php">Home</a></li>
								<!--<li class="active"><a href="left-sidebar.html">Login</a></li>-->
								<li><a href="myprof.php">My Account</a></li>
								<li><a href="cart.php">Cart</a></li>
<li><a href="changepass.php">Change Password</a></li>
								<li><a href="custorder.php">My Order</a></li>
								<li><a href="#">Help</a></li>
								<li><a href="wishview.php">wishlist</a></li>
								<li><a href="logout.php">Logout</a></li>

							</ul>

					</nav>
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<ul id="coolMenu">
			<li>			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
			<li><a href="allbook.php">Books</a></li>
	    <li><a href="cat.php">Browse Genre</a></li>
	  <!--  <li>
	        <a href="#">Periher</a>
	        <ul>
	            <li><a href="#">Hellenico</a></li>
	            <li><a href="#">Genere</a></li>
	            <li><a href="#">Indulgentia</a></li>
	        </ul>
	    </li>-->
	    <li><a href="child.php">Children & Young</a></li>
	    <li><a href="textbook.php">TextBook</a></li>
</ul>
			</div>
		</div>
	<!-- Header -->



	<!-- Main -->
		<div id="main">

			<!-- Featured -->
			<div class="container">
						<div class="row">
							<div id="sidebar1" class="3u">
								<section>
									<header>
										<h2>Categories</h2>
									</header>
									<ul class="default alt">

										<ul>
											<li><a href="indn.php?cat_id=5">Biography & Autobiography</a></li>
						          <li><a href="indn.php?cat_id=18">Children's Books</a>
						          <!--  <ul>
						              <li><a href="#">Navigation - Level 2</a></li>
						              <li><a href="#">Navigation - Level 2</a></li>
						            </ul>-->
						          </li>
						          <li><a href="indn.php?cat_id=17">Business & Economics</a></li>

						                  <li><a href="indn.php?cat_id=16">Exam centrals</a></li>
						                  <li><a href="indn.php?cat_id=12">Health & Fitness</a></li>
						                </ul>
						          <li><a href="indn.php?cat_id=14">Indian writings</a></li>
											  <li><a href="indn.php?cat_id=4">Romance</a></li>
															  </ul>
														</section>
														<section>
															<header>
																<h2>Price Range</h2>
															</header>
															<ul>
							            <li><a href="price.php?price=100">Below 100</a></li>
							            <li><a href="pb500.php?price=500">100-500</a></li>
							            <li><a href="p5001000.php?price=1000">500-1000</a></li>

							                    <li><a href="price1000.php?price=1001">Above 1000</a></li>


							              </ul>

														</section>
<header>
										<h2><font size="5px">Avg Customer Review</font></h2>
									</header>
									<ul>
	            <li><a href="cr.php?rating=5"><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/></a></li>
	             <li><a href="cr.php?rating=4"><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/></a></li>
				  <li><a href="cr.php?rating=3"><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/></a></li>
				   <li><a href="cr.php?rating=2"><img src="star.png" height="16px" width="16px"/><img src="star.png" height="16px" width="16px"/></a></li>
	            <li><a href="cr.php?rating=1"><img src="star.png" height="16px" width="16px"/></a></li>

	                   


	              </ul>

								</section>

																			<section>
																				<header>
																					<h2>Language</h2>
																				</header>
																				<ul class="default alt">

																					<ul>
											          <li><a href="malayalam.php?language=Malayalam">Malayalam</a></li>
											          <li><a href="malayalam.php?language=english">Engllish</a>
											          <!--  <ul>
											              <li><a href="#">Navigation - Level 2</a></li>
											              <li><a href="#">Navigation - Level 2</a></li>
											            </ul>-->
											          </li>
											          <li><a href="malayalam.php?language=hindi">Hindi</a></li>

														  </ul>
													</section>
												</div>

												<div class="9u skel-cell-important">
													<section>
														<header>
															<h2>Todays Deal</h2>
														</header>
																<div class="row">
																<br>
 <marquee bgcolor="pink">Great Savings. Every Day. Shop from our Deal of the Day, Lightning Deals and avail other great offers. Sign up for deal notifications. </marquee>
																<!--	<section class="3u">
																		<a href="aa.php?cat_id=5" class="image full"><img src="images/b1.jpg" alt=""></a>
																		</section>
																	<section class="3u">
																		<a href="#" class="image full"><img src="images/b3.jpg" alt=""></a>
																		</section>
																	<section class="3u">
																		<a href="#" class="image full"><img src="images/b5.jpg" alt=""></a>
																		</section>
																		<section class="3u">
																			<a href="#" class="image full"><img src="images/b4.jpg" alt=""></a>
																			</section>-->




																	
																	
																	<br>
																	<br>


											<section>
												<header>
<br>
							<div class="deal">	<!--<img src="deal.jpg" alt="deal of the day" width="300px" height="225px"/>--></div>
						<h3>Up to 50% off</h3>
							
							</header>
							<div class="row">
							<section class="3u">

									<center>
									<table>
									
									<?php
									$qry="select * from offer where status='1'";
									$res=mysqli_query($con,$qry);
									$i=0;
									
									while($ar=mysqli_fetch_array($res))
									{
										$v=0;
							$c=0;
							$s=0;
										$a=$ar['offerid'];
										$i++;
										if($i % 4==1)
										{
											echo "<tr>";
										}
										
//$id=$_GET['id'];
//if ($cnt>0)
//{
$sq = "select count(`rating`) AS num,sum(`rating`) AS sm from `offrrating` where `offer_id`='$a' ";
$result = $con->query($sq);
$row1 = $result->fetch_assoc();
//$res2=mysqli_query($con,$sq);  //query executing function
//$fetch2=mysqli_fetch_array($res2);
$v=0;
							$c=0;
							$s=0;
$c=$row1["num"];
//echo $c;
$s=$row1["sm"];
//echo $s;
if($c==0)
{
	
	$v=0;
}
else{
$v= intval($s/$c);
//echo $v;
}
							?>		
									<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
									    	<td>

									            <form action="oindex.php?id=<?php echo $ar['offerid'];?>" method="post">
									        	 <div class="div4" id="div4">
												<div class="img">
												
												 <?php
			 
			  date_default_timezone_set('America/Los_Angeles');
                    $date_now = date('Y-m-d H:i:s');
                    $date_end = $ar['endsin'];
                    $now=strtotime($date_now);
                    $end=strtotime($date_end);
                    $time=$end-$now;
					//echo $now;
					//echo $end;
					//echo $time;
                    //if($time>0){
			 
			 ?>
									                   <a href="index.php?id=<?php echo $ar['offerid'];?>"><span><img src="<?php echo $ar['photo']?>" width="230px" height="280px" style=" border-radius: 8px; " alt=""></a></span>
																		 <div class="desc">
				 									    				<?php echo $ar['name']?><br>
																	<!--	<img src="dealof.jpg" alt="deal of the day" height="100px"/>-->
																		
																		


<?php
if($v==5)
		
{?>
<img src="Star.png" width=15 height=15></img>
<img src="Star.png" width=15 height=15></img>
<img src="Star.png" width=15 height=15></img>
<img src="Star.png" width=15 height=15></img>
<img src="Star.png" width=15 height=15></img>

	<?php
}
if($v==4)
{
	?><img src="Star.png" width=15 height=15></img>
	<img src="Star.png" width=15 height=15></img></img>
	<img src="Star.png" width=15 height=15></img>
	<img src="Star.png" width=15 height=15></img>

	<?php
}
if($v==3)
{
?><img src="star.png" width=15 height=15></img>
	<img src="star.png" width=15 height=15></img></img>
	<img src="star.png" width=15 height=15></img>
	<?php
	}
	
if($v==2)
{
?><img src="star.png" width=15 height=15></img>
	<img src="star.pngg" width=15 height=15></img></img>
<?php	
}
if($v==0)
{
?>
<?php	
}
if($v==1){
	?><img src="star.png" width=15 height=15></img>
	
<?php
}
	
?>
																		<?php
				 $z=$ar['price'];
				
				 $y=$ar['percentage'];
				// echo $y;
				 $dprice=($z*$y)/100;
				 	//$tot=$ar['price']-$ar['percentage'];
					//$per=($tot/$ar['price'])*100
					$dp=$z-$dprice;

				 ?>
				 									   					 <br>Only &nbsp&nbsp<?php echo $dp?>
				 															 &nbsp&nbsp&nbsp&nbsp
				 															<br> 
				 															<strike> <?php echo $ar['price']?></strike>
																			 
																			 
         
			 
				 
				 <font color="red"> <font-size="50px"> ( <?php echo $y; ?>%&nbsp&nbspOff)
				   <input type="hidden" name="time_sec" id="time_sec" value="<?php echo $time; ?>">
				  
				 															<!--<font color="red"> <font-size="30px">Save  <?php echo $dprice; ?>--><br>
																		<?php
                                  if($time>0)
                                  {
                                    ?>
									
                                   <font color="red">&nbsp;Ends in</font>
								 
                                      <font color="red"><span id="countdowntimer"><?php echo floor($time/ 60); ?> </span>:<span id="countdowntimer2"> <?php echo $time%60; ?> </span> Seconds</font>
                                    
								  <?php
								  }
								  ?>
								   <?php } ?>
												<br>							
			 
																			
																			<input type="hidden" value="<?php echo $ar['book_id']?>" name="pid" />
				 									                    <input type="submit" value="VIEW DEAL" name="submit" class="button1"/><br>
				 																			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

				 									 				 </div>
												</div>
												</div>
									            </form>
											</td>

									
									      </table>
									</center>
							</section>
						</div>

							<!--<section class="3u">
								<a href="#" class="image full"><img src="images/pics03.jpg" alt=""></a>
								<p>Nulla enim eros, porttitor eu, tempus varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis quam.</p>
								<form>
								<input type="button" name="buy" value="Buy Now"></form>
							</section>
							<section class="3u">
								<a href="#" class="image full"><img src="images/6.jpg" alt=""></a>
								<p>Porttitor eu, tempus id, varius non, nibh. Duis enim nulla dapibus lacinia, venenatis. Vestibulum imperdiet.</p>
								<form>
								<input type="button" name="buy" value="Buy Now"></form>
							</section>
							<section class="3u">
								<a href="#" class="image full"><img src="images/pics02.jpg" alt=""></a>
								<p>Vestibulum imperdiet, magna nec eleifend rutrum. Duis enim nulla, luctus eu, dapibus lacinia quam. </p>
								<form>
								<input type="button" name="buy" value="Buy Now"></form>
							</section>
							<section class="3u">
								<a href="#" class="image full"><img src="images/pics03.jpg" alt=""></a>
								<p>Nulla enim eros, porttitor eu, tempus varius non, nibh. Duis enim nulla, luctus eu, dapibus lacinia, venenatis quam.</p>
								<form>
								<input type="button" name="buy" value="Buy Now"></form>
							</section>
							<section class="3u">
								<a href="#" class="image full"><img src="images/pics04.jpg" alt=""></a>
								<p>Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum.</p>
								<form>
								<input type="button" name="buy" value="Buy Now"></form>
							</section>
							<section class="3u">
								<a href="#" class="image full"><img src="images/pics04.jpg" alt=""></a>
								<p>Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam. Vestibulum imperdiet, magna nec eleifend rutrum.</p>
								<form>
								<input type="button" name="buy" value="Buy Now"></form>
							</section>
						</section>-->
					</div>
				</div>
				
				
						
							</div>
						</div>
						
					</div>
			<!-- /Featured -->

			<!-- Main Content -->


			</div>
			<!-- /Main Content -->

		</div>
	<!-- /Main -->

	<!-- Footer -->
		<div id="footer">
			<div class="container">
				<div class="row">
					<div class="6u">
						<section>
							<header>
								<h2>Elementum facilisis</h2>
							</header>
							<a href="#" class="image full"><img src="images/pics05.jpg" alt=""></a>
							<p>In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat. Pellentesque tristique ante ut risus. Quisque dictum. Integer nisl risus, sagittis convallis, rutrum id, elementum.</p>
						</section>
					</div>
					<div id="fbox1" class="3u">
						<section>
							<header>
								<h2>Praesent mattis</h2>
							</header>
							<ul class="default">
								<li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
								<li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
								<li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
								<li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
								<li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
								<li class="fa fa-angle-right"><a href="#">Sed quis odio sagittis leo vehicula</a></li>
							</ul>
						</section>
					</div>
					<div id="fbox2" class="3u">
						<section>
							<header>
								<h2>Maecenas luctus</h2>
							</header>
							<ul class="default">
								<li class="fa fa-angle-right"><a href="#">Vestibulum luctus venenatis dui</a></li>
								<li class="fa fa-angle-right"><a href="#">Integer rutrum nisl in mi</a></li>
								<li class="fa fa-angle-right"><a href="#">Etiam malesuada rutrum enim</a></li>
								<li class="fa fa-angle-right"><a href="#">Aenean elementum facilisis ligula</a></li>
								<li class="fa fa-angle-right"><a href="#">Ut tincidunt elit vitae augue</a></li>
								<li class="fa fa-angle-right"><a href="#">Sed quis odio sagittis leo vehicula</a></li>
							</ul>
						</section>
					</div>
				</div>


			</div>
		</div>
	<!-- /Footer -->

	<!-- Copyright -->
	
		<div id="copyright">
			<div class="container">
				<section>
					Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
				</section>
			</div>
		</div>
<script src="jquery-3.2.1.min.js"></script>
                      
<script>
  
                      $(document).ready(function() {					  
						setInterval(function()
						{
    						$('#div4').load(document.URL +  ' #div4');
						}, 1000);
               		 });
              		</script>
	</body>
</html>
