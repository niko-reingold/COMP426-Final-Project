<!DOCTYPE html>

<html>
	<?php
		session_start();
		
		
		$connect = new mysqli("classroom.cs.unc.edu", "cookcb", "krackatoa4", "cookcbdb");
		$username = $_SESSION['username'];
		
		$result = $connect->query("SELECT CName FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$CName = $row[0];
		
		$result = $connect->query("SELECT Class FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Class = $row[0];
		
		$result = $connect->query("SELECT Alignment FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Alignment = $row[0];
		
		$result = $connect->query("SELECT Deity FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Deities = $row[0];
		
		$result = $connect->query("SELECT Size FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Size = $row[0];
		
		
		$result = $connect->query("SELECT Race FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Race = $row[0];
		
		$result = $connect->query("SELECT Level FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Level = $row[0];
		
		$result = $connect->query("SELECT Gender FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Sex = $row[0];
		
		$result = $connect->query("SELECT Eyes FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Eyes = $row[0];
		
		$result = $connect->query("SELECT Hair FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Hair = $row[0];
		
		
		$result = $connect->query("SELECT PName FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$PName = $row[0];
		
		$result = $connect->query("SELECT Age FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Age = $row[0];
		
		$result = $connect->query("SELECT Height FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Height = $row[0];
		
		$result = $connect->query("SELECT Weight FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Weight = $row[0];	
		
		$result = $connect->query("SELECT Skin FROM DNDCharacter WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Skin = $row[0];	
		
		
		$result = $connect->query("SELECT Str FROM DNDAbilities WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Strength = $row[0];
		
		$result = $connect->query("SELECT Dex FROM DNDAbilities WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Dexterity = $row[0];
		
		$result = $connect->query("SELECT Con FROM DNDAbilities WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Constitution = $row[0];
		
		$result = $connect->query("SELECT Inteligence FROM DNDAbilities WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Inteligence = $row[0];
		
		$result = $connect->query("SELECT Wis FROM DNDAbilities WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Wisdom = $row[0];	
		
		$result = $connect->query("SELECT Cha FROM DNDAbilities WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Charisma = $row[0];
		
		
		$result = $connect->query("SELECT Fortitude FROM DNDSaves WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Fortitude = $row[0];
		
		$result = $connect->query("SELECT Reflex FROM DNDSaves WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Reflex = $row[0];	
		
		$result = $connect->query("SELECT Will FROM DNDSaves WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Will = $row[0];	
		
		
		$result = $connect->query("SELECT HP FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$HP = $row[0];
		
		$result = $connect->query("SELECT AC FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$AC = $row[0];
		
		$result = $connect->query("SELECT Speed FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Speed = $row[0];
		
		$result = $connect->query("SELECT TouchAC FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$TouchAC = $row[0];
		
		$result = $connect->query("SELECT FlatFootAC FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$FlatFootAC = $row[0];	
		
		$result = $connect->query("SELECT Initiative FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Initiative = $row[0];
		
		$result = $connect->query("SELECT BaseAttack FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$BaseAttack = $row[0];
		
		$result = $connect->query("SELECT Grapple FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Grapple = $row[0];	
		
		$result = $connect->query("SELECT SpellResistance FROM DNDStats WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$SpellResistance = $row[0];
		
		//Attack 1
		$result = $connect->query("SELECT Attack FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Attack1 = $row[0];
		$result = $connect->query("SELECT AttackBonus FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$AttackBonus1 = $row[0];
		$result = $connect->query("SELECT Damage FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Damage1 = $row[0];
		$result = $connect->query("SELECT Critical FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Critical11 = $row[0];
		$result = $connect->query("SELECT Ran FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Range1 = $row[0];
		$result = $connect->query("SELECT Type FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Type1 = $row[0];
		$result = $connect->query("SELECT Notes FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Notes1 = $row[0];
		$result = $connect->query("SELECT Ammo FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Ammo1 = $row[0];
		
		//Attack 2
		$result = $connect->query("SELECT Attack FROM DNDAttacks WHERE Username = '".$username."' AND AID = 2");
		$row = $result->fetch_row();
		$Attack2 = $row[0];
		$result = $connect->query("SELECT AttackBonus FROM DNDAttacks WHERE Username = '".$username."' AND AID = 2");
		$row = $result->fetch_row();
		$AttackBonus2 = $row[0];
		$result = $connect->query("SELECT Damage FROM DNDAttacks WHERE Username = '".$username."' AND AID = 2");
		$row = $result->fetch_row();
		$Damage2 = $row[0];
		$result = $connect->query("SELECT Critical FROM DNDAttacks WHERE Username = '".$username."' AND AID = 2");
		$row = $result->fetch_row();
		$Critical12 = $row[0];
		$result = $connect->query("SELECT Ran FROM DNDAttacks WHERE Username = '".$username."' AND AID = 1");
		$row = $result->fetch_row();
		$Range2 = $row[0];
		$result = $connect->query("SELECT Type FROM DNDAttacks WHERE Username = '".$username."' AND AID = 2");
		$row = $result->fetch_row();
		$Type2 = $row[0];
		$result = $connect->query("SELECT Notes FROM DNDAttacks WHERE Username = '".$username."' AND AID = 2");
		$row = $result->fetch_row();
		$Notes2 = $row[0];
		$result = $connect->query("SELECT Ammo FROM DNDAttacks WHERE Username = '".$username."' AND AID = 2");
		$row = $result->fetch_row();
		$Ammo2 = $row[0];
		
		//Attack 3
		$result = $connect->query("SELECT Attack FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$Attack3 = $row[0];
		$result = $connect->query("SELECT AttackBonus FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$AttackBonus3 = $row[0];
		$result = $connect->query("SELECT Damage FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$Damage3 = $row[0];
		$result = $connect->query("SELECT Critical FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$Critical13 = $row[0];
		$result = $connect->query("SELECT Ran FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$Range3 = $row[0];
		$result = $connect->query("SELECT Type FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$Type3 = $row[0];
		$result = $connect->query("SELECT Notes FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$Notes3 = $row[0];
		$result = $connect->query("SELECT Ammo FROM DNDAttacks WHERE Username = '".$username."' AND AID = 3");
		$row = $result->fetch_row();
		$Ammo3 = $row[0];
		
		//Attack 4
		$result = $connect->query("SELECT Attack FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$Attack4 = $row[0];
		$result = $connect->query("SELECT AttackBonus FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$AttackBonus4 = $row[0];
		$result = $connect->query("SELECT Damage FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$Damage4 = $row[0];
		$result = $connect->query("SELECT Critical FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$Critical14 = $row[0];
		$result = $connect->query("SELECT Ran FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$Range4 = $row[0];
		$result = $connect->query("SELECT Type FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$Type4 = $row[0];
		$result = $connect->query("SELECT Notes FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$Notes4 = $row[0];
		$result = $connect->query("SELECT Ammo FROM DNDAttacks WHERE Username = '".$username."' AND AID = 4");
		$row = $result->fetch_row();
		$Ammo4 = $row[0];
		
		//Attack 5
		$result = $connect->query("SELECT Attack FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$Attack5 = $row[0];
		$result = $connect->query("SELECT AttackBonus FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$AttackBonus5 = $row[0];
		$result = $connect->query("SELECT Damage FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$Damage5 = $row[0];
		$result = $connect->query("SELECT Critical FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$Critical15 = $row[0];
		$result = $connect->query("SELECT Ran FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$Range5 = $row[0];
		$result = $connect->query("SELECT Type FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$Type5 = $row[0];
		$result = $connect->query("SELECT Notes FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$Notes5 = $row[0];
		$result = $connect->query("SELECT Ammo FROM DNDAttacks WHERE Username = '".$username."' AND AID = 5");
		$row = $result->fetch_row();
		$Ammo5 = $row[0];
		
		
		//Skills
		$result = $connect->query("SELECT Appraise FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Appraise = $row[0];
		$result = $connect->query("SELECT Balance FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Balance = $row[0];
		$result = $connect->query("SELECT Bluff FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Bluff = $row[0];
		$result = $connect->query("SELECT Climb FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Climb = $row[0];
		$result = $connect->query("SELECT Concentration FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Concentration = $row[0];
		$result = $connect->query("SELECT Craft1 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Craft1 = $row[0];
		$result = $connect->query("SELECT Craft2 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Craft2 = $row[0];
		$result = $connect->query("SELECT Craft3 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Craft3 = $row[0];
		$result = $connect->query("SELECT DecipherScript FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$DecipherScript = $row[0];
		$result = $connect->query("SELECT Diplomacy FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Diplomacy = $row[0];
		$result = $connect->query("SELECT DisableDevice FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$DisableDevice = $row[0];
		$result = $connect->query("SELECT Disguise FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Disguise = $row[0];
		$result = $connect->query("SELECT EscapeArtist FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$EscapeArtist = $row[0];
		$result = $connect->query("SELECT Forgery FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Forgery = $row[0];
		$result = $connect->query("SELECT GatherInformation FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$GatherInformation = $row[0];
		$result = $connect->query("SELECT HandleAnimal FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$HandleAnimal = $row[0];
		$result = $connect->query("SELECT Heal FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Heal = $row[0];
		$result = $connect->query("SELECT Hide FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Hide = $row[0];
		$result = $connect->query("SELECT Intimidate FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Intimidate = $row[0];
		$result = $connect->query("SELECT Jump FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Jump = $row[0];
		$result = $connect->query("SELECT Knowledge1 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Knowledge1 = $row[0];
		$result = $connect->query("SELECT Knowledge2 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Knowledge2 = $row[0];
		$result = $connect->query("SELECT Knowledge3 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Knowledge3 = $row[0];
		$result = $connect->query("SELECT Knowledge4 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Knowledge4 = $row[0];
		$result = $connect->query("SELECT Knowledge5 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Knowledge5 = $row[0];
		$result = $connect->query("SELECT Listen FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Listen = $row[0];
		$result = $connect->query("SELECT MoveSilently FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$MoveSilently = $row[0];
		$result = $connect->query("SELECT OpenLock FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$OpenLock = $row[0];
		$result = $connect->query("SELECT Perform1 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Perform1 = $row[0];
		$result = $connect->query("SELECT Perform2 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Perform2 = $row[0];
		$result = $connect->query("SELECT Perform3 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Perform3 = $row[0];
		$result = $connect->query("SELECT Profession1 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Profession1 = $row[0];
		$result = $connect->query("SELECT Profession2 FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Profession2 = $row[0];
		$result = $connect->query("SELECT Ride FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Ride = $row[0];
		$result = $connect->query("SELECT Search FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Search = $row[0];
		$result = $connect->query("SELECT SenseMotive FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$SenseMotive = $row[0];
		$result = $connect->query("SELECT SleightOfHand FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$SleightOfHand = $row[0];
		$result = $connect->query("SELECT Spellcraft FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Spellcraft = $row[0];
		$result = $connect->query("SELECT Spot FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Spot = $row[0];
		$result = $connect->query("SELECT Survival FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Survival = $row[0];
		$result = $connect->query("SELECT Swim FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Swim = $row[0];
		$result = $connect->query("SELECT Tumble FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$Tumble = $row[0];
		$result = $connect->query("SELECT UseMagicDevice FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$UseMagicDevice = $row[0];
		$result = $connect->query("SELECT UseRope FROM DNDSkills WHERE Username = '".$username."'");
		$row = $result->fetch_row();
		$UseRope = $row[0];
	?>
    <head>
        <title>Form Page</title>
        <link rel="stylesheet" type="text/css" href="FP.css">
        <script type="text/javascript" src="jquery-1.11.3.js"></script>
        <script type="text/javascript" src="FP.js"></script>
    </head>
    <body>
    	
    	<div id = "Dice">
    		<table>
    			<tr>
    				<td><img src="dnd.jpg" id="img"></td>
	        		<td><button id = "D20">D20</button></td>
	            	<td><button id = "D12">D12</button></td>
	            	<td><button id = "D10">D10</button></td>
	            	<td><button id = "D8">D8</button></td>
	            	<td><button id = "D6">D6</button></td>
	         		<td><button id = "D4">D4</button></td>
	            	<td><p id = "roll"></p></td>
	            </tr>
	            
	           
	         </table> 
	         
	    </div>
	       <!--<input type = "text" value = "<?php echo htmlspecialchars($username); ?>">-->
	       
    	<form action="submit.php" method="post">
    		<button type = "submit" id = "update">Update</button>
	        <div id = "Character">
	            <table>
	                <tr>
	                    <td>Character Name</td>
	                    <td><input type = "text" name = "form[CName]" value = "<?php echo htmlspecialchars($CName); ?>"></td>
	                    <td>Class</td>
	                    <td><input type = "text" name = "form[Class]" value = "<?php echo htmlspecialchars($Class); ?>"></td>
	                    <td>Alignment</td>
	                    <td><input type = "text" name = "form[Alignment]" value = "<?php echo htmlspecialchars($Alignment); ?>"></td>
	                    <td>Deities</td>
	                    <td><input type = "text" name = "form[Deities]" value = "<?php echo htmlspecialchars($Deities); ?>"></td>
	                    <td>Size</td>
	                    <td><input type = "text" name = "form[Size]" value = "<?php echo htmlspecialchars($Size); ?>"></td>
	                </tr>
	                <tr>
	                    <td>Race</td>
	                    <td><input type = "text" id = "Race" name = "form[Race]" value = "<?php echo htmlspecialchars($Race); ?>"></td>
	                    <td>Level</td>
	                    <td><input type = "text" id = "Level" name = "form[Level]"value = "<?php echo htmlspecialchars($Level); ?>"></td>
	                    <td>Sex</td>
	                    <td><input type = "text" id = "Sex" name = "form[Sex]" value = "<?php echo htmlspecialchars($Sex); ?>"></td>
	                    <td>Eyes</td>
	                    <td><input type = "text" id = "Eyes" name = "form[Eyes]" value = "<?php echo htmlspecialchars($Eyes); ?>"></td>
	                    <td>Hair</td>
	                    <td><input type = "text" id = "Hair" name = "form[Hair]" value = "<?php echo htmlspecialchars($Hair); ?>"></td>
	                </tr>
	                <tr>
	                    <td>Player Name</td>
	                    <td><input type = "text"  id = "PName" name = "form[PName]" value = "<?php echo htmlspecialchars($PName); ?>"></td>
	                    <td>Age</td>
	                    <td><input type = "text" id = "Age" name = "form[Age]" value = "<?php echo htmlspecialchars($Age); ?>"></td>
	                    <td>Height</td>
	                    <td><input type = "text" id = "Height" name = "form[Height]" value = "<?php echo htmlspecialchars($Height); ?>"></td>
	                    <td>Weight</td>
	                    <td><input type = "text" id = "Weight" name = "form[Weight]" value = "<?php echo htmlspecialchars($Weight); ?>"></td>
	                    <td>Skin</td>
	                    <td><input type = "text" id = "Skin" name = "form[Skin]" value = "<?php echo htmlspecialchars($Skin); ?>"></td>  
	                </tr>
	            </table> 
	        </div>
	        <div id = "Abilities">
	            <table>
	                <tr>
	                    <td>Strength</td>
	                    <td><input type = "text" id = "Strength" name = "form[Strength]" value = "<?php echo htmlspecialchars($Strength); ?>"></td>
	                </tr>
	                <tr>
	                    <td>Dexterity</td>
	                    <td><input type = "text" id = "Dexterity" name = "form[Dexterity]" value = "<?php echo htmlspecialchars($Dexterity); ?>"></td>
	                </tr>
	                <tr>
	                    <td>Constitution</td>
	                    <td><input type = "text" id = "Constitution" name = "form[Constitution]" value = "<?php echo htmlspecialchars($Constitution); ?>"></td>
	                </tr>
	                <tr>
	                    <td>Inteligence</td>
	                    <td><input type = "text" id = "Inteligence" name = "form[Inteligence]" value = "<?php echo htmlspecialchars($Inteligence); ?>"></td>
	                </tr>
	                <tr>
	                    <td>Wisdom</td>
	                    <td><input type = "text" id = "Wisdom" name = "form[Wisdom]" value = "<?php echo htmlspecialchars($Wisdom); ?>"></td>
	                </tr>
	                <tr>
	                    <td>Charisma</td>
	                    <td><input type = "text" id = "Charisma" name = "form[Charisma]" value = "<?php echo htmlspecialchars($Charisma); ?>"></td>
	                </tr>
	            </table>
	        </div>
	        <div id = "Saves">
	        	<table>
	        		<tr>
	        			<td>Fortitude</td>
	        			<td><input type = "text" id = "Fortitude" name = "form[Fortitude]" value = "<?php echo htmlspecialchars($Fortitude); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Reflex</td>
	        			<td><input type = "text" id = "Reflex" name = "form[Reflex]" value = "<?php echo htmlspecialchars($Reflex); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Will</td>
	        			<td><input type = "text" id = "Will" name = "form[Will]" value = "<?php echo htmlspecialchars($Will); ?>"></td>
	        		</tr>
	        		
	        	</table>
	        </div>
	        <div id = "Misc">
	        	<table>
	        		<tr>
	        			<td>HP</td>
	        			<td><input type = "text" id = "HP" name = "form[HP]" value = "<?php echo htmlspecialchars($HP); ?>"></td>
	        			
	        			<td>Speed</td>
	        			<td><input type = "text" id = "Speed" name = "form[Speed]" value = "<?php echo htmlspecialchars($Speed); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>AC</td>
	        			<td><input type = "text" id = "AC" name = "form[AC]" value = "<?php echo htmlspecialchars($AC); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Touch Armor Class</td>
	        			<td><input type = "text" id = "TouchAC" name = "form[TouchAC]" value = "<?php echo htmlspecialchars($TouchAC); ?>"></td>
	        			
	        			<td>Flat-Footed AC</td>
	        			<td><input type = "text" id = "FlatFootAC" name = "form[FlatFootAC]" value = "<?php echo htmlspecialchars($FlatFootAC); ?>"></td>
	        		<tr>
	        			<td>Initiative</td>
	        			<td><input type = "text" id = "Initiative" name = "form[Initiative]" value = "<?php echo htmlspecialchars($Initiative); ?>"></td>
	        		</tr>
	        	</table>
	        </div>
	        <div id = "Misc2">
	        	<table>
	        		<tr>
	        			<td>Base Attack Bonus</td>
	        			<td><input type = "text" id = "BaseAttack" name = "form[BaseAttack]" value = "<?php echo htmlspecialchars($BaseAttack); ?>"></td>
	        			
	        			<td>Spell Resistance</td>
	        			<td><input type = "text" id = "SpellResistance" name = "form[SpellResistance]" value = "<?php echo htmlspecialchars($SpellResistance); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Grapple</td>
	        			<td><input type = "text" id = "Grapple" name = "form[Grapple]" value = "<?php echo htmlspecialchars($Grapple); ?>"></td>
	        		</tr>
	        	</table>
	        </div>
	        <div id = 'Attacks'>
	        	<table id = 'Attack1'>
	        		<tr>
	        			<td>Attack</td>
	        			<td><input type = "text" id = "Attack" name = "form[Attack1]" value = "<?php echo htmlspecialchars($Attack1); ?>"></td>
	        			<td>Attack Bonus</td>
	        			<td><input type = "text" id = "Attack Bonus" name = "form[AttackBonus1]" value = "<?php echo htmlspecialchars($AttackBonus1); ?>"></td>
	        			<td>Damage</td>
	        			<td><input type = "text" id = "Damage" name = "form[Damage1]" value = "<?php echo htmlspecialchars($Damage1); ?>"></td>
	        			<td>Critical</td>
	        			<td><input type = "text" id = "Critical" name = "form[Critical1]" value = "<?php echo htmlspecialchars($Critical1); ?>"></td>
	        		</tr>
	        		<tr>	
	        			<td>Range</td>
	        			<td><input type = "text" id = "Range" name = "form[Range1]" value = "<?php echo htmlspecialchars($Range1); ?>"></td>
	        			<td>Type</td>
	        			<td><input type = "text" id = "Type" name = "form[Type1]" value = "<?php echo htmlspecialchars($Type1); ?>"></td>
	        			<td>Notes</td>
	        			<td><input type = "text" id = "Notes" name = "form[Notes1]" value = "<?php echo htmlspecialchars($Notes1); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Ammo</td>
	        			<td><input type = "text" id = "Ammo" name = "form[Ammo1]" value = "<?php echo htmlspecialchars($Ammo1); ?>"></td>
	        		</tr>
	        	</table>
	        	<table id = 'Attack2'>
	        		<tr>
	        			<td>Attack</td>
	        			<td><input type = "text" id = "Attack" name = "form[Attack2]" value = "<?php echo htmlspecialchars($Attack2); ?>"></td>
	        			<td>Attack Bonus</td>
	        			<td><input type = "text" id = "Attack Bonus" name = "form[AttackBonus2]" value = "<?php echo htmlspecialchars($AttackBonus2); ?>"></td>
	        			<td>Damage</td>
	        			<td><input type = "text" id = "Damage" name = "form[Damage2]" value = "<?php echo htmlspecialchars($Damage2); ?>"></td>
	        			<td>Critical</td>
	        			<td><input type = "text" id = "Critical" name = "form[Critical2]" value = "<?php echo htmlspecialchars($Critical2); ?>"></td>
	        		</tr>
	        		<tr>	
	        			<td>Range</td>
	        			<td><input type = "text" id = "Range" name = "form[Range2]" value = "<?php echo htmlspecialchars($Range2); ?>"></td>
	        			<td>Type</td>
	        			<td><input type = "text" id = "Type" name = "form[Type2]" value = "<?php echo htmlspecialchars($Type2); ?>"></td>
	        			<td>Notes</td>
	        			<td><input type = "text" id = "Notes" name = "form[Notes2]" value = "<?php echo htmlspecialchars($Notes2); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Ammo</td>
	        			<td><input type = "text" id = "Ammo" name = "form[Ammo2]" value = "<?php echo htmlspecialchars($Ammo2); ?>"></td>
	        		</tr>
	        	</table>
	        	<table id = 'Attack3'>
	        		<tr>
	        			<td>Attack</td>
	        			<td><input type = "text" id = "Attack" name = "form[Attack3]" value = "<?php echo htmlspecialchars($Attack3); ?>"></td>
	        			<td>Attack Bonus</td>
	        			<td><input type = "text" id = "Attack Bonus" name = "form[AttackBonus3]" value = "<?php echo htmlspecialchars($AttackBonus3); ?>"></td>
	        			<td>Damage</td>
	        			<td><input type = "text" id = "Damage" name = "form[Damage3]" value = "<?php echo htmlspecialchars($Damage3); ?>"></td>
	        			<td>Critical</td>
	        			<td><input type = "text" id = "Critical" name = "form[Critical3]" value = "<?php echo htmlspecialchars($Critical3); ?>"></td>
	        		</tr>
	        		<tr>	
	        			<td>Range</td>
	        			<td><input type = "text" id = "Range" name = "form[Range3]" value = "<?php echo htmlspecialchars($Range3); ?>"></td>
	        			<td>Type</td>
	        			<td><input type = "text" id = "Type" name = "form[Type3]" value = "<?php echo htmlspecialchars($Type3); ?>"></td>
	        			<td>Notes</td>
	        			<td><input type = "text" id = "Notes" name = "form[Notes3]" value = "<?php echo htmlspecialchars($Notes3); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Ammo</td>
	        			<td><input type = "text" id = "Ammo" name = "form[Ammo3]" value = "<?php echo htmlspecialchars($Ammo3); ?>"></td>
	        		</tr>
	        	</table>
	        	<table id = 'Attack4'>
	        		<tr>
	        			<td>Attack</td>
	        			<td><input type = "text" id = "Attack" name = "form[Attack4]" value = "<?php echo htmlspecialchars($Attack4); ?>"></td>
	        			<td>Attack Bonus</td>
	        			<td><input type = "text" id = "Attack Bonus" name = "form[AttackBonus4]" value = "<?php echo htmlspecialchars($AttackBonus4); ?>"></td>
	        			<td>Damage</td>
	        			<td><input type = "text" id = "Damage" name = "form[Damage4]" value = "<?php echo htmlspecialchars($Damage4); ?>"></td>
	        			<td>Critical</td>
	        			<td><input type = "text" id = "Critical" name = "form[Critical4]" value = "<?php echo htmlspecialchars($Critical4); ?>"></td>
	        		</tr>
	        		<tr>	
	        			<td>Range</td>
	        			<td><input type = "text" id = "Range" name = "form[Range4]" value = "<?php echo htmlspecialchars($Range4); ?>"></td>
	        			<td>Type</td>
	        			<td><input type = "text" id = "Type" name = "form[Type4]" value = "<?php echo htmlspecialchars($Type4); ?>"></td>
	        			<td>Notes</td>
	        			<td><input type = "text" id = "Notes" name = "form[Notes4]" value = "<?php echo htmlspecialchars($Notes4); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Ammo</td>
	        			<td><input type = "text" id = "Ammo" name = "form[Ammo4]" value = "<?php echo htmlspecialchars($Ammo4); ?>"></td>
	        		</tr>
	        	</table>
	        	<table id = 'Attack5'>
	        		<tr>
	        			<td>Attack</td>
	        			<td><input type = "text" id = "Attack" name = "form[Attack5]" value = "<?php echo htmlspecialchars($Attack5); ?>"></td>
	        			<td>Attack Bonus</td>
	        			<td><input type = "text" id = "Attack Bonus" name = "form[AttackBonus5]" value = "<?php echo htmlspecialchars($AttackBonus5); ?>"></td>
	        			<td>Damage</td>
	        			<td><input type = "text" id = "Damage" name = "form[Damage5]" value = "<?php echo htmlspecialchars($Damage5); ?>"></td>
	        			<td>Critical</td>
	        			<td><input type = "text" id = "Critical" name = "form[Critical5]" value = "<?php echo htmlspecialchars($Critical5); ?>"></td>
	        		</tr>
	        		<tr>	
	        			<td>Range</td>
	        			<td><input type = "text" id = "Range" name = "form[Range5]" value = "<?php echo htmlspecialchars($Range5); ?>"></td>
	        			<td>Type</td>
	        			<td><input type = "text" id = "Type" name = "form[Type5]" value = "<?php echo htmlspecialchars($Type5); ?>"></td>
	        			<td>Notes</td>
	        			<td><input type = "text" id = "Notes" name = "form[Notes5]" value = "<?php echo htmlspecialchars($Notes5); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Ammo</td>
	        			<td><input type = "text" id = "Ammo" name = "form[Ammo5]" value = "<?php echo htmlspecialchars($Ammo5); ?>"></td>
	        		</tr>
	        	</table>
	        </div>
	        <div id = "skills">
	        	<table id = "SkillsTable">
	        		<tr>
	        			<td>Appraise</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Appraise]" value = "<?php echo htmlspecialchars($Appraise); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Balance</td>
	        			<td><input type = "text" id = "Balance" name = "form[Balance]" value = "<?php echo htmlspecialchars($Balance); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Bluff</td>
	        			<td><input type = "text" id = "Bluff" name = "form[Bluff]" value = "<?php echo htmlspecialchars($Bluff); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Climb</td>
	        			<td><input type = "text" id = "Climb" name = "form[Climb]" value = "<?php echo htmlspecialchars($Climb); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Concentration</td>
	        			<td><input type = "text" id = "Concentration" name = "form[Concentration]" value = "<?php echo htmlspecialchars($Concentration); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Craft1</td>
	        			<td><input type = "text" id = "Craft1" name = "form[Craft1]" value = "<?php echo htmlspecialchars($Craft1); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Craft2</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Craft2]" value = "<?php echo htmlspecialchars($Craft2); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Craft3</td>
	        			<td><input type = "text" id = "Craft3" name = "form[Craft3]" value = "<?php echo htmlspecialchars($Craft3); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Decipher Script</td>
	        			<td><input type = "text" id = "Appraise" name = "form[DecipherScript]" value = "<?php echo htmlspecialchars($DecipherScript); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Diplomacy</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Diplomacy]" value = "<?php echo htmlspecialchars($Diplomacy); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Disable Device</td>
	        			<td><input type = "text" id = "Appraise" name = "form[DisableDevice]" value = "<?php echo htmlspecialchars($DisableDevice); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Disguise</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Disguise]" value = "<?php echo htmlspecialchars($Disguise); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Escape Artist</td>
	        			<td><input type = "text" id = "Appraise" name = "form[EscapeArtist]" value = "<?php echo htmlspecialchars($EscapeArtist); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Forgery</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Forgery]" value = "<?php echo htmlspecialchars($Forgery); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Gather Information</td>
	        			<td><input type = "text" id = "Appraise" name = "form[GatherInformation]" value = "<?php echo htmlspecialchars($GatherInformation); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Handle Animal</td>
	        			<td><input type = "text" id = "Appraise" name = "form[HandleAnimal]" value = "<?php echo htmlspecialchars($HandleAnimal); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Heal</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Heal]" value = "<?php echo htmlspecialchars($Heal); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Hide</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Hide]" value = "<?php echo htmlspecialchars($Hide); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Intimidate</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Intimidate]" value = "<?php echo htmlspecialchars($Intimidate); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Jump</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Jump]" value = "<?php echo htmlspecialchars($Jump); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Knowledge1</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Knowledge1]" value = "<?php echo htmlspecialchars($Knowledge1); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Knowledge2</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Knowledge2]" value = "<?php echo htmlspecialchars($Knowledge2); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Knowledge3</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Knowledge3]" value = "<?php echo htmlspecialchars($Knowledge3); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Knowledge4</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Knowledge4]" value = "<?php echo htmlspecialchars($Knowledge4); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Knowledge5</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Knowledge5]" value = "<?php echo htmlspecialchars($Knowledge5); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Listen</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Listen]" value = "<?php echo htmlspecialchars($Listen); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Move Silently</td>
	        			<td><input type = "text" id = "Appraise" name = "form[MoveSilently]" value = "<?php echo htmlspecialchars($MoveSilently); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Open Lock</td>
	        			<td><input type = "text" id = "Appraise" name = "form[OpenLock]" value = "<?php echo htmlspecialchars($OpenLock); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Perform1</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Perform1]" value = "<?php echo htmlspecialchars($Perform1); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Perform2</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Perform2]" value = "<?php echo htmlspecialchars($Perform2); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Perform3</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Perform3]" value = "<?php echo htmlspecialchars($Perform3); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Profession1</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Profession1]" value = "<?php echo htmlspecialchars($Profession1); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Profession2</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Profession2]" value = "<?php echo htmlspecialchars($Profession2); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Ride</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Ride]" value = "<?php echo htmlspecialchars($Ride); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Search</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Search]" value = "<?php echo htmlspecialchars($Search); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Sense Motive</td>
	        			<td><input type = "text" id = "Appraise" name = "form[SenseMotive]" value = "<?php echo htmlspecialchars($SenseMotive); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Sleight of Hand</td>
	        			<td><input type = "text" id = "Appraise" name = "form[SleightOfHand]" value = "<?php echo htmlspecialchars($SleightOfHand); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Spellcraft</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Spellcraft]" value = "<?php echo htmlspecialchars($Spellcraft); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Spot</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Spot]" value = "<?php echo htmlspecialchars($Spot); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Survival</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Survival]" value = "<?php echo htmlspecialchars($Survival); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Swim</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Swim]" value = "<?php echo htmlspecialchars($Swim); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Tumble</td>
	        			<td><input type = "text" id = "Appraise" name = "form[Tumble]" value = "<?php echo htmlspecialchars($Tumble); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Use Magic Device</td>
	        			<td><input type = "text" id = "Appraise" name = "form[UseMagicDevice]" value = "<?php echo htmlspecialchars($UseMagicDevice); ?>"></td>
	        		</tr>
	        		<tr>
	        			<td>Use Rope</td>
	        			<td><input type = "text" id = "Appraise" name = "form[UseRope]" value = "<?php echo htmlspecialchars($UseRope); ?>"></td>
	        		</tr>
	        	</table>
	        </div>
	       </form>
	       <br>
	       <br>
	       <form action="delete.php" method="post">
	       		<button id = "delete">Delete Account</button>
	       </form>
    </body>
</html>