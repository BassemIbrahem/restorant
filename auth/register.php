<?php require "../config/Config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>

<?php
    $app = new App;

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        $query = "insert into users (username , email, password) values (:username , :email, :password)";

        $arr = [
            ":username" => $username,
            ":email" => $email,
            ":password" => $password,
        ];

        $path = "login.php";

        $app->register($query ,$arr , $path );
    }

?>

<form class="" method="post" action="register.php">
<input name="username" type="text" id="">
<input name="email" type="text" id="">
<input name="password" type="text" id="">

<button name="submit" type="submit">
</form>






<?php require "../includes/footer.php"; ?> 

