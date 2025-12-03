<!-- Cedric Nathan E. Palo CYB-201-->
 <!-- 
---Concepts Implemented---
Expressions & Operators: Line 15-17
Foreach loop: Line 35
Include: Line 30 & 41
-->
<?php
    $coin_start = 5;
    $multiplier_buff = 2;
    $multiplier_debuff = 2;
    $multiplier_debuffdisplay = 0.5;
    $coinperdomaininitial = 4;
    $completeddomain = 5;
    $coinperdomainwithmultipliers = ($coinperdomaininitial * $multiplier_buff) / $multiplier_debuff;
    $gainedcoins = $completeddomain * $coinperdomainwithmultipliers;
    $totalcoins = $coin_start + $gainedcoins;
    $display = [
        "Starting coins: " => $coin_start,
        "Multiplier Gained: " => $multiplier_buff,
        "Multiplier Debuff: " => $multiplier_debuffdisplay,
        "Intial Coins per domain: " => $coinperdomaininitial,
        "Coins per domain: " => $coinperdomainwithmultipliers,
        "Completed Domains: " => $completeddomain,
        "Gained Coins: " => $gainedcoins,
        "Total Coins: " => $totalcoins
        ]
?>
<title>Expressions & Operatorss</title>
<?php include 'header.php'?> <!--Uses include for header and footer-->
<body>
    <h2>Currency Calculation</h2>
    <ul>
        <?php 
            foreach ($display as $item => $value) {
                echo "<li>" .$item, $value. "<br></li>" ;
            }

        ?>
    </ul>
</body>
<?php include 'footer.php'?>