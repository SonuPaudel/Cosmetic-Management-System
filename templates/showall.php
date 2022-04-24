<?php
$title = "SHOW ALL";
include_once('header.php');
$id = $name = $brand = $cost = $supplier = $productfor = $date = "";
if (isset($_GET["btnshowall"])) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    $brand = $_GET["brand"];
    $cost = $_GET["cost"];
    $supplier = $_GET["supplier"];
    $productfor = $_GET["productfor"];
    $date = $_GET["date"];
    $conn = mysqli_connect("localhost", "root", "", "cosmetic_management");
    if (!$conn) {
        die("Error in connection");
    }

    $query = "SELECT * FROM `cosmetic_details`";
    if (mysqli_query($conn, $query)) {
        echo "information saved";
    } else {
        echo "information save fail succesfully";
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
            <form action="showall.php" method="get">
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
                        <td><input type="text" name="supplier" value="<?php $supplier; ?>"></td>
                    </tr>
                    <tr>
                        <th>Purchase Date</th>
                        <td><input type="date" name="date" value="<?php $date; ?>"></td>
                    </tr>

                    <tr>
                        <th></th>
                        <td><input class="btn btn-primary" type="submit" value="submit" name="btnshowall"></td>
                    </tr>

                </table>
            </form>
        </center>
    </div>
</body>

</html>