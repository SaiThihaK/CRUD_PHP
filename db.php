<?php


$connectdb = new mysqli("localhost", "root", "sai2002dec24", "crud");

if ($connectdb) {
    echo "";
} else {
    die(mysqli_error($connectdb));
}
