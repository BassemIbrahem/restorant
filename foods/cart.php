<?php

    $query = "select * from cart where user_id='$_SESSION[user_id]'";
    $app = new App;
    $cart_items = $app->selectAll($query);

    $cart_price = $app->selectOne("select sum(price) as all_price from cart wjere user_id='$_SESSION[user_id]'");


?>


<table>
 
<tr>
    <th>image</th>
    <th>name</th>
    <th>price</th>
    <th>delete</th>
  </tr>
 
<tbody>
    <?php foreach($cart_items as $cart_item) : ?>
    
        <tr>
            <td><?php echo $cart_item->name; ?></td>
            <td>a href="<?php echo APPURL; ?>/foods/delete-item.php?id=<?php echo $cart_item->id;?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
<p>total price is <?php echo $cart_price->all_price; ?></p>