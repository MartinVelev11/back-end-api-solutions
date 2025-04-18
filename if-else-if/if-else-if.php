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

        <h1>Conditional statements: if else if</h1>
        
        <h2>Part 1</h2>

        <ul>
            <li>Create a number with a value between 1-100</li>
            <li>Make sure the script can say between which tens the number lies, for example 'The number lies between 20 and 30'.</li>
            <li>Then make sure the message is printed in reverse, for example '03 dna 02 neewteb seil rebmun ehT'.</li>
        </ul>

        <?php
        // Generate a random number between 1 and 100
        $number = rand(1, 100);

        // Dynamically calculate the range using arithmetic
        $lower = floor($number / 10) * 10; 
        $upper = $lower + 10;             

        // Create the message
        $message = "The number lies between $lower and $upper.";

        // Print the original message
        echo "<p><strong>Original Message:</strong> $message</p>";

        // Reverse the message
        $reversedMessage = strrev($message);

        // Print the reversed message
        echo "<p><strong>Reversed Message:</strong> $reversedMessage</p>";
        ?>

    </body>
</html>