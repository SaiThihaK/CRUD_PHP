<?php
include "db.php";

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    echo $_POST['email'];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];

    $query = "update `user` set id='$id',username='$username',email='$email',password='$password',phone='$phone'  where id = '$id' ";


    $response = mysqli_query($connectdb, $query);
    if ($response) {
        // echo "data is inserted";
        header("location:display.php");
    } else {
        die(mysqli_error($_connectdb));
        echo "nodata";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="d-flex justify-content-center mb-10">Update User</h1>
        <div>
            <form class="p-10 w-75" method="POST">
                <div class="mt-3 w-full d-flex flex-column form-group">
                    <label>User name</label>
                    <input placeholder="name" name="username" class="p- form-control " />
                </div>
                <div class="mt-3 w-full d-flex flex-column form-group">
                    <label>Email</label>
                    <input placeholder="email" name="email" class="p-2 form-control " />
                </div>
                <div class="mt-3 w-full d-flex flex-column form-group">
                    <label>Password</label>
                    <input placeholder="password" name="password" class="p-2 form-control" />
                </div>
                <div class="mt-3 w-full d-flex flex-column form-group">
                    <label>phone</label>
                    <input placeholder="phone" name="phone" class="p-2 form-control" />
                </div>
                <div class="d-flex justify-content-start mt-3">
                    <button type="sumit" class="btn btn-primary" name="submit" value="Submit">submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>