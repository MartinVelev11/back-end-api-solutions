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

        <h1>Conditional statements: if else</h1>

        <h2>Part 1: Leap Year Check</h2>

        <?php
        // Define a year (you can change this value or make it dynamic)
        $year = 2024;

        // Check if the year is a leap year
        $isLeapYear = ($year % 4 === 0 && $year % 100 !== 0) || ($year % 400 === 0);

        // Print the result
        echo "<p>The year $year is " . ($isLeapYear ? "" : "not ") . "a leap year.</p>";
        ?>

        <h1 class="extra">Part 2: Time Breakdown</h1>

        <?php
        // Define the total number of seconds
        $totalSeconds = 221108521;

        // Calculate years, months, weeks, days, hours, minutes, and seconds
        $minutes = intdiv($totalSeconds, 60);
        $hours = intdiv($minutes, 60);
        $days = intdiv($hours, 24);
        $weeks = intdiv($days, 7);
        $months = intdiv($days, 31); // Assuming 31 days per month
        $years = intdiv($days, 365); // Assuming 365 days per year

        // Print the result
        echo "<p>In $totalSeconds seconds:</p>";
        echo "<ul>
                <li>Minutes: $minutes</li>
                <li>Hours: $hours</li>
                <li>Days: $days</li>
                <li>Weeks: $weeks</li>
                <li>Months (31 days): $months</li>
                <li>Years (365 days): $years</li>
              </ul>";
        ?>

    </body>
</html>