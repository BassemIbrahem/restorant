<?php require "../config/Config.php"; ?>
<?php require "../libs/App.php"; ?>
<?php require "../includes/header.php"; ?>

<?php
    $app = new App;

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];


        $query = "select * from users where email='$email'";

        $data = [
            "email" => $email,
            "password" => $password,
        ];

        $path = "http://localhost/restorant";

        $app->login($query ,$data , $path );
    }

?>

<form class="" method="post" action="login.php">

    <input name="email" type="text" id="">
    <br>
    <input name="password" type="text" id="">
    <br>
    <button name="submit" type="submit">LOGIN</button>

    <?php if(isset($_SESSION['username'])) : ?> 
        <button name="submit" type="submit"><?php echo $_SESSION['username']; ?> </button>
    <?php else : ?>
        <button name="submit" type="submit"> still</button>

        <?php endif; ?>
</form>


<?php require "../includes/footer.php"; ?> 