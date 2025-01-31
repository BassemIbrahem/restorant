<?php

    $query = "select * from bookings where user_id='$_SESSION[user_id]'";
    $app = new App;
    $bookings = $app->selectAll($query);



?>
