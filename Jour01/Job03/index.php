<?php
$myBool = true;
$myInt = 42;
$myString = "LaPlateforme";
$myFloat = 3.14;

echo "<table border='1'>";
echo "<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>";
echo "<tr><td>" . gettype($myBool) . "</td><td>myBool</td><td>" . $myBool . "</td></tr>";
echo "<tr><td>" . gettype($myInt) . "</td><td>myInt</td><td>" . $myInt . "</td></tr>";
echo "<tr><td>" . gettype($myString) . "</td><td>myString</td><td>" . $myString . "</td></tr>";
echo "<tr><td>" . gettype($myFloat) . "</td><td>myFloat</td><td>" . $myFloat . "</td></tr>";
echo "</table>";
?>
