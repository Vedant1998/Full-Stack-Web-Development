<?php 
 include ('config.php')
?>

<?php  
if (isset($_POST['btn'])){
 echo "Dear,".$_POST['username']."Your Details are".'<br>';

echo $_POST['id'];
echo $_POST['username'];
echo $_POST['age'];
echo $_POST['Contact'];
echo $_POST['emailid'];
}
else{
	echo "Welcome Guest";
}

?>
<html>
<head>
	<title> Input Form</title>
</head>
<body>
	<form action="phpInput.php" method="post">
		ID:<input name="id", type ="text" placeholder="Enter ID"><br>
 Name:<input type="text" name="username" placeholder="Enter Name">
  <br>
 Age:<input type="text" name="age" placeholder="Wnter age"><br>
 Contact:<input type="text" name="contact" placeholder="Enter Contact"><br>
 email:<input type="text" name="emailid" placeholder="Enter MailID"><br>
<input type="submit" name="btn">
</form>
</body>
</html>