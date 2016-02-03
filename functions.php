<?php

	$avalible = false;
	
	$action = $_POST['action'];
	
	if($action == 'check_username')
	{
		$u = $_POST['username'];
		_check_username($u, null, $avalible, false);
	}
	else if($action == 'create_account')
	{
		$u = $_POST['username'];
		$p = $_POST['password'];
		#_create_account($u, $p, $avalible);
		_check_username($u, $p, $avalible, true);
	}
	else if($action == 'login')
	{
		$u = $_POST['username'];
		$p = $_POST['password'];
		_verify($u, $p);
	}
	
	function _check_username($u, $p, $avalible, $create)
	{
		
		$connect = new mysqli("classroom.cs.unc.edu", "cookcb", "krackatoa4", "cookcbdb");
		
		$result = $connect->query("SELECT count(*) FROM DNDLogin WHERE Username = '".$u."'");
		$row = $result->fetch_row();
		$exists = $row[0];
		
		if($exists == 1){
			echo "<Span class='no'><strong>{$u}</strong> is not available</span>";
			$avalible = false;
			
		}
		else{
			echo "<Span class='yes'><strong>{$u}</strong> is available</span>";
			$avalible = true;
			if($create){
				_create_account($u, $p, $avalible);
			}
		}
	}
	
	function _create_account($u, $p, $avalible)
	{
		if($avalible){
			$connect = new mysqli("classroom.cs.unc.edu", "cookcb", "krackatoa4", "cookcbdb");
			
			$connect->query("INSERT INTO DNDLogin (Username, Password) VALUES ('".$u."','".$p."')");
			$connect->query("INSERT INTO DNDAbilities (Username) VALUES ('".$u."')");
			$connect->query("INSERT INTO DNDAttacks (Username, AID) VALUES ('".$u."', 1)");
			$connect->query("INSERT INTO DNDAttacks (Username, AID) VALUES ('".$u."', 2)");
			$connect->query("INSERT INTO DNDAttacks (Username, AID) VALUES ('".$u."', 3)");
			$connect->query("INSERT INTO DNDAttacks (Username, AID) VALUES ('".$u."', 4)");
			$connect->query("INSERT INTO DNDAttacks (Username, AID) VALUES ('".$u."', 5)");
			$connect->query("INSERT INTO DNDCharacter (Username) VALUES ('".$u."')");
			$connect->query("INSERT INTO DNDSaves (Username) VALUES ('".$u."')");
			$connect->query("INSERT INTO DNDStats (Username) VALUES ('".$u."')");
			$connect->query("INSERT INTO DNDSkills (Username) VALUES ('".$u."')");
			
			
			login($u);
		}
	}
	
	function _verify($u, $p)
	{
		$connect = new mysqli("classroom.cs.unc.edu", "cookcb", "krackatoa4", "cookcbdb");
		
		$result = $connect->query("SELECT count(*) FROM DNDLogin WHERE Username = '".$u."' AND Password = '".$p."'");
		$row = $result->fetch_row();
		$exists = $row[0];
		
		if($exists == 1){
			login($u);
		}
		else{
			echo "<Span class='no'>Incorrect username and/or password<Span>";
		}
	}
	
	function login($u)
	{
		session_start();
		
		$_SESSION['username'] = $u;
		echo "<input type='text' name='login' id='login' value='yes'>";
	}

?>