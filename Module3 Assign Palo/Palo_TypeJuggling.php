<!-- Cedric Nathan E. Palo CYB-201-->
 <!-- 
---Concepts Implemented---
Type Juggling: Line 11
For each loop: Line 28-33
If else: Line 29-32
Include: Line 19 & 37
-->
<?php
    //TypeJuggling
    $primogems = 1600 + '2.4e+3';
    $events = 2;
    $event_check = [
    "Miliastra" => 0, 
    "As you wished for!" => 1];

?>

<title>Type Juggling</title>
<?php include 'header.php'?> <!--Uses include for header and footer-->
<body>
<h2>Account Information</h2>
<h2>Primogems</h2>
    <p><?= $primogems ?></p>
<h2>Events</h2>
<p>Events count: <?= $events ?><p>
    <ul>
        <?php 
            foreach ($event_check as $event => $check) {
                if ($check == 1)
                    echo "<li>" . $event . " - Completed ";
                else   
                    echo "<li>" . $event . " - Not Completed ";
            }
        ?>
    </ul>
</body>
<?php include 'footer.php'?>