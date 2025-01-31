<?php

    $query = "select * from foods where meal_id='1'";    
    $app = new App;
    $meals_1 = $app->selectAll($query);

    $query = "select * from foods where meal_id='2'";    
    $app = new App;
    $meals_2 = $app->selectAll($query);

    $query = "select * from foods where meal_id='3'";    
    $app = new App;
    $meals_3 = $app->selectAll($query);
?>


<form  method="post" action="booking_table.php">

    <input name="name" type="text" id="">
    <br>
    <input name="email" type="text" id="">
    <br>
    <input name="date_booking" type="text" id="">
    <br>
    
    <button name="submit" type="submit">BOOK</button>
</form>
