
<html>
<body>
<?php
session_start();

$connect = new mysqli("classroom.cs.unc.edu", "cookcb", "krackatoa4", "cookcbdb");
$data = $_POST['form'];

$name = $data['CName'];
$Class = $data['Class'];
$Alignment = $data['Alignment'];
$Deities = $data['Deities'];
$Size = $data['Size'];

$Race = $data['Race'];
$Level = $data['Level'];
$Sex = $data['Sex'];
$Eyes = $data['Eyes'];
$Hair = $data['Hair'];

$PName = $data['PName'];
$Age = $data['Age'];
$Height = $data['Height'];
$Weight = $data['Weight'];
$Skin = $data['Skin'];

$Strength = $data['Strength'];
$Dexterity = $data['Dexterity'];
$Constitution = $data['Constitution'];
$Inteligence = $data['Inteligence'];
$Wisdom = $data['Wisdom'];
$Charisma = $data['Charisma'];

$Fortitude = $data['Fortitude'];
$Reflex = $data['Reflex'];
$Will = $data['Will'];

$HP = $data['HP'];
$Speed = $data['Speed'];
$AC = $data['AC'];
$TouchAC = $data['TouchAC'];
$FlatFootAC = $data['FlatFootAC'];
$Initiative = $data['Inititative'];
$BaseAttack = $data['BaseAttack'];
$Grapple = $data['Grapple'];
$SpellResistance = $data['SpellResistance'];

//Attack 1
$Attack1 = $data['Attack1'];
$AttackBonus1 = $data['AttackBonus1'];
$Damage1 = $data['Damage1'];
$Critical1 = $data['Critical1'];
$Range1 = $data['Range1'];
$Type1 = $data['Type1'];
$Notes1 = $data['Notes1'];
$Ammo1 = $data['Ammo1'];

//Attack 1
$Attack2 = $data['Attack2'];
$AttackBonus2 = $data['AttackBonus2'];
$Damage2 = $data['Damage2'];
$Critical2 = $data['Critical2'];
$Range2 = $data['Range2'];
$Type2 = $data['Type2'];
$Notes2 = $data['Notes2'];
$Ammo2 = $data['Ammo2'];

//Attack 3
$Attack3 = $data['Attack3'];
$AttackBonus3 = $data['AttackBonus3'];
$Damage3 = $data['Damage3'];
$Critical3 = $data['Critical3'];
$Range3 = $data['Range3'];
$Type3 = $data['Type3'];
$Notes3 = $data['Notes3'];
$Ammo3 = $data['Ammo3'];

//Attack 4
$Attack4 = $data['Attack4'];
$AttackBonus4 = $data['AttackBonus4'];
$Damage4 = $data['Damage4'];
$Critical4 = $data['Critical4'];
$Range4 = $data['Range4'];
$Type4 = $data['Type4'];
$Notes4 = $data['Notes4'];
$Ammo4 = $data['Ammo4'];

//Attack 5
$Attack5 = $data['Attack5'];
$AttackBonus5 = $data['AttackBonus5'];
$Damage5 = $data['Damage5'];
$Critical5 = $data['Critical5'];
$Range5 = $data['Range5'];
$Type5 = $data['Type5'];
$Notes5 = $data['Notes5'];
$Ammo5 = $data['Ammo5'];

//Skills
$Appraise = $data['Appraise'];
$Balance = $data['Balance'];
$Bluff = $data['Bluff'];
$Climb = $data['Climb'];
$Concentration = $data['Concentration'];
$Craft1 = $data['Craft1'];
$Craft2 = $data['Craft2'];
$Craft3 = $data['Craft3'];
$DecipherScript = $data['DecipherScript'];
$Diplomacy = $data['Diplomacy'];
$DisableDevice = $data['DisableDevice'];
$Disguise = $data['Disguise'];
$EscapeArtist = $data['EscapeArtist'];
$Forgery = $data['Forgery'];
$GatherInformation = $data['GatherInformation'];
$HandleAnimal = $data['HandleAnimal'];
$Heal = $data['Heal'];
$Hide = $data['Hide'];
$Intimidate = $data['Intimidate'];
$Jump = $data['Jump'];
$Knowledge1 = $data['Knowledge1'];
$Knowledge2 = $data['Knowledge2'];
$Knowledge3 = $data['Knowledge3'];
$Knowledge4 = $data['Knowledge4'];
$Knowledge5 = $data['Knowledge5'];
$Listen = $data['Listen'];
$MoveSilently = $data['MoveSilently'];
$OpenLock = $data['OpenLock'];
$Perform1 = $data['Perform1'];
$Perform2 = $data['Perform2'];
$Perform3 = $data['Perform3'];
$Profession1 = $data['Profession1'];
$Profession2 = $data['Profession2'];
$Ride = $data['Ride'];
$Search = $data['Search'];
$SenseMotive = $data['SenseMotive'];
$SleightOfHand = $data['SleightOfHand'];
$Spellcraft = $data['Spellcraft'];
$Spot = $data['Spot'];
$Survival = $data['Survival'];
$Swim = $data['Swim'];
$Tumble = $data['Tumble'];
$UseMagicDevice = $data['UseMagicDevice'];
$UseRope = $data['UseRope'];

$username = $_SESSION['username'];

$connect->query("update DNDCharacter set CName = '".$name."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Class = '".$Class."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Alignment = '".$Alignment."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Deity = '".$Deities."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Size = '".$Size."' where Username = '".$username."'");

$connect->query("update DNDCharacter set Race = '".$Race."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Level = '".$Level."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Gender = '".$Sex."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Eyes = '".$Eyes."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Hair = '".$Hair."' where Username = '".$username."'");

$connect->query("update DNDCharacter set PName = '".$PName."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Age = '".$Age."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Height = '".$Height."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Weight = '".$Weight."' where Username = '".$username."'");
$connect->query("update DNDCharacter set Skin = '".$Skin."' where Username = '".$username."'");

$connect->query("update DNDAbilities set Str = '".$Strength."' where Username = '".$username."'");
$connect->query("update DNDAbilities set Dex = '".$Dexterity."' where Username = '".$username."'");
$connect->query("update DNDAbilities set Con = '".$Constitution."' where Username = '".$username."'");
$connect->query("update DNDAbilities set Int = '".$Inteligence."' where Username = '".$username."'");
$connect->query("update DNDAbilities set Wis = '".$Wisdom."' where Username = '".$username."'");
$connect->query("update DNDAbilities set Cha = '".$Charisma."' where Username = '".$username."'");

$connect->query("update DNDSaves set Fortitude = '".$Fortitude."' where Username = '".$username."'");
$connect->query("update DNDSaves set Reflex = '".$Reflex."' where Username = '".$username."'");
$connect->query("update DNDSaves set Will = '".$Will."' where Username = '".$username."'");

$connect->query("update DNDStats set HP = '".$HP."' where Username = '".$username."'");
$connect->query("update DNDStats set AC = '".$AC."' where Username = '".$username."'");
$connect->query("update DNDStats set Speed = '".$Speed."' where Username = '".$username."'");
$connect->query("update DNDStats set TouchAC = '".$TouchAC."' where Username = '".$username."'");
$connect->query("update DNDStats set FlatFootAC = '".$FlatFootAC."' where Username = '".$username."'");
$connect->query("update DNDStats set Inititative = '".$Initiative."' where Username = '".$username."'");
$connect->query("update DNDStats set BaseAttack = '".$BaseAttack."' where Username = '".$username."'");
$connect->query("update DNDStats set Grapple = '".$Grapple."' where Username = '".$username."'");
$connect->query("update DNDStats set SpellResistance = '".$SpellResistance."' where Username = '".$username."'");

$connect->query("update DNDAttacks set Attack = '".$Attack1."' where Username = '".$username."' AID = 1");
$connect->query("update DNDAttacks set AttackBonus = '".$AttackBonus1."' where Username = '".$username."' AID = 1");
$connect->query("update DNDAttacks set Damage = '".$Damage1."' where Username = '".$username."' AID = 1");
$connect->query("update DNDAttacks set Critical = '".$Crtical1."' where Username = '".$username."' AID = 1");
$connect->query("update DNDAttacks set Range = '".$Range1."' where Username = '".$username."' AID = 1");
$connect->query("update DNDAttacks set Type = '".$Type1."' where Username = '".$username."' AID = 1");
$connect->query("update DNDAttacks set Notes = '".$Notes1."' where Username = '".$username."' AID = 1");
$connect->query("update DNDAttacks set Ammo = '".$Ammo1."' where Username = '".$username."' AID = 1");

$connect->query("update DNDAttacks set Attack = '".$Attack2."' where Username = '".$username."' AID = 2");
$connect->query("update DNDAttacks set AttackBonus = '".$AttackBonus2."' where Username = '".$username."' AID = 2");
$connect->query("update DNDAttacks set Damage = '".$Damage2."' where Username = '".$username."' AID = 2");
$connect->query("update DNDAttacks set Critical = '".$Crtical2."' where Username = '".$username."' AID = 2");
$connect->query("update DNDAttacks set Range = '".$Range2."' where Username = '".$username."' AID = 2");
$connect->query("update DNDAttacks set Type = '".$Type2."' where Username = '".$username."' AID = 2");
$connect->query("update DNDAttacks set Notes = '".$Notes2."' where Username = '".$username."' AID = 2");
$connect->query("update DNDAttacks set Ammo = '".$Ammo2."' where Username = '".$username."' AID = 2");

$connect->query("update DNDAttacks set Attack = '".$Attack3."' where Username = '".$username."' AID = 3");
$connect->query("update DNDAttacks set AttackBonus = '".$AttackBonus3."' where Username = '".$username."' AID = 3");
$connect->query("update DNDAttacks set Damage = '".$Damage3."' where Username = '".$username."' AID = 3");
$connect->query("update DNDAttacks set Critical = '".$Crtical3."' where Username = '".$username."' AID = 3");
$connect->query("update DNDAttacks set Range = '".$Range3."' where Username = '".$username."' AID = 3");
$connect->query("update DNDAttacks set Type = '".$Type3."' where Username = '".$username."' AID = 3");
$connect->query("update DNDAttacks set Notes = '".$Notes3."' where Username = '".$username."' AID = 3");
$connect->query("update DNDAttacks set Ammo = '".$Ammo3."' where Username = '".$username."' AID = 3");

$connect->query("update DNDAttacks set Attack = '".$Attack4."' where Username = '".$username."' AID = 4");
$connect->query("update DNDAttacks set AttackBonus = '".$AttackBonus4."' where Username = '".$username."' AID = 4");
$connect->query("update DNDAttacks set Damage = '".$Damage4."' where Username = '".$username."' AID = 4");
$connect->query("update DNDAttacks set Critical = '".$Crtical4."' where Username = '".$username."' AID = 4");
$connect->query("update DNDAttacks set Range = '".$Range4."' where Username = '".$username."' AID = 4");
$connect->query("update DNDAttacks set Type = '".$Type4."' where Username = '".$username."' AID = 4");
$connect->query("update DNDAttacks set Notes = '".$Notes4."' where Username = '".$username."' AID = 4");
$connect->query("update DNDAttacks set Ammo = '".$Ammo4."' where Username = '".$username."' AID = 4");

$connect->query("update DNDAttacks set Attack = '".$Attack5."' where Username = '".$username."' AID = 5");
$connect->query("update DNDAttacks set AttackBonus = '".$AttackBonus5."' where Username = '".$username."' AID = 5");
$connect->query("update DNDAttacks set Damage = '".$Damage5."' where Username = '".$username."' AID = 5");
$connect->query("update DNDAttacks set Critical = '".$Crtical5."' where Username = '".$username."' AID = 5");
$connect->query("update DNDAttacks set Range = '".$Range5."' where Username = '".$username."' AID = 5");
$connect->query("update DNDAttacks set Type = '".$Type5."' where Username = '".$username."' AID = 5");
$connect->query("update DNDAttacks set Notes = '".$Notes5."' where Username = '".$username."' AID = 5");
$connect->query("update DNDAttacks set Ammo = '".$Ammo5."' where Username = '".$username."' AID = 5");

$connect->query("update DNDSkills set Appraise = '".$Appraise."' where Username = '".$username."'");
$connect->query("update DNDSkills set Balance = '".$Balance."' where Username = '".$username."'");
$connect->query("update DNDSkills set Bluff = '".$Bluff."' where Username = '".$username."'");
$connect->query("update DNDSkills set Climb = '".$Climb."' where Username = '".$username."'");
$connect->query("update DNDSkills set Concentration = '".$Concentration."' where Username = '".$username."'");
$connect->query("update DNDSkills set Craft1 = '".$Craft1."' where Username = '".$username."'");
$connect->query("update DNDSkills set Craft2 = '".$Craft2."' where Username = '".$username."'");
$connect->query("update DNDSkills set Craft3 = '".$Craft3."' where Username = '".$username."'");
$connect->query("update DNDSkills set DecipherScript = '".$DecipherScript."' where Username = '".$username."'");
$connect->query("update DNDSkills set Diplomacy = '".$Diplomacy."' where Username = '".$username."'");
$connect->query("update DNDSkills set DisableDevice = '".$DisableDevice."' where Username = '".$username."'");
$connect->query("update DNDSkills set Disguise = '".$Disguise."' where Username = '".$username."'");
$connect->query("update DNDSkills set EscapeArtist = '".$EscapeArtist."' where Username = '".$username."'");
$connect->query("update DNDSkills set Forgery = '".$Forgery."' where Username = '".$username."'");
$connect->query("update DNDSkills set GatherInformation = '".$GatherInformation."' where Username = '".$username."'");
$connect->query("update DNDSkills set HandleAnimal = '".$HandleAnimal."' where Username = '".$username."'");
$connect->query("update DNDSkills set Heal = '".$Heal."' where Username = '".$username."'");
$connect->query("update DNDSkills set Hide = '".$Hide."' where Username = '".$username."'");
$connect->query("update DNDSkills set Intimidate = '".$Intimidate."' where Username = '".$username."'");
$connect->query("update DNDSkills set Jump = '".$Jump."' where Username = '".$username."'");
$connect->query("update DNDSkills set Knowledge1 = '".$Knowledge1."' where Username = '".$username."'");
$connect->query("update DNDSkills set Knowledge2 = '".$Knowledge2."' where Username = '".$username."'");
$connect->query("update DNDSkills set Knowledge3 = '".$Knowledge3."' where Username = '".$username."'");
$connect->query("update DNDSkills set Knowledge4 = '".$Knowledge4."' where Username = '".$username."'");
$connect->query("update DNDSkills set Knowledge5 = '".$Knowledge5."' where Username = '".$username."'");
$connect->query("update DNDSkills set Listen = '".$Listen."' where Username = '".$username."'");
$connect->query("update DNDSkills set MoveSilently = '".$MoveSilently."' where Username = '".$username."'");
$connect->query("update DNDSkills set OpenLock = '".$OpenLock."' where Username = '".$username."'");
$connect->query("update DNDSkills set Perform1 = '".$Perform1."' where Username = '".$username."'");
$connect->query("update DNDSkills set Perform2 = '".$Perform2."' where Username = '".$username."'");
$connect->query("update DNDSkills set Perform3 = '".$Perform3."' where Username = '".$username."'");
$connect->query("update DNDSkills set Profession1 = '".$Profession1."' where Username = '".$username."'");
$connect->query("update DNDSkills set Profession2 = '".$Profession2."' where Username = '".$username."'");
$connect->query("update DNDSkills set Ride = '".$Ride."' where Username = '".$username."'");
$connect->query("update DNDSkills set Search = '".$Search."' where Username = '".$username."'");
$connect->query("update DNDSkills set SenseMotive = '".$SenseMotive."' where Username = '".$username."'");
$connect->query("update DNDSkills set SleightOfHand = '".$SleightOfHand."' where Username = '".$username."'");
$connect->query("update DNDSkills set Spellcraft = '".$Spellcraft."' where Username = '".$username."'");
$connect->query("update DNDSkills set Spot = '".$Spot."' where Username = '".$username."'");
$connect->query("update DNDSkills set Survival = '".$Survival."' where Username = '".$username."'");
$connect->query("update DNDSkills set Swim = '".$Swim."' where Username = '".$username."'");
$connect->query("update DNDSkills set Tumble = '".$Tumble."' where Username = '".$username."'");
$connect->query("update DNDSkills set UseMagicDevice = '".$UseMagicDevice."' where Username = '".$username."'");
$connect->query("update DNDSkills set UseRope = '".$UseRope."' where Username = '".$username."'");


header("Location: FPForm.php");
exit;

?>
</body>
</html>