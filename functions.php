<?php

    include 'credentials.php';

    function secureVar($var){
        global $conn;
        return mysqli_real_escape_string($conn, $var);
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

    function input($type, $name, $required){
        if($required == 1){
            $required = "required";
        }else{
            $required = "";
        }
        echo "<input type='$type' name='$name' $required>";
    }

    function breakln(){
        echo "<br>";
    }

?>