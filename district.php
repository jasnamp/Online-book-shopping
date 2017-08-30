<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$a=$_POST["state_name"];
$b=$_POST["district_name"];
$sql1="INSERT INTO `district`(`state_id`, `district_name`) VALUES ('$a','$b')";
$result1=mysqli_query($con,$sql1);
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="welcomestyle.css" />
<style>
div.sis3 {
  background: transparent ;
    position: absolute;
    top: 540px;
    right: 0;
    left:500px;
    width: 50%;
    height: 400px;
}</style>
        <title>state</title>
    </head>

    <body><div id="all">
        <div id="main_wrapper">
            <header>
                <div id="main_title">
                    <img src="c.jpeg" alt="Logo click2fashion" id="logo"  width="50" height="60" />
                    <h1>lickTofashion</h1>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
</div>

                </div>
              </header>


          <div id="b_image">
       <a href="http://www.w3schools.com">
    <img border="0" alt="banner image" src="banner.jpeg" width="1320" height="350" >
    </a>
                 </div>
&nbsp&nbsp&nbsp&nbsp&nbsp

</br>
<br>
<br>
<br>
<br>

<br>
<br>

<div class="sis3">
<form action="#" name="myform" id="myform" method="post">
<fieldset>
<legend>ADD DISTRICT</legend>
<table border="0">
  <td>STATE NAME&nbsp&nbsp</td>
  <td><select name="state_name">
  <?php
  $results= mysqli_query($con,"select state_id,state_name from state");
  $i=1;
  while($row=mysqli_fetch_array($results))
  { ?>
    <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>

  <?php }
  ?>
<tr><td>DISTRICT NAME:</TD><TD><INPUT TYPE="TEXT" NAME="district_name"></td></tr>

</FIELDSET>
<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp</td>
<td><input type="submit" name="submit" value="ADD"></td>
</tr>
</table></form></div>
</body></html>
<script>
function validateForm() {
    var fname = document.myForm.state_name.value;
    if (fname == null || fname == "") {
        alert("State Name can't be blank");
        return false;
    }
  </script>
