<?php
$numbers = [200, 204, 173, 98, 171, 404, 459];
$evenNumbers = [];
$oddNumbers = [];

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $evenNumbers[] = $number;
    } else {
        $oddNumbers[] = $number;
    }
}

echo "<table border='1'>";
echo "<tr><th>Nombres pairs</th><th>Nombres impairs</th></tr>";
for ($i = 0; $i < max(count($evenNumbers), count($oddNumbers)); $i++) {
    echo "<tr>";
    if (isset($evenNumbers[$i])) {
        echo "<td>$evenNumbers[$i]</td>";
    } else {
        echo "<td></td>";
    }
    if (isset($oddNumbers[$i])) {
        echo "<td>$oddNumbers[$i]</td>";
    } else {
        echo "<td></td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
