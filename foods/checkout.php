<?php
    // to prevent someone to writ url and go directly to the page

    if(!isset($_SESION['HTTTP_REFERER'])){
        // redirect them to your desired location
        echo "<script>window.location.href='".$path."'</script>";

    }  





    $app = new APP();
    
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $twon = $_POST['twon'];
        $country = $_POST['country'];
        $zipcode = $_POST['zipcode'];
        $total_price = $_SESSION['total_price'];
        $user_id = $_SESSION['user_id'];
        

        $query = "insert into orders (name , email, twon , country , zipcode , total_price, user_id) values (:name , :email, :twon, :country, :zipcode, :total_price, :user_id)";

        $arr = [
            ":name" => $name,
            ":email" => $email,
            ":twon" => $twon,
            ":country" => $country,
            ":zipcode" => $zipcode,
            ":total_price" => $total_price,
            ":user_id" => $user_id,
        ];

        $path = "pay.php";

        $app->insert($query ,$arr , $path );
    }

    
?>


<form  method="post" action="checkout.php">
        <input name="email" type="text" value="<?php echo $one->id; ?>">
        <br>
        <input name="twon" type="text" value="<?php echo $one->name; ?>">
        <br>
        <input name="country" type="text" value="<?php echo $one->image; ?>">
        <br>
        <input name="zipcode" type="text" value="<?php echo $one->price; ?>">
        <br>
        <button name="submit" type="submit" disable>LOGIN</button>
    
    </form>
