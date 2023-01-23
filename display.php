<?php
include "db.php";

$query = "select * from user";

$response = mysqli_query($connectdb, $query);


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


<body class="container">
    <div class="py-5 d-flex justify-content-end">
        <a href="user.php">
            <button class="btn btn-primary">
                Add User
            </button>
        </a>

    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Phone</th>
                <th scope="col">Operation</th>
            </tr>
        </thead>
        <?php
        if ($response) {
            while ($row = mysqli_fetch_assoc($response)) {
                $id = $row['id'];
                $name = $row["username"];
                $email = $row['email'];
                $password = $row['password'];
                $phone = $row['phone'];

                echo "<tbody>
            <tr>
                <th scope='row'>$id</th>
                <td scope='row'>$name</td>
                <td scope='row'>$email</td>
                <td scope='row'>$password</td>
                <td scope='row'>$phone</td>
                <td scope='row'>
                <a href='update.php?id=$id'><button class='btn btn-primary'>Update</button></a>
                <a href='delete.php?id=$id'><button class='btn btn-danger'>Delete</button>
                </td>
            </tr>
    
        </tbody>";
            }
        } else {
            die($mysqli_error($connectdb));
        }
        ?>
    </table>
</body>

</html>