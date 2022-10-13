<?php
    $servidor = "localhost";
    $user = "devbuscapet";
    $password = "devbuscapet";
    $dbname = "bdbuscapet";

    $conn = mysqli_connect($servidor, $user, $password, $dbname);
    if(!$conn) {
        die("Falied to connect".mysqli_connect_error());
    } else {
        echo "Connection success <br><br>";
    }
?>