<?php
$title = "INSERT";
include_once('header.php');
$id = $name = $brand = $cost = $supplier = "";
if (isset($_GET["btninsert"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $brand = $_GET["brand"];
    $cost = $_GET["cost"];
    $supplier = $_GET["supplier"];
    $conn = mysqli_connect("localhost", "root", "", "cosmetic_management");
    if (!$conn) {
        die("Error in connection");
    }

    $query = "INSERT INTO `cosmetic_details`(`id`,`name`,`brand`,`cost`,`supplier`) VALUES (NULL,'$name','$brand','$cost','$supplier');";
    if (mysqli_query($conn, $query)) {
        echo "information saved";
    } else {
        echo "information save fail succesfully";
    }
}
?>


<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Register</title>
</head>

<body>
    <div class="container my-5">
        <center>
            <form action="insert.php" method="get">
                <table>
                    <tr>
                        <th>ID</th>
                        <td><input type="number" name="id" value="<?php $id; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td><input type="text" name="name" value="<?php $name; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Brand</th>
                        <td><input type="text" name="brand" value="<?php $brand; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Cost</th>
                        <td><input type="number" name="cost" value="<?php $cost; ?>"></td>
                    </tr>

                    <tr>
                        <th>Product Supplier</th>
                        <td><input type="text" name="supplier" value="<?php $supplier; ?>"></td>
                    </tr>

                    <tr>
                        <th></th>
                        <td><input class="btn btn-primary" type="submit" value="submit" name="btninsert"></td>
                    </tr>

                </table>
            </form>
        </center>
    </div>