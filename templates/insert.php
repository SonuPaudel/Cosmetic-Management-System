<?php
$title = "INSERT";
include_once('header.php');
include_once('db_conn.php');
$id = $name = $brand = $cost = $supplier = $productfor = $data = "";
if (isset($_GET["btninsert"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $brand = $_GET["brand"];
    $cost = $_GET["cost"];
    $supplier = $_GET["supplier"];
    $productfor = $_GET["productfor"];
    $date = $_GET["date"];
    if (!$conn) {
        die("Error in connection");
    }

    $query = "INSERT INTO `cosmetic_details`(`id`,`name`,`brand`,`cost`,`supplier`,`productfor`,`date`) VALUES (NULL,'$name','$brand','$cost','$supplier','$productfor','$date');";
    if (mysqli_query($conn, $query)) {
        header("Location: showall.php?error=Record Added Succesfully");
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
                        <td><input type="number" name="id" value="<?php echo $id; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Brand</th>
                        <td><input type="text" name="brand" value="<?php echo $brand; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Cost</th>
                        <td><input type="number" name="cost" value="<?php echo $cost; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product For</th>
                        <td><select name="productfor">
                                <option value="Select">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>Product Supplier</th>
                        <td><input type="text" name="supplier" value="<?php echo $supplier; ?>"></td>
                    </tr>
                    <tr>
                        <th>Purchase Date</th>
                        <td><input type="date" name="date" value="<?php echo $date; ?>"></td>
                    </tr>

                    <tr>
                        <th></th>
                        <td><input class="btn btn-primary" type="submit" value="submit" name="btninsert"></td>
                    </tr>

                </table>
            </form>
        </center>
    </div>