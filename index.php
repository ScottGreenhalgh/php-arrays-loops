<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // create array
    $first_array = ["one", 2, "three", 4, "five"];
    echo nl2br(count($first_array) . "\n");

    // shorhand arrays
    $with_function = array("PHP", "popcorn", 555.55);
    $with_short = ["PHP", "popcorn", 555.55];
    echo nl2br(count($with_function) . "\n");
    echo nl2br(count($with_short) . "\n");

    // printing arrays
    $message = ["Oh hey", " You're doing great", " Keep up the good work!"];
    $favorite_nums = [7, 201, 33, 88, 91];
    echo nl2br(implode("!", $message) . "\n");
    echo nl2br(print_r($favorite_nums) . "\n");

    // indexing elements
    $round_one = ["X", "X", "first winner"];
    $round_two = ["second winner", "X", "X", "X"];
    $round_three = ["X", "X", "X", "X", "third winner"];
    $winners = [$round_one[2], $round_two[0], $round_three[4]];
    echo nl2br(implode(", ", $winners) . "\n");

    // adding content
    $change_me = [3, 6, 9];
    $change_me[] = "four";
    $change_me[] = 4;
    $change_me[1] = "tadpole";
    echo nl2br(implode(" ", $change_me) . "\n");

    // push and pop
    $stack = ["wild success", "failure", "struggle"];
    array_push($stack, "blocker", "impediment");
    array_pop($stack);
    array_pop($stack);
    array_pop($stack);
    array_pop($stack);
    echo nl2br(implode(" ", $stack) . "\n");

    // shift and unshift
    $record_holders = [];
    array_unshift(
        $record_holders,
        "Tim Montgomery",
        "Maurice Greene",
        "Donovan Bailey",
        "Leroy Burrell",
        "Carl Lewis"
    );
    echo nl2br(implode(", ", $record_holders) . "\n");
    array_shift($record_holders);
    array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
    array_shift($record_holders);
    echo nl2br(implode(", ", $record_holders) . "\n");
    array_unshift($record_holders, "Usain Bolt");
    echo nl2br(implode(", ", $record_holders) . "\n");

    // nested arrays
    $treasure_hunt = ["garbage", "cat", 99, ["soda can", 8, ":)", "sludge", ["stuff", "lint", ["GOLD!"], "cave", "bat", "scorpion"], "rock"], "glitter", "moonlight", 2.11];
    echo nl2br($treasure_hunt[3][4][2][0] . "\n");

    // associative arrays (similar to java hashmaps)
    $php_array = array("language" => "PHP", "creator" => "Rasmus Lerdorf", "year_created" => 1995, "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]);

    $php_short = ["language" => "PHP", "creator" => "Rasmus Lerdorf", "year_created" => 1995, "filename_extensions" => [".php", ".phtml", ".php3", ".php4", ".php5", ".php7", ".phps", ".php-s", ".pht", ".phar"]];

    echo nl2br(implode(", ", $php_array) . "\n");
    echo nl2br(implode(" ", $php_array["filename_extensions"]) . "\n");

    $september_hits = ["The Sixth Sense" => 22896967, "Stigmata" => 18309666, "Blue Streak" => 19208806, "Double Jeopardy" => 23162542];

    echo nl2br(implode(", ", $september_hits) . "\n");
    print_r($september_hits);
    echo nl2br("\n");

    //accessing and adding elements
    $assignment_one = ["Alex" => 87, "Kenny" => 91, "Natalia" => 91, "Lily" => 67, "Dan" => 81, "Kat" => 77, "Sara" => 65];

    $assignment_two = ["Alex" => 91, "Kenny" => 99, "Natalia" => 100, "Lily" => 61, "Dan" => 88, "Kat" => 90];

    $assignment_three = ["Alex" => 78, "Kenny" => 92, "Natalia" => 94, "Lily" => 79, "Dan" => 73, "Sara" => 61];

    $student_name = "Alex";
    $assignment_two["Sara"] = 65;
    $assignment_three["Kat"] = 97;
    $dans_grades = [$assignment_one["Dan"], $assignment_two["Dan"], $assignment_three["Dan"]];
    echo nl2br($assignment_two[$student_name] . "\n");

    //changing / removing elements
    $my_car = [
        "oil" => "black and clumpy",
        "brakes" => "new",
        "tires" => "old with worn treads",
        "filth" => "bird droppings",
        "wiper fluid" => "full",
        "headlights" => "bright"
    ];
    echo nl2br(implode(", ", $my_car) . "\n"); //print_r($my_car);

    $my_car["oil"] = "new and premium";
    $my_car["tires"] = "new with deep treads";
    unset($my_car["filth"]);
    echo nl2br(implode(", ", $my_car) . "\n"); //print_r($my_car);

    // numerical keys
    $hybrid_array = ["one", "two", "three", "four"]; // 0,1,2,3
    $hybrid_array[8] = "five more"; // 0,1,2,3,8
    echo nl2br(implode(", ", $hybrid_array) . "\n");
    array_push($hybrid_array, rand()); //0,1,2,3,8,9

    echo nl2br($hybrid_array[9] . "\n");

    // joining arrays
    $giraffe_foods = ["dip" => "guacamole", "chips" => "corn", "entree" => "grilled chicken"];

    $impala_foods = ["dessert" => "cookies", "vegetable" => "asparagus", "side" => "mashed potatoes"];

    $rat_foods = ["dip" => "mashed earth worms", "entree" => "trash pizza", "dessert" => "sugar cubes", "drink" => "lemon water"];

    $potluck = $giraffe_foods + $impala_foods;
    echo nl2br(implode(", ", $potluck) . "\n");
    $ratluck = $potluck + $rat_foods;
    echo nl2br(implode(", ", $ratluck) . "\n");
    $ratluck2 = $rat_foods + $potluck;
    echo nl2br(implode(", ", $ratluck2) . "\n");

    // assign array by value or reference
    $doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

    $bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];

    function createMeme($meme)
    {
        $meme["top_text"] = "Much PHP";
        $meme["bottom_text"] = "Very programming. Wow.";
        return $meme;
    }
    $php_doge = createMeme($doge_meme);
    echo nl2br(implode(", ", $php_doge) . "\n");

    function fixMeme(&$meme)
    {
        $meme["top_text"] = "Changing this text";
        $meme["bottom_text"] = "Perma changing this";
        return $meme;
    }
    $php_bad = fixMeme($bad_meme);
    echo nl2br(implode(", ", $php_bad) . "\n");

    // ---------- LOOPS ----------
    $count = 1;
    while ($count <= 100) {
        echo nl2br("The count is: " . $count . "\n");
        if ($count % 33 === 0) {
            echo nl2br($count . " is divisible by 33\n");
        };
        $count++;
    };

    // do while 
    $plant_height = 22;
    do {
        echo nl2br("The plant is " . $plant_height . " tall.\n");
        if ($plant_height >= 30) {
            echo nl2br("And can produce fruit.\n");
        }
        $plant_height++;
    } while ($plant_height <= 30);

    // for 
    for ($i = 10; $i >= 0; $i--) {
        if ($i === 2) {
            echo nl2br("Ready!\n");
        } elseif ($i === 1) {
            echo nl2br("Set!\n");
        } elseif ($i === 0) {
            echo nl2br("Go!\n");
        } else {
            echo nl2br($i . "\n");
        }
    }

    // foreach
    $scores = [
        "Alice" => 99,
        "Bob" => 95,
        "Charlie" => 98,
        "Destiny" => 91,
        "Edward" => 88
    ];

    foreach ($scores as $score) {
        echo nl2br("Someone received a score of $score.\n");
    }

    foreach ($scores as $name => $score) {
        echo nl2br("$name received a score of $score.\n");
    }

    // break and continue
    for ($i = 10; $i >= 0; $i--) {
        if ($i === 2) {
            echo nl2br("Ready!\n");
        } elseif ($i === 1) {
            echo nl2br("Set!\n");
            break;
        } elseif ($i === 0) {
            echo nl2br("Go!\n");
        } elseif ($i === 6) {
            continue;
        } else {
            echo nl2br($i . "\n");
        }
    }
    ?>
</body>

</html>