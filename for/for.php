<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Part 1 - For Loop</title>
</head>
<body>
    <h1>Looping statements: for</h1>
    <h2>Part 1</h2>

    <?php
    // print numbers from 0 to 100 
    for ($i = 0; $i <= 100; $i++) {
        echo $i;
        if ($i < 100) {
            echo ', ';
        }
    }

    echo "<br>";

    // print numbers / by 3, > than 40, < than 80
    for ($i = 41; $i < 80; $i++) {
        if ($i % 3 === 0) {
            echo $i . ' ';
        }
    }
    ?>

    <h1>Part 2</h1>
    <?php
    echo "<table>";
    for ($row = 0; $row <= 10; $row++) {
        echo "<tr>";
        for ($col = 0; $col <= 10; $col++) {
            $value = $row * $col;
            // add 'even' class
            $class = ($value % 2 === 0) ? 'even' : '';
            echo "<td class='$class'>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>