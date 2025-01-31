<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $date_booking = $_POST['date_booking'];
    $status = "pending";
    $user_id = $_SESSION['user_id'];

    if($date_booking > date("m/d/y h:i:sa")){


        $query = "insert into bookings (name , email, date_booking , status , user_id) values (:name , :email, :date_booking, :status, :user_id)";

        $arr = [
        ":name" => $item_id,
        ":email" => $name,
        ":date_booking" => $price,
        ":status" => $image,
        ":user_id" => $user_id,
         ];

        $path = "index.php";

        $app->insert($query ,$arr , $path );
    } else {
        echo "<script>alert(invalid date)</script>";
    }

}

?>