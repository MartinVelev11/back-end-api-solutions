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

        <h3 class="extra">Part 3</h3>
        <div id="part3-output">
            <?php
                // Create an array with the following values
                $numbers = [8, 7, 8, 7, 3, 2, 1, 2, 4];

                // Remove duplicates from the array
                $uniqueNumbers = array_unique($numbers);

                // Sort the array from largest to smallest
                rsort($uniqueNumbers);

                // Print the results
                echo "<p>Original Array: " . implode(", ", $numbers) . "</p>";
                echo "<p>Array without Duplicates: " . implode(", ", $uniqueNumbers) . "</p>";
            ?>
        </div>

    </body>
</html>