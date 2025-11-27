<!--Cedric Nathan E. Palo CYB-201-->
<?php
$products = ['Mung Bean Soda', 'Deep-Fried Rock Crab', 'Comfort food'];
$stock = [14,0,23];
$i = 0;
?> 

<?php include 'header.php'?>
<body>
<h1>Listings</h1>
<p>
<?php 
    //whileloop
    while($i < 3) {
        echo "$products[$i]: ";

        //checks if there is stock
        if ($stock[$i] === 0) {
            echo "    Not Available stock.<br>";
        }
        else {
            echo "    $stock[$i]<br>";
        }

        $i++;
    }
?>
</p>

</body>
<?php include 'footer.php'?>