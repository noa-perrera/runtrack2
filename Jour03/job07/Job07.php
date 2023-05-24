<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$newStr = "";

for ($i = 1; $i < strlen($str); $i++) {
    $newStr .= $str[$i];
}
$newStr .= $str[0];

echo $newStr;
?>
