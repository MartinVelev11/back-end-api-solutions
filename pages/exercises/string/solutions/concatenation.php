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
        <h1>String concatenation</h1>

        <?php
        // Define the first name and last name
        $firstName = "Martin";
        $lastName = "Velev";

        // Concatenate the first and last name
        $fullName = $firstName . " " . $lastName;

        // Calculate the character count of $fullName
        $charCount = strlen($fullName);
        ?>

        <ul>
            <li>First name: <?php echo $firstName; ?></li>
            <li>Last name: <?php echo $lastName; ?></li>
            <li>Full name: <?php echo $fullName; ?></li>
        </ul>

        <!-- Extra: Print the character count of $fullName -->
        <p>Character count of <code>$fullName</code>: <?php echo $charCount; ?></p>
    </body>
</html>