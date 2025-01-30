<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query = "delete from cart where id='$id'";    
    $app = new App;

    $path - "cart.php";
    $app->delete($query, $path);
}


?>