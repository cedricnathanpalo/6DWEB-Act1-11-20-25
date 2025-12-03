<!-- Cedric Nathan E. Palo CYB-201-->
<!-- 
---Concepts Implemented---
Shorthand echo: Line 24
While loop: Line 23-26
Include: Line 15 & 29
-->
<?php
    //creating variables and arrays
    $characters_owned = 5;
    $characters = ['Cyrene', 'Mem', 'Trailblaizer']; //indexed arrays
    $count = 0;
?>

<title>Shorthand Echo</title>
<?php include 'header.php'?> <!--Uses include for header and footer-->
<body>
<h2>Character Hold Account Information</h2>
<h2>Characters Overview</h2>
    <p>Characters owned: <?= $characters_owned ?></p> <!--Shorthand echo for variables-->
<h2>Display</h2>
    <ul>
        <!--Shorthand echo for arrays-->
        <?php while ($count < 3): ?>
            <li><?= $characters[$count] ?></li>
            <?php $count++; ?>
        <?php endwhile; ?>
    </ul>
</body>
<?php include 'footer.php'?>