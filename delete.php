<?php

include "db.php";
$id = $_GET["id"];

$query = "delete from user where id=$id";

$result = mysqli_query($connectdb, $query);

if ($result) {
    header('location:display.php');
} else {
    die(mysqli_errno($connectdb));
}
