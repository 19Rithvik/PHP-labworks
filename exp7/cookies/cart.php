<?php 
    error_reporting(0);
    echo "<title>CART(cookie)</title>";
    $x=0;
    if(isset($_POST['submit'])){
        $product = $_POST['product'];
        if($product == 'lamborghini'){
            setcookie('lamborghini', 'lamborghini', time()+60);
            $x=1;
        }
        elseif($product == 'rolls_royce'){
            setcookie('rolls_royce', 'rolls_royce', time()+60);
            $x=1;
        }
        elseif($product == 'benz'){
            setcookie('benz', 'benz', time()+60);
            $x=1;
        }
        elseif($product == 'dugatti'){
            setcookie('dugatti', 'dugatti', time()+60);
            $x=1;
        }
        elseif($product == 'porche'){
            setcookie('porche', 'porche', time()+60);
            $x=1;
        }
        elseif($product == null){
            $x=0;
        }
        if($x==1){
            echo "<h1>Cart</h1>";
            echo "<table border='1'>
            <tr>
            <th>Product</th>
            <th>Price</th>
            </tr>";
            if(isset($_COOKIE['lamborghini'])){
                echo "<tr>";
                echo "<td>Lamborghini</td>";
                echo "<td>2.4C</td>";
                echo "</tr>";
            }
            if(isset($_COOKIE['rolls_royce'])){
                echo "<tr>";
                echo "<td>Rolls Royce</td>";
                echo "<td>3C</td>";
                echo "</tr>";
            }
            if(isset($_COOKIE['benz'])){
                echo "<tr>";
                echo "<td>Benz</td>";
                echo "<td>2.7C</td>";
                echo "</tr>";
            }
            if(isset($_COOKIE['dugatti'])){
                echo "<tr>";
                echo "<td>Dugatti</td>";
                echo "<td>4C</td>";
                echo "</tr>";
            }
            if(isset($_COOKIE['porche'])){
                echo "<tr>";
                echo "<td>Porche</td>";
                echo "<td>2.9C</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "<br>";
            echo "<a href='index.html'>Add more</a>";
        }
        else{
            echo "<a href='index.html'>Add items</a>";
            echo "<h4>No items in cart</h4><br>";
        }
}
else{
    echo "<h4>No items in cart</h4>";
    echo "<a href='index.html'>Add items</a>";
}
?>