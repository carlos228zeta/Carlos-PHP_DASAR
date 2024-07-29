<?php
    $username = "admin";
    $password = "qwerty";

    if ($username=="admin" AND $password=="qwerty"){
        echo "Nama dan password sesuai, hak akses duberikan..";
    }
    else
    if ($username=="admin" AND $password=="qwerty"){
        echo "Nama sesuai, password tidak sesuai!";
    }
    else
    if ($username=="admin" AND $password=="qwerty"){
        echo "Nama tidak sesuai, password sesuai!";
    }
    else {
        echo "Nama dan password tidak sesuai!";
    }

$username = "admin";
$password = "qwerty";

if ($username == "admin") {
    if ($password == "qwerty") {
        echo "Username dan password sesuai, hak akses diberikan.";
    } else {
        echo "Username sesuai, password tidak sesuai!";
    }
} else {
    if ($password == "qwerty") {
        echo "Username tidak sesuai, password sesuai!";
    } else {
        echo "Nama dan password tidak sesuai!";
    }
}
?>