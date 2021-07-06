<?php 
$censuredWord = "";
$string = "Sei nato da un cadavere. Dalla morte sei uscito alla vita per sprofondare nel fango! Sei più vicino alla morte di chiunque altro, per questo ti è facile sfuggirle!
Forse...sono soltanto uno che si erge con la spada infranta...dalla più profonda disperazione.";
echo $string . " "  . "<br>" . "Character length" . " "  . strlen($string) . "<br>";
echo "Censured word:" . " " . "<strong>" . $_GET["censuredWord"] . "</strong>". "<br>";
$newString = str_replace($_GET["censuredWord"], "***", strtolower($string)) . "<br>";
echo $newString;
echo strlen($newString) . "<br>";
?>