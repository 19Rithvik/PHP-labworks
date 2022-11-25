<?php 
    if(isset($_POST['submit'])){
        $product1 = $_POST['product1'];
        $product2 = $_POST['product2'];
        $product3 = $_POST['product3'];
        $product4 = $_POST['product4'];
        $product5 = $_POST['product5'];
        //discout 5%
        $discount = 0.95;
        $dis1 = $product1 * 50 * $discount;
        $dis2 = $product2 * 60 * $discount;
        $dis3 = $product3 * 70 * $discount;
        $dis4 = $product4 * 80 * $discount;
        $dis5 = $product5 * 90 * $discount;
        echo "<title>Items added</title>";
        echo "<h1>Cart</h1>";
        if($product1 > 0 or $product2 > 0 or $product3 > 0 or $product4 > 0 or $product5 > 0){
            echo "<table border='1'>
            <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
            <th>Discounted Price</th>
            </tr>";
        if($product1 > 0){
            echo "<tr>
            <td>Apple</td>
            <td>$product1</td>
            <td>100</td>
            <td>".($product1*100)."</td>
            <td>".$dis1."</td>
            </tr>";
        }
        if($product2 > 0){
            echo "<tr>
            <td>Cherry</td>
            <td>$product2</td>
            <td>110</td>
            <td>".($product2*110)."</td>
            <td>".$dis2."</td>
            </tr>";
        }
        if($product3 > 0){
            echo "<tr>
            <td>Orange</td>
            <td>$product3</td>
            <td>120</td>
            <td>".($product3*120)."</td>
            <td>".$dis3."</td>
            </tr>";
        }
        if($product4 > 0){
            echo "<tr>
            <td>Pineapple</td>
            <td>$product4</td>
            <td>100</td>
            <td>".($product4*100)."</td>
            <td>".$dis4."</td>
            </tr>";
        }
        if($product5 > 0){
            echo "<tr>
            <td>Strawberries</td>
            <td>$product5</td>
            <td>100</td>
            <td>".($product5*100)."</td>
            <td>".$dis5."</td>
            </tr>";
        }
        echo "</table>";

        $total = $dis1 + $dis2 + $dis3 + $dis4 + $dis5;
        echo "<h3>Total:$total</h3>";

        echo "<a href='http://localhost/exp6-php/cart/index.html'>If you want to add more</a>";
    }
    else{
        echo "No items there in the cart, kindly add items using below link <br><br>";
        echo "<a href='http://localhost/exp6-php/cart/index.html'>Go back to add items to cart</a>";
       }
    }
    else{
        echo "No items there in the cart, kindly add items using below link <br><br>";
        echo "<a href='http://localhost/exp6-php/cart/index.html'>Go back to add items to cart</a>";
    }
?>