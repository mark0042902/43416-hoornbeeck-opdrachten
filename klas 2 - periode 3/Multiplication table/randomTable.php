<?php
echo "<table border = 1 style='border-collapse: collapse; text-align: center'>";
    //echo "<td> x </td>";
    $max = rand(1,51);
    for ($row = 0; $row <=$max; $row++) {
    echo "<tr> \n";
        for ($col = 0; $col <= $max; $col++) {
        if($row == 0 && $col == 0)
        echo '<td> x </td>';
        else if ($row == 0 && $col != 0)
        echo "<td>$col</td>";
        else if ($row != 0 && $col == 0)
        echo "<td>$row</td>";
        else {
        $p = $col * $row;
        echo "<td>$p</td> \n";
        }

        }
        echo "</tr>";
    }
    echo "</table>";