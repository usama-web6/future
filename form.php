<html>
<head>
	<title>Form Assignment</title>
</head>
<body>
<?php
function add($var,$var1){
	$var3=$var+$var1;
	echo "Addition of your <br> given numbers is $var3";
}

if(isset($_POST["submit"])){
$var=$_POST["name"];
$var1=$_POST["f_name"];
echo "Welcome $var"."<br>"."Your Father name is ".$var1;
}
?>
	<form method="post" action="">
<fieldset style="width:800px;">
<legend align="left">Registration details</legend>
	<table width="100%"  bgcolor="skyblue" cellspacing="0" cellpadding="13">
		<tr>
			<td>
				Name:
			</td>
			<td>
				<input type="text" name="name" />
			</td>
		</tr>
		<tr>
			<td>
				Father Name:
			</td>
			<td>
				<input type="text" name="f_name" />
			</td>
		</tr>
		<tr>
			<td colspan="3">
				<input style="align: center;" type="submit" value="Submit" name="submit"></input>
			</td>
		</tr>
	</table>

	</fieldset>
	</form>
<?php

add(10,20);
?>
	</body>
</html>


<?php
/*

<html>
<title>

</title>


<form method="post" action="">

<input type="text" name="fnum" placeholder="Enter Your First Nunmber" required />
<input type="text" name="snum" placeholder="Enter Your Second Number" required />
<input type="radio" name="group1" id="add" value="add" checked="true">+
<input type="radio" name="group1" id="subtract" value="subtract">-
<input type="radio" name="group1" id="times" value="times">x
<input type="radio" name="group1" id="divide" value="divide">/
<input type="submit" value="Submit" name="submit" />


</form>

<?php
function AddNum($var, $var1){
$var3=$var+$var1;
echo "Addition of your given numbers is $var3";
}
if(isset($_POST["submit"])){
if($_POST['group1'] == ' add'){
$fn=$_POST["fnum"];
$sn=$_POST["snum"];

$tn=$fn+$sn;
echo "Addition of your given numbers is $tn";
}
}
?>

</html>
*/ ?>






