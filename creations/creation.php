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

        <h1>Arrays: creation</h1>

        <script>
            // Create an array in which you store 10 animals (do this in 2 different ways)
            // Method 1: Using array literal
            let animals1 = ["Dog", "Cat", "Elephant", "Lion", "Tiger", "Bear", "Wolf", "Fox", "Rabbit", "Deer"];
            console.log("Animals Array 1:", animals1);

            // Method 2: Using the Array constructor
            let animals2 = new Array("Dog", "Cat", "Elephant", "Lion", "Tiger", "Bear", "Wolf", "Fox", "Rabbit", "Deer");
            console.log("Animals Array 2:", animals2);

            // Create a new array containing 5 vehicles, making sure you can determine which category of vehicle it is (2-dimensional array)
            let vehicles = {
                landVehicles: ["Vespa", "bicycle"], // Land vehicles
                waterVehicles: ["surfboard", "raft", "schooner", "three-master"], // Water vehicles
                airVehicles: ["hot air balloon", "helicopter", "B52"] // Air vehicles
            };
            console.log("Vehicles Array:", vehicles);
        </script>

        <h1 class="extra">Exercise arrays: part 2</h1>

        <script>
            // Create an array in which you place the numbers 1, 2, 3, 4, 5
            let numbers1 = [1, 2, 3, 4, 5];
            console.log("Numbers Array 1:", numbers1);

            // Multiply all the numbers together and print to the screen
            let product = numbers1.reduce((acc, curr) => acc * curr, 1);
            console.log("Product of numbers:", product);

            // Print the odd numbers (by using an operator, do not do this manually)
            let oddNumbers = numbers1.filter(num => num % 2 !== 0);
            console.log("Odd numbers:", oddNumbers);

            // Create a second array in which you place the numbers 5, 4, 3, 2, 1
            let numbers2 = [5, 4, 3, 2, 1];
            console.log("Numbers Array 2:", numbers2);

            // Add the numbers from both arrays with the same index together
            let sumArray = numbers1.map((num, index) => num + numbers2[index]);
            console.log("Sum of arrays:", sumArray);
        </script>

    </body>
</html>