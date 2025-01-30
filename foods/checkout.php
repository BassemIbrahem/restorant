<?php
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $twon = $_POST['twon'];
        $country = $_POST['country'];
        $zipcode = $_POST['zipcode'];
        $total_price = $_SESSION['total_price'];
        $user_id = $_SESSION['user_id'];
        

        $query = "insert into orders (item_id , name, price , image , user_id) values (:item_id , :name, :price, :image, :user_id)";

        $arr = [
            ":item_id" => $item_id,
            ":name" => $name,
            ":price" => $price,
            ":image" => $image,
            ":user_id" => $user_id,
        ];

        $path = "cart.php";

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
