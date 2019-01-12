<?php
include "credentials.php";
include "functions.php";
session_start();
?>

    <html>
    <head>
        <title><?php echo $title ?></title>
    </head>
    <body>
    <h1>Admin Panel</h1>
    <form action="<?php secureSelf(); ?>" method="post">
        <p>id : </p>
        <input type="text" name="id">
        <p>Password : </p>
        <input type="password" name="pass">
        <button type="submit" name="login">Login</button>
    </form>
    </body>
    </html>

<?php
if(isPost()){
    if(isset($_POST["login"])){
        $id = secureVar($_POST["id"]);
        $pass = secureVar($_POST["pass"]);

        if($id == "rohan" and $pass == "rohan"){
            $_SESSION["aid"] = $id;
            $_SESSION["apass"] = $pass;

            redirectTo("adminpanel.php");

        }
    }
}
?>