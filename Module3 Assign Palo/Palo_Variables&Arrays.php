<!-- Cedric Nathan E. Palo CYB-201-->
 <!-- 
Concepts Implemented:
Variables: Line 14-15
Arrays: Line 16-20
Match: Line 30-35
Foreach loop: Line 29-37
For loop: Line 45-59
Switch Case: Line 46-56
Include: Line 24 & 74
-->
<?php
//creating variables and arrays
    $items = 25;
    $f_domains = 5;
    $guides = ['cards','items','plans']; 
    $merch = ['Mem Hat', 'Trotter Plushie', 'Dromas Plushie']; //indexed arrays
    $bags = [
        ['name' => 'DHPT Tote Bag', 'price' => 525],
        ['name' => 'Cerces Hand Bag', 'price' => 5250],
    ]// array in an array and associative arrays
?>

<title>Varialbes & Arrays</title>
<?php include 'header.php'?> 
<h2>Currency Wars Store</h2>
<h2>Guides</h2>
    <ul>
        <?php 
        foreach ($guides as $category) {
            $description = match($category) {
                'cards' => 'Best Cards',
                'items' => 'Item Meta',
                'plans' => 'Best Plan Strategies',
                default => 'Unknown Guide'
            };
            echo "<li>" . $description . "</li>";
        }
        ?>
    </ul>

<h2>Merchandise Store</h2>
    <ul>
        <?php 
            $cost = 0;
            for ($i = 0; $i < 3; $i++) { 
                switch ($merch[$i]) {
                    case 'Mem Hat':
                        $cost = 100;
                        break;
                    case 'Trotter Plushie':
                        $cost = 200;
                        break;
                    case 'Dromas Plushie':
                        $cost = 250;
                        break;
                }
                
                echo "<li>" . $merch[$i] . " - P" . $cost . "</li>";    
            }
        ?>
    </ul>

<h2>Bags Store</h2>
    <ul>
        <li><?php echo $bags[0]['name']; ?> - P<?php echo $bags[0]['price']; ?></li>
        <li><?php echo $bags[1]['name']; ?> - P<?php echo $bags [1] ['price']; ?></li>
    </ul>

<h2>Current Run Overview</h2>
    <p>Items purchased: <?php echo $items; ?></p>
    <p>Finished domains: <?php echo $f_domains; ?></p>

</body>
<?php include 'footer.php'?>