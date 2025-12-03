<?php
    declare(strict_types=1); //Step 1

    $hsrdrinks = [ //step 2
        "Mung bean soda" => ["price" => 50.00, "stock" => 10],
        "Wake & Slumber" => ["price" => 75.00, "stock" => 12],
        "Cosmic Turbidity" => ["price" => 80.00, "stock" => 20],
        "Rouge Era" => ["price" => 90.00, "stock" => 45],
        "Sweetened Mood" => ["price" => 75.25, "stock" => 23],
        "Station of Freedom" => ["price" => 77.5, "stock" => 30],
        "Rose in Rain" => ["price" => 100, "stock" => 43]
    ];

    $taxrate = 20; //step 3 (20% global tax rate)

    function get_reorder_message(int $stock): string { //step 4
        return ($stock < 10) ? "Yes" : "No"; //step 5 ternary operator (?)
    }
    
    function get_total_value(float $price, int $stock): float { //step 6
        return $price * $stock; //step 7
    }

    function get_tax_due(float $price, int $stock, int $taxrate = 0): float { //step 8
        global $taxrate;
        return ($price * $stock) * ($taxrate / 100); //step 9
    }
?>

<title>Functions</title>
<?php include 'header.php'?> <!--Uses include for header and footer-->
<body>
    <h2 style="text-align: center;">Stock Control</h2>
    <div class="tablecenter">
    <table>
        <tr>
            <th>Product</th><th>Stock</th><th>Re-Order</th><th>Total Value</th><th>Tax Due</th> <!--Table Headers-->
        </tr>  
        <?php foreach ($hsrdrinks as $product_name => $data) { //step 10 ?>
                <tr>
                    <td><?= $product_name ?> </td> <!-- Step 11-->
                    <td><?= $data["stock"] ?> </td> <!-- Step 12-->
                    <td><?= get_reorder_message($data["stock"]) ?></td> <!-- Step 13-->
                    <td><?= get_total_value($data["price"] , $data["stock"]) ?></td> <!-- Step 14-->
                    <td><?= get_tax_due($data["price"], $data["stock"], $taxrate) ?></td> <!-- Step 15-->
                </tr>
        <?php } ?> <!-- Step 16-->   
    </table>
    </div>
</body>
<?php include 'footer.php'?>