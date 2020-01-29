<?php

echo "<em>", "Gursharan kaur 8622669 Dated : 29.01.2020 ","<em>","<br><br>";
echo "Part 2 Form Validation","<br><br>";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // check if fields are empty in if else statement
    if(!empty($_POST['firstname'])){ 
	
        echo "<Strong>","First Name : ", "<Strong>", $_POST['firstname'],"<br>"; // display the input 
    
    }
        else{
            
        echo '<p>Please Enter Your First Name!!</p>'; // if display empty string message
    }
    if(!empty($_POST['lastname'])){ 
	
        echo "Last Name : ". $_POST['lastname'],"<br>";
    
    }
        else{
            
        echo '<p>Please Enter Your Last Name!!</p>'; // if display empty string message
        }
        if(!empty($_POST['age'])){ 
	
            echo "Age : ". $_POST['age'],"<br>";
        
        }
            else{
                
            echo '<p>Please Enter Your Age!!</p>'; // if display empty string message
        }
        if(!empty($_POST['newsletter'])){ 
	
            echo "Newsletter : ". $_POST['newsletter'],"<br>";
        
        }
            else{
                
            echo '<p>Please select one value for newsletter !!</p>'; // if display empty string message
        }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php 
    if (isset($_POST['firstname'])) 
    echo $_POST['firstname']; 
    ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40" value="<?php 
    if (isset($_POST['lastname'])) 
    echo $_POST['lastname']; 
    ?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40" value="<?php 
    if (isset($_POST['age'])) 
    echo $_POST['age']; 
    ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align ="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>

</body>
</html>







