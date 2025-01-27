<?php require "../config/Config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>

<?php
    $app = new App;
    $app->validateSession();

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

    <input name="email" type="text" id="">
    <br>
    <input name="username" type="text" id="">
    <br>
    <input name="password" type="text" id="">
    <br>
    <button name="submit" type="submit">REGISTER</button>

</form>


<?php require "../includes/footer.php"; ?> 

