<?php
include "includes/header.php";
?>

<!-- Page content-->
<div class="container">
    <table BORDER="1" cellspacing="1" cellpadding="5">
        <tr>
            <td>id</td>
            <td>student id</td>
            <td>firstname</td>
            <td>lastname</td>
            <td>created at</td>
            <td>updated at</td>
        </tr>
        <?php

        $query = "SELECT * FROM studenten";
        $result = mysqli_query($link, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>
            <td>" . $row['id'] . "</td><br>
            <td>" . $row['student_id'] . "</td><br>
            <td>" . $row['firstname'] . "</td><br>
            <td>" . $row['lastname'] . "</td><br>
            <td>" . $row['created_at'] . "</td><br>
            <td>" . $row['updated_at'] . "</td>
        </tr>";
        }
        ?>

    </table>
</div>


<?php

include "includes/footer.php";
