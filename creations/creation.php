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

        <h1>Arrays: functions</h1>

        <h2>Part 1</h2>
        <div id="part1-output">
            <?php
                // Part 1
                // Create an array with more than 5 animals
                $animals = ["Dog", "Cat", "Elephant", "Lion", "Tiger", "Bear", "Wolf"];

                // Calculate how many elements are in the array
                $animalCount = count($animals);
                echo "<p>Animals Array: " . implode(", ", $animals) . "</p>";
                echo "<p>Number of animals: $animalCount</p>";

                // Search for an animal in the array
                $teZoekenDier = "Lion"; // Variable to search for
                if (in_array($teZoekenDier, $animals)) {
                    echo "<p>Found: $teZoekenDier</p>";
                } else {
                    echo "<p>Not found: $teZoekenDier</p>";
                }
            ?>
        </div>

        <h2 class="extra">Part 2</h2>
        <div id="part2-output">
            <?php
                // Part 2
                // Make a copy of the original array
                $animalsCopy = $animals;

                // Sort the array alphabetically (A -> Z)
                sort($animalsCopy);
                echo "<p>Sorted Animals: " . implode(", ", $animalsCopy) . "</p>";

                // Create a mammals array and merge it with the animals array
                $mammals = ["Whale", "Dolphin", "Bat"];
                $mergedAnimals = array_merge($animalsCopy, $mammals);
                echo "<p>Merged Animals: " . implode(", ", $mergedAnimals) . "</p>";
            ?>
        </div>

        <h3 class="extra">Part 3</h3>
        <div id="part3-output">
            <?php
                // Part 3
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