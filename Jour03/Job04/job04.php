<?php
$str = "Dans l'espace, personne ne vous entend crier";
$count = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $count++;
}

echo "Il y a $count caractères dans cette chaîne.";
?>
