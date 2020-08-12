<?php

    include 'credentials.php';

    function secureVar($var){
        global $conn;
        return htmlspecialchars(mysqli_real_escape_string($conn, $var), ENT_QUOTES, 'UTF-8');
    }

    function secureSelf(){
        echo htmlentities($_SERVER['PHP_SELF']);
    }

    function redirectTo($url){
        echo "<script>document.location='$url';</script>";
    }

    function isPost(){
        return $_SERVER['REQUEST_METHOD'] == "POST";
    }

    function alert($msg){
        echo "<script>alert('$msg');</script>";
    }

    function breakln(){
        echo "<br>";
    }

?>