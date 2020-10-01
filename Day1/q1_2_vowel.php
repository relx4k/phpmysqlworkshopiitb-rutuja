<?php
function isvowel($c)
{
	switch($c)
	{
	case "a":
    case "A":
    case "e":
    case "E":
    case "i":
    case "I":
    case "o": 
    case "O":
    case "u":
    case "U":  
    return true;
    break;
    default: return false;
	}
}

$name = array("R","u","t","U","J","a");
foreach ($name as $c)
{
	if (isvowel($c))
	echo"The character  " .$c."  is vowel<br>";
	else
	echo"The character  " .$c. "  is consonant<br>";
}
?>