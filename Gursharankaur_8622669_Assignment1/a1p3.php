<?php

echo "<em>", "Gursharan kaur 8622669 Dated : 29.01.2020 ","<em>","<br><br>";
echo "Part 3 Arrays and strings","<br><br>";

function uniqueCharacter($str){

	for ($i=0;$i<strlen($str);$i++){
		for($j=$i+1;$j<strlen($str);$j++){
			if($str[$i]==$str[$j]){
				return true;
			}
		}
	}
	return false;
}

if($_SERVER['REQUEST_METHOD']=='POST'){
	if(!empty($_POST['firstname'])){
		$checking=uniqueCharacter($_POST['firstname']);

		if($checking ==true){
			echo '<p>Duplicate Character</p>';
		}else{
			echo '<p> No Duplicate character</p>';
		}
	}else{
			echo '<p> Please enter something </p>';
		}
	
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>
