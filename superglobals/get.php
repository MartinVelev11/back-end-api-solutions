<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Today's Newspaper</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .multiple {
            float: left;
            width: 288px;
            margin: 16px;
            padding: 16px;
            box-sizing: border-box;
            background-color: #EEEEEE;
            border-radius: 12px;
        }

        .multiple:nth-child(3n+1) {
            margin-left: 0;
        }

        .multiple:nth-child(3n) {
            margin-right: 0;
        }

        .single {
            max-width: 800px; 
            margin: 0 auto; 
        }

        .single img {
            width: 100%; 
            height: auto; 
            border-radius: 8px; 
            margin-bottom: 16px; 
        }

        .read-more:after {
            padding-left: 6px;
            content: ">";
        }

        .search-form {
            margin-bottom: 20px;
        }

        .article-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <?php
    $basePath = '../img/'; // could only make my images load this way

    $articles = [
        [
            'title' => 'Eight Internet Giants Demand Restrictions on NSA Spying',
            'date' => 'December 9, 2013',
            'content' => 'Eight major technology companies, such as Google, Apple, and Facebook, have demanded changes in the way the government spies in an open letter to US President Barack Obama. They want to restore public trust in the internet.',
            'image' => $basePath . 'get-article-01.jpg',
            'imageDescription' => 'Mark Zuckerberg next to the Facebook logo'
        ],
        [
            'title' => 'Wild Benefactor Puts Money in Mailboxes',
            'date' => 'December 9, 2013',
            'content' => 'Residents of two apartment blocks in Koksijde were surprised to find money in their mailboxes. A mysterious benefactor has been distributing cash to the residents.',
            'image' => $basePath . 'get-article-02.jpg',
            'imageDescription' => 'The residence in Koksijde where the benefactor was working.'
        ],
        [
            'title' => 'Original Hergé Pieces Auctioned for Hundreds of Thousands of Euros',
            'date' => 'December 9, 2013',
            'content' => 'Two original pieces by Hergé were auctioned on Sunday for hundreds of thousands of euros. The works, featuring Tintin and Snowy, attracted significant interest from collectors.',
            'image' => $basePath . 'get-article-03.jpg',
            'imageDescription' => 'Tintin and Snowy'
        ]
    ];

    // search 
    if (isset($_GET['search'])) {
        $searchTerm = strtolower($_GET['search']);
        $articles = array_filter($articles, function($article) use ($searchTerm) {
            return strpos(strtolower($article['content']), $searchTerm) !== false ||
                   strpos(strtolower($article['title']), $searchTerm) !== false;
        });
    }

    // individual article view
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($articles[$id])) {
            $article = $articles[$id];
            echo "<h1>{$article['title']}</h1>";
            echo "<article class='single'>";
            echo "<h1>{$article['title']}</h1>";
            echo "<p>{$article['date']}</p>";
            echo "<img src='{$article['image']}' alt='{$article['imageDescription']}'>";
            echo "<p>{$article['content']}</p>";
            echo "</article>";
        } else {
            echo "<p>This article does not exist.</p>";
        }
    } else {
        // article overview
        echo "<h1>Today's Newspaper</h1>";
        echo "<form class='search-form' method='get'>
                <input type='text' name='search' placeholder='Search articles...'>
                <button type='submit'>Search</button>
              </form>";
        if (empty($articles)) {
            echo "<p>The search term '{$_GET['search']}' does not appear in our newspaper.</p>";
        } else {
            echo "<section class='articles'>";
            foreach ($articles as $id => $article) {
                echo "<article class='multiple'>";
                echo "<h1>{$article['title']}</h1>";
                echo "<p>{$article['date']}</p>";
                echo "<img src='{$article['image']}' alt='{$article['imageDescription']}' class='article-image'>";
                echo "<p>" . substr($article['content'], 0, 50) . "...</p>";
                echo "<p class='read-more'><a href='get.php?id=$id'>Read more</a></p>";
                echo "</article>";
            }
            echo "</section>";
        }
    }
    ?>
</body>
</html>