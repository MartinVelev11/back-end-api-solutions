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

        <div id="output"></div> <!-- Container for output -->

        <h1 class="extra">Exercise arrays: part 2</h1>

        <div id="output-part2"></div> <!-- Container for part 2 output -->

        <script>
            // Function to append results to the webpage
            function printToPage(containerId, message) {
                const container = document.getElementById(containerId);
                const p = document.createElement("p");
                p.textContent = message;
                container.appendChild(p);
            }

            // Create an array in which you store 10 animals (do this in 2 different ways)
            // Method 1: Using array literal
            let animals1 = ["Dog", "Cat", "Elephant", "Lion", "Tiger", "Bear", "Wolf", "Fox", "Rabbit", "Deer"];
            printToPage("output", `Animals Array 1: ${animals1.join(", ")}`);

            // Method 2: Using the Array constructor
            let animals2 = new Array("Dog", "Cat", "Elephant", "Lion", "Tiger", "Bear", "Wolf", "Fox", "Rabbit", "Deer");
            printToPage("output", `Animals Array 2: ${animals2.join(", ")}`);

            // Create a new array containing 5 vehicles, making sure you can determine which category of vehicle it is (2-dimensional array)
            let vehicles = {
                landVehicles: ["Vespa", "bicycle"],
                waterVehicles: ["surfboard", "raft", "schooner", "three-master"],
                airVehicles: ["hot air balloon", "helicopter", "B52"]
            };
            printToPage("output", `Vehicles Array: ${JSON.stringify(vehicles, null, 2)}`);

            // Exercise arrays: part 2
            // Create an array in which you place the numbers 1, 2, 3, 4, 5
            let numbers1 = [1, 2, 3, 4, 5];
            printToPage("output-part2", `Numbers Array 1: ${numbers1.join(", ")}`);

            // Multiply all the numbers together and print to the screen
            let product = numbers1.reduce((acc, curr) => acc * curr, 1);
            printToPage("output-part2", `Product of numbers: ${product}`);

            // Print the odd numbers (by using an operator, do not do this manually)
            let oddNumbers = numbers1.filter(num => num % 2 !== 0);
            printToPage("output-part2", `Odd numbers: ${oddNumbers.join(", ")}`);

            // Create a second array in which you place the numbers 5, 4, 3, 2, 1
            let numbers2 = [5, 4, 3, 2, 1];
            printToPage("output-part2", `Numbers Array 2: ${numbers2.join(", ")}`);

            // Add the numbers from both arrays with the same index together
            let sumArray = numbers1.map((num, index) => num + numbers2[index]);
            printToPage("output-part2", `Sum of arrays: ${sumArray.join(", ")}`);
        </script>

    </body>
</html>