<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <link rel="stylesheet" type="text/css" href="/css/directory.css">
        <link rel="stylesheet" type="text/css" href="/css/facade.css">
    </head>
    <body>

        <h1>Conditional statements: if</h1>

        <h2>Part 1: Display Day Based on Number</h2>

        <?php
        // Define a number between 1 and 7
        $number = 3;

        // Map numbers to days
        $days = [1 => "monday", 2 => "tuesday", 3 => "wednesday", 4 => "thursday", 5 => "friday", 6 => "saturday", 7 => "sunday"];

        // Display the corresponding day
        echo "<p>The day is: " . $days[$number] . "</p>";
        ?>

        <h2 class="extra">Part 2: Convert Day to Uppercase with Exceptions</h2>

        <?php
        // Get the day
        $day = $days[$number];

        // Convert all letters to uppercase except 'a'
        $dayUppercaseExceptA = str_replace('a', 'a', strtoupper($day));

        // Convert all letters to uppercase except the last 'a'
        $lastA = strrpos($day, 'a'); 
        $dayUppercaseExceptLastA = substr_replace(strtoupper($day), 'a', $lastA, 1);

        // Display the results
        echo "<p>Original day: $day</p>";
        echo "<p>Uppercase except 'a': $dayUppercaseExceptA</p>";
        echo "<p>Uppercase except last 'a': $dayUppercaseExceptLastA</p>";
        ?>

    </body>
</html>