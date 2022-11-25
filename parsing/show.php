<?php
    //libxml_use_internal_errors(true);
$xml=simplexml_load_file("parse.xml") or die("Error: Cannot create object");
    echo "<table border=1>"; 
    echo "<tr>
     <th>Title</th>
     <th>ISBN</th>
     <th>Authors</th>
     <th>Price</th>
     <th>Edition</th>
    </tr>";
    foreach($xml->children() as $books){
        echo "<tr>";
        echo "<td>".$books->Title."</td>";
        echo "<td>".$books['ISBN']."</td>";
        echo "<td>".$books->Authors->First_Name."</td>";
        echo "<td>".$books['Price']."</td>";
        echo "<td>".$books['Edition']."</td>";
        echo"</tr>";
    }
    echo "</table>";
?>