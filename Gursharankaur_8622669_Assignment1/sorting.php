<?php
echo "<em>", "Gursharan kaur 8622669 Dated : 29.01.2020 ","<em>","<br><br>";
echo "Part 3 Arrays and strings","<br><br>";


$sortString = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ;
echo "<p>",$sortString,"<p>" ;

$String_Array= explode(' ',$sortString); // convert in form of array

natcasesort($String_Array);
$sortString = implode(' ', $String_Array); 
echo "<p>$sortString</p>";
?>