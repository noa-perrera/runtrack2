<?php
$str = "Les choses que l'on possède finissent par nous posséder.";
for ($i = mb_strlen($str) - 1; $i >= 0; $i--) {
    echo mb_substr($str, $i, 1);
}
?>
