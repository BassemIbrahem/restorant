<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "select * from foods where id='$id'";    
    $app = new App;
    
    $one = $app->selectOne($query);


    if(isset($_SESSION['user_id'])){
        
        $q = "select * from cart where item_id='$id' and user_id='$_SESSION[user_id]'";
        $count= $app->validateCart($q);
    }




    if(isset($_POST['submit'])){

        $item_id = $_POST['item_id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        $user_id = $_SESSION['user_id'];

        $query = "insert into cart (item_id , name, price , image , user_id) values (:item_id , :name, :price, :image, :user_id)";

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

}


?>
<form  method="post" action="add_cart.php?id=<?php echo $id; ?>">
    <input name="item_id" type="text" value="<?php echo $one->id; ?>">
    <br>
    <input name="name" type="text" value="<?php echo $one->name; ?>">
    <br>
    <input name="image" type="text" value="<?php echo $one->image; ?>">
    <br>
    <input name="price" type="text" value="<?php echo $one->price; ?>">
    <br>
    <?php if($count > 0): ?>
        <button name="submit" type="submit" disable>LOGIN</button>
    <?php else: ?>
        <button name="submit" type="submit">LOGIN</button>
    <?php endif; ?>

</form>