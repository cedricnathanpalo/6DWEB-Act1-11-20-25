<!--Cedric Nathan E. Palo CYB-201 11/20/25-->
<?php
    //String variables, includes title, artist, and mood
    $title = "Fairytale";
    $artist = "Alexander Rybak";
    $mood = "Bittersweet";

    //Numerical variables to count verses & bridges, and repeat choruses
    $verseCount = 2;
    $bridgeCount = "1"; //Typejuggling when $sectionCount happens
    $repeatChorus = 1;
    $sectionCount = $verseCount + $bridgeCount + (1 + $repeatChorus); //$verseCount & $repeatChorus = String 
    $linesPerSection = "4"; //TypeJuggling again when $totalLines happens
    $totalLines = $linesPerSection * $sectionCount + 4; //$linePerSection = String * $sectionCount = int, added plus 4 since verse 2 has 8 lines

    //Array for nouns, verbs, adjectives of the song
    $songNouns = ["Years", "girl", "sweethearts", "fairytale", "mind", "day", "night", "love", "start"];
    $songVerbs = ["liked", "knew", "love", "hurts", "don't", "care", "lose", "started", "fighting", "fell", "make", "lift", "know", "doin", "cannot", "find", "do", "get"];
    $songAdjectives = ["younger", "true", "cursed", "Every", "sadder", "high", "brand-new"];

    //Array for sections of the song
    $verse1 = [
        $songNouns[0] . " ago when I was " . $songAdjectives[0] , //braces to incorporate the words array
        "I kinda " .$songVerbs[0]. " a " .$songNouns[1]. " I " .$songVerbs[1] , 
        "She was mine, and we were " .$songNouns[2] ,
        "That was then, but then it's " .$songAdjectives[1]
    ];

    
    $verse2 = [
        $songAdjectives[3]. " " .$songNouns[5]. " (Ta-da-da), we " .$songVerbs[7]. " " .$songVerbs[8]. " (Ta-da-da)",
        $songAdjectives[3]. " " .$songNouns[6]. " (Ta-da-da), we " .$songVerbs[9]. " in " .$songNouns[7]. " (Ta-da-da, ta-da-da)",
        "No one else (Ta-da-da), could " .$songVerbs[11]. " me " .$songAdjectives[4] ,
        "But no one else could" .$songVerbs[12]. " me " .$songAdjectives[5]. " above (" .$songAdjectives[5]. " above)",
        "I " .$songVerbs[4]. " " .$songVerbs[12]. " what I was " .$songVerbs[13]."' (High)",
        "When suddenly, we " .$songVerbs[9]. " apart",
        "Nowadays, I " .$songVerbs[14]. " " .$songVerbs[15]. " her",
        "But when I " .$songVerbs[15]. ", we'll " .$songVerbs[16]. " a " .$songAdjectives[6]. " " .$songNouns[8]
    ];

    //Chorus
    $chorus = [
        "I'm in " .$songVerbs[2]. " with a " .$songNouns[3] ,
        "Even though it " .$songVerbs[3] ,
        "'Cause I " .$songVerbs[4]. " " .$songVerbs[5]. " if I " .$songVerbs[6]. " my " .$songNouns[4] ,
        "I'm already " .$songAdjectives[2]
    ];

    //Bridge
    $bridge = [
        "She's a " .$songNouns[3],
        "Even though it" .$songVerbs[3] ,
        "'Cause I" .$songVerbs[4]. " " .$songVerbs[5]. " if I " .$songVerbs[6]. " my " .$songNouns[4] ,
        "I'm already " .$songAdjectives[2]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body {
            background-color: #f8f8f8;
            font-family: arial;
        }

        h1, h2, p {
            text-align: center;
        }

        
        img {
            display: block;
            margin: auto;
        }

    </style>
</head>
<body>
    <h1><?= $title?></h1>
    <img src="alexanderrybak.jpg">
    <h2>By <?= $artist?></h2>
    <h2><?= $mood?></h2>

    <h2>Information</h2>
    <p>
        Verse Count: <?= $verseCount?><br>
        Chorus Repeat: <?= $repeatChorus?><br>
        Bridge Count: <?= $bridgeCount?><br>
        Section Count: <?= $sectionCount?><br>
        Average lines per section: <?= $linesPerSection?><br>
        Total Lines: <?= $totalLines?><br>
    </p>

    <h2>Lyrics</h2>
    <p>
    <!-- For loops to iterate through each index of each array-->
        <?php 
        for ($x = 0; $x < count($verse1); $x++) {
            echo $verse1[$x] . "<br>";
        }
        ?>
    </p>
    <p>
        <?php 
        for ($x = 0; $x < count($chorus); $x++) {
            echo $chorus[$x] . "<br>";
        }
        ?>
    </p>
    <p>
        <?php 
        for ($x = 0; $x < count($verse2); $x++) {
            echo $verse2[$x] . "<br>";
        }
        ?>
    </p>
    <p>
        <?php 
        for ($x = 0; $x < count($chorus); $x++) {
            echo $chorus[$x] . "<br>";
        }
        ?>
    </p>
    <p>
        <?php 
        for ($x = 0; $x < count($bridge); $x++) {
            echo $bridge[$x] . "<br>";
        }
        ?>
    </p>
</body>
</html>