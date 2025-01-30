<?php

            // to prevent someone to writ url and go directly to the page

            if(!isset($_SESION['HTTTP_REFERER'])){
                // redirect them to your desired location
                echo "<script>window.location.href='".$path."'</script>";
        
            } 
    $query = "delete from cart where id='$_SESSION[user_id]'";    
    $app = new App;

    $path - "cart.php";
    $app->delete($query, $path);



?>