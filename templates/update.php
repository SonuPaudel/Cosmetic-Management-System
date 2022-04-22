<?php
$title = "UPDATE";
include_once('header.php');
$id = $name = $brand = $cost = $supplier = "";
if (isset($_GET["btnupdate"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $brand = $_GET["brand"];
    $cost = $_GET["cost"];
    $supplier = $_GET["supplier"];
    $conn = mysqli_connect("localhost", "root", "", "cosmetic_management");
    if (!$conn) {
        die("Error in connection");
    }

    $query = "UPDATE `cosmetic_details` SET `name` = '$name', `brand` = '$brand', `cost` = '$cost', `supplier` = '$supplier' WHERE `cosmetic_details`.`id` = $id";
    if (mysqli_query($conn, $query)) {
        echo "Information updated";
    } else {
        echo "Information update fail";
    }
}
?>

<html>

<head>
    <title>Cometic Update</title>
</head>

<body>
    <div class="container my-5">
        <center>
            <form action="update.php" method="get">
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
                        <td><input class="btn btn-primary" type="submit" value="submit" name="btnupdate"></td>
                    </tr>

                </table>
            </form>
        </center>
    </div>
</body>

</html>