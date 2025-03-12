<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>While Loop Tasks</title>
    <style>
        .even {
            background-color: green;
        }

        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Looping statements: while</h1>

    <!-- Part 1 -->
    <h2>Part 1</h2>
    <?php
    // print numbers from 0 to 100
    $i = 0;
    while ($i <= 100) {
        echo $i;
        if ($i < 100) {
            echo ', ';
        }
        $i++;
    }

    echo "<br>";

    // print numbers / by 3, > 40, and < 80
    $i = 41;
    while ($i < 80) {
        if ($i % 3 === 0) {
            echo $i . ' ';
        }
        $i++;
    }
    ?>

    <h1>Part 2</h1>
    <?php
    echo "<table>";
    $row = 0;
    while ($row <= 10) {
        echo "<tr>";
        $col = 0;
        while ($col <= 10) {
            $value = $row * $col;
            // add even class if even
            $class = ($value % 2 === 0) ? 'even' : '';
            echo "<td class='$class'>$value</td>";
            $col++;
        }
        echo "</tr>";
        $row++;
    }
    echo "</table>";
    ?>
</body>
</html>