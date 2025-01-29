<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from foods where id='$id'";    
    $app = new App;
    
    $one = $app->selectOne($query);

}



?>