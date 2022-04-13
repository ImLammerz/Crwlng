<?php

$server = "localhost";
$user = "diskopu4_codeser";
$password = "diskopu4_codeser";
$database = "diskopu4_codeuse";

$db = mysqli_connect($server, $user, $password, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
