<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
</head>
<body>

    <h2>Multiplication Table up to 10</h2>

    <table border="1">
        <tr>
            <th>Multiplier</th>
            <?php
            // Generate table headers
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>{$i}</th>";
            }
            ?>
        </tr>

        <?php
        // Generate multiplication table
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>
                    <td>{$i}</td>";

            for ($j = 1; $j <= 10; $j++) {
                $result = $i * $j;
                echo "<td>{$result}</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>
