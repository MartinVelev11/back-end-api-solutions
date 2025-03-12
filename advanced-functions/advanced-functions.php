<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Functions: Advanced</h1>

    <h2>Part 1</h2>
    <?php
    $md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

    function countOccurrences($needle) {
        global $md5HashKey;
        $count = substr_count($md5HashKey, $needle);
        $total = strlen($md5HashKey);
        $percentage = ($count / $total) * 100;
        return "The needle '$needle' occurs $count times in the hash key '$md5HashKey'";
    }

    echo "<p>" . countOccurrences('2') . "</p>";
    echo "<p>" . countOccurrences('8') . "</p>";
    echo "<p>" . countOccurrences('a') . "</p>";
    ?>

    <h1 class="extra">Part 2 Angry Birds</h1>
    <?php
    $pigHealth = 5;
    $maximumThrows = 8;

    function calculateHit() {
        global $pigHealth;
        $hitChance = rand(1, 100) <= 40;
        if ($hitChance && $pigHealth > 0) {
            $pigHealth--;
            $pigsLeft = $pigHealth == 1 ? 'pig' : 'pigs';
            return "Hit! There " . ($pigHealth == 0 ? 'are no pigs left.' : ($pigHealth == 1 ? "is only 1 $pigsLeft left." : "are only $pigHealth $pigsLeft left."));
        } else {
            $pigsLeft = $pigHealth == 1 ? 'pig' : 'pigs';
            return "Miss! There " . ($pigHealth == 1 ? "is 1 $pigsLeft left." : "are $pigHealth $pigsLeft left.");
        }
    }

    function launchAngryBird($throws = 0) {
        global $maximumThrows, $pigHealth;
        static $staticThrows = 0;

        if ($staticThrows < $maximumThrows && $pigHealth > 0) {
            $staticThrows++;
            echo "<p>" . calculateHit() . "</p>";
            launchAngryBird($staticThrows);
        } else {
            echo "<p>" . ($pigHealth == 0 ? 'Won!' : 'Lost!') . "</p>";
        }
    }

    echo "<h1>Text-based Angry Birds</h1>";
    launchAngryBird();
    ?>
</body>
</html>