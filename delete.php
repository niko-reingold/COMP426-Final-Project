<html>
<body>
<?php
	
	session_start();
	$connect = new mysqli("classroom.cs.unc.edu", "cookcb", "krackatoa4", "cookcbdb");
	$username = $_SESSION['username'];
	
	$connect->query("delete from DNDCharacter where Username = '".$username."'");
	$connect->query("delete from DNDLogin where Username = '".$username."'");
	$connect->query("delete from DNDSaves where Username = '".$username."'");
	$connect->query("delete from DNDStats where Username = '".$username."'");
	$connect->query("delete from DNDSkills where Username = '".$username."'");
	$connect->query("delete from DNDAbilities where Username = '".$username."'");
	$connect->query("delete from DNDAttacks where Username = '".$username."'");
	
	
	header("Location: Login.php");
	exit;
?>
</body>
</html>