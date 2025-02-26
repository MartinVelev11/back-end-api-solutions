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
        
        <h1>String functions</h1>

        <h2>Part 1</h2>

        <?php
        $fruit = "coconut";
        $charCount = strlen($fruit);
        $firstO = strpos($fruit, 'o');

        echo "<ul>";
        echo "<li>Variable \$fruit: $fruit</li>";
        echo "<li>Character count: $charCount</li>";
        echo "<li>Position of first 'o': $firstO</li>";
        echo "</ul>";
        ?>

        <h2>Part 2</h2>

        <?php
        $fruit = "pineable";
        $lastA = strrpos($fruit, 'a');
        $fruitUpper = strtoupper($fruit);

        echo "<ul>";
        echo "<li>Variable \$fruit: $fruit</li>";
        echo "<li>Position of last 'a': $lastA</li>";
        echo "<li>Uppercase \$fruit: $fruitUpper</li>";
        echo "</ul>";
        ?>

        <h2>Part 3</h2>

        <?php
        $letter = "e";
        $number = 3;
        $longestWord = "pneumonoultramicroscopicsilicovolcanoconiosis";
        $replacedWord = str_replace($letter, $number, $longestWord);

        echo "<ul>";
        echo "<li>Variable \$letter: $letter</li>";
        echo "<li>Variable \$number: $number</li>";
        echo "<li>Variable \$longestWord: $longestWord</li>";
        echo "<li>Replaced word: $replacedWord</li>";
        echo "</ul>";
        ?>

    </body>
</html>