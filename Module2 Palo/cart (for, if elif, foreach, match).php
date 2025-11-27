<!--Cedric Nathan E. Palo CYB-201-->
<?php
$balance = 2000;
$cart = ['Mung Bean Soda' => 15.00 , 'Deep-Fried Rock Crab' => 30.00, 'Comfort food' => 25.00];
$cart2 = ['Mung Bean Soda', 'Deep-Fried Rock Crab', 'Comfort food'];
$amount = [2, 1, 0];
$totalitemspurchased = 3;
$stock = [14,0,23];
$index = 0;
$message = 'Purchased Items';
$cost = 0;

?> 

<?php include 'header.php'?>
<body>
<h1>Cart</h1>
<h2><?= $message ?></h2>
<p>
<?php 
for ($i = 0; $i < 3; $i++) { // for loop to iterate the array
    $display = match($cart2[$i]) { //checks through the cart to match one of the options here to display the amount
        'Mung Bean Soda' => "Mung Bean Soda = $amount[$i] <br>",
        'Deep-Fried Rock Crab' => "Deep-Fried Rock Crab = $amount[$i] <br>",
        'Comfort food' => "Comfort food = $amount[$i] <br>",
    };

    echo $display;
}

echo '<br><br>';

if ($balance === 0) { //if balance is 0
    echo "Please input balance to purchase";
}

elseif ($balance < 0) { //Something went wrong
    echo "Balance Error";
}

else { //If balance is good enough
    foreach ($cart as $item => $price) { //since the array has key and value, use for each
        echo "$item  ($";
        echo "$price) <br>";
        
        if ($stock[$index] === 0) {
            echo "No stock <br><br>";
            $index++;
            continue;
        }

        
        $cost = $cost + ($price * $amount[$index]);
        $newstock = $stock[$index] - $amount[$index];
        echo "Remaining Stock: $newstock <br><br>";
        $index++;
    
    }

}

$newbal = $balance - $cost;
echo "<br><br> Balance: $newbal";
?>
</p>
</body>
<?php include 'footer.php'?>