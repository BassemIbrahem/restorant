<?php

    $query = "select * from foods where meal_id='1'";    
    $app = new App;
    $meals_1 = $app->selectAll($query);

    $query = "select * from foods where meal_id='2'";    
    $app = new App;
    $meals_2 = $app->selectAll($query);





?>