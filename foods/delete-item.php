<?php


        // to prevent someone to writ url and go directly to the page

        if(!isset($_SESION['HTTTP_REFERER'])){
            // redirect them to your desired location
            echo "<script>window.location.href='".$path."'</script>";
    
        } 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    
    $query = "delete from cart where id='$id'";    
    $app = new App;

    $path - "cart.php";
    $app->delete($query, $path);
}


?>