<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license.
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Business 2</title>
    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css1/custom.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom Fonts from Google -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
    <body style="background-image: url(images/pattern.png), url(images/2.jpg);">
    <!-- Navigation -->
    <nav id="siteNav" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<span class="glyphicon glyphicon-fire"></span>
                	LOGO
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<!-- Header -->
    <header>

    </header>

	<!-- Intro Section -->


	<!-- Content 1 -->




	<!-- Footer -->


    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Custom Javascript -->
    <script src="js/custom.js"></script>
    <?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
    $a=$_POST["name"];
    $b=$_POST["address"];
    $c=$_POST["city_name"];
    $d=$_POST["photo"];
    $e=$_POST["district_name"];
    $f=$_POST["contact_num"];
    $g=$_POST["email"];
    $h=$_POST["password"];
    $i=$_POST["pin_num"];
    $j=$_POST["seq_question"];
    $k=$_POST["seq_answer"];
    $l=$_POST["gender"];
    $sql="INSERT INTO `regestration`(`name`, `address`, `district_id`, `city_name`, `pin_num`, `contact_num`, `seq_question`, `seq_answer`, `photo`, `gender`) VALUES ('$a','$b','$e','$c','$i','$f','$j','$k','$d','$l')";
    //print_r($sql);

    $result=mysqli_query($con,$sql);
    $sql1="INSERT INTO `login`(`email_id`, `password`, `status`) VALUES ('$g','$h',0)";
    //print_r($sql1);
    $result1=mysqli_query($con,$sql1);

    //echo "successfully inserted";
    }
    ?>
    <html>
        <head>
            <link rel="stylesheet" href="welcomestyle.css" />
    <style>
    div.sis3 {
      background: transparent ;
        position: absolute;
        top: 100px;
        right: 0;
        left:500px;
        width: 50%;
        height: 400px;
    }</style>
            <title>regestration details</title>
        </head>

        <body><div id="all">
            <div id="main_wrapper">
                <header>

    </div>

                    </div>

    <div class="sis3">
    <form action="#" name="myForm" id="myForm" onsubmit="return validateForm()" method="post">
    <fieldset>
    <legend>REGISTRATION FORM</legend>
    <table border="0">
    <tr><td>NAME:</TD><TD><INPUT TYPE="TEXT" NAME="name"></td></tr>
      <tr>
      <td>PHOTO</td>
      <td><input type="file" name="photo" id="photo" size="30">
      </td>
      </tr>
    <tr><td></TD><td><FIELDSET><LEGEND>GENDER</LEGEND><input type="radio" name="gender" value="male" checked> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other<br><br>
      </FIELDSET></td></tr>
      <tr><td>ADDRESS:</td><td><input type="text" name="address"></td></tr>
      <tr><td>STATE</td>
      <td><select name="state_name">
        <option value="">--select--</option>
      <?php
      $results= mysqli_query($con,"select state_id,state_name from state");
      $i=1;
      while($row=mysqli_fetch_array($results))
      { ?>
        <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>

      <?php }
      ?>
    </TR>
    <tr><td>DISTRICT</td>
      <td><select name="district_name">
        <option value="">--select--</option>
      <?php
      $results= mysqli_query($con,"select district_id,district_name from district");
      $i=1;
      while($row=mysqli_fetch_array($results))
      { ?>
        <option value="<?php echo $row['district_id']; ?>"><?php echo $row['district_name']; ?></option>

      <?php }
      ?>
    </tr>
      <tr><td>CITY:</td><td><input type="text" name="city_name"></td></tr>
      <tr><td>PINCODE:</td><td><input type="number" name="pin_num"  size="30" min="1" ></td></tr>
    <tr><td>CONATACT NUMBER</TD><TD><INPUT TYPE="TEL" NAME="contact_num" min="1" max="10"></td></tr>
    <tr><td>EMAIL:</TD><TD><INPUT TYPE="email" NAME="email"></td></tr>
    <tr><td>PASSWORD</td>
      <td><input type="password" name="password"/> </td></tr>
    <tr>
      <tr><td>SECURITY QUESTION</td>
        <td><select name="seq_question">
        <option value="">--select--</option>
        <option value="">Nick name</option>
        <option value="">Father's name</option>
        <option value="">pet name</option>
        <option value="">Ambition</option>
      </select></td></tr>
      <tr><td>SECURITY ANSWER:</td><td><input type="text" name="seq_answer"></td></tr>
    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp</td>

    <td><input type="submit" name="submit" value="Regester" onclick="alert('Insert successfully')"></td>
    </tr>
    </table></form>
    <script>
    function validateForm() {
        var fname = document.myForm.fname.value;
        if (fname == null || fname == "") {
            alert("First Name can't be blank");
            return false;
        }
        var lname = document.myForm.lname.value;
        if (lname == null || lname == "") {
            alert("Last Name can't be blank");
            return false;
        }
        var mname = document.myForm.mname.value;
        if (mname == null || mname== "") {
            alert("Middle Name can't be blank");
            return false;
        }
        var address = document.myForm.address.value;
        if (address == null || address == "") {
            alert("Address can't be blank");
            return false;
        }
        var city=document.myForm.city.value;
        if (city==null || city==""){
          alert("ity  can't be blank");
          return false;
        }
    var pin=document.myForm.pin.value;
    if (pin==null || pin==""){
      alert("Pin Code can't be blank");
      return false;
    }
    var phone=document.myForm.phone.value;
    if (phone==null || phone==""){
      alert("Phone number can't be blank");
      return false;
    }
    var email=document.myForm.email.value;
    if (email==null || email==""){
      alert("Email can't be blank");
      return false;
    }

    var username=document.myForm.username.value;
    if (username==null || username==""){
      alert("User Name  can't be blank");
      return false;
    }
    var cnt=document.myForm.phone.value;
    if(phone.length!=10)
    {
      alert("Enter Phone number in currect format");
    }
    var pin=document.myForm.pin.value;
    if(pin.length!=6)
    {
      alert("Enter pin code in currect format");
    }

    var password=document.myForm.password.value;
    if (password==null || password==""){
      alert("Password can't be blank");
      return false;
    }
    }
    </script>
    </div>


</body>

</html>
