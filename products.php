<?php
   $conn=new mysqli("localhost","root","","assignment2");
   $q1="SELECT title,price,file FROM product where category='shoes';";
   $rows1=$conn->query($q1);
//    echo "ROWS: " .  $rows1;
   while ($row=$rows1->fetch_assoc()){
       echo "title:".$row['title']." price:".$row['price']." file:".$row['file']."<br>";
       echo "<img src='products/".$row['file']."' width='200' height='200'>";
   }

//    $q2="SELECT title,price,file FROM product where category='men_clothes';";
//    $rows2=$conn->query($q2);
//    while ($row=$rows2->fetch_assoc()){
//        echo "title:".$row['title']." price:".$row['price']." file:".$row['file']."<br>";
//        echo "<img src='products/".$row['file']."' width='200' height='200'>";
//    }
?>