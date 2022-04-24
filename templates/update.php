<?php
$title = "UPDATE";
include_once('db_conn.php');
include_once('header.php');
if (isset($_GET['updateid'])) {
    $globalid = $_GET['updateid'];
    $data = [];
    $sql = "Select * from `cosmetic_details` WHERE id=$globalid";
    $result = mysqli_query($conn, $sql);
    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {
            $data = $row;
        }
    }
}
if (isset($_GET["btnupdate"])) {
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

    $query = "UPDATE `cosmetic_details` SET `name` = '$name',`brand` = '$brand', `cost` = '$cost', `supplier` = '$supplier',`productfor`='$productfor',`date`='$date' WHERE `cosmetic_details`.`id` = $id";
    if (mysqli_query($conn, $query)) {
        header("Location: showall.php?error=Record updated Succesfully");
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
        <div class="mb-5">
            <center>
                <h2><?php echo $title ?></h2>
            </center>
            <div class="text-danger">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </div>
        </div>
        <center>
            <form action="update.php" method="get">
                <table>
                    <tr>
                        <th>ID</th>
                        <td><input type="number" name="id" value="<?php echo $data['id']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Brand</th>
                        <td><input type="text" name="brand" value="<?php echo $data['brand']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product Cost</th>
                        <td><input type="number" name="cost" value="<?php echo $data['cost']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Product For</th>
                        <td><select name="productfor">
                                <option>Select...</option>
                                <option value="Male" <?php echo $data['productfor'] == 'Male' ? 'selected' : ''; ?>>Male</option>
                                <option value="Female" <?php echo $data['productfor'] == 'Female' ? 'selected' : ''; ?>>Female</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Product Supplier</th>
                        <td><input type="text" name="supplier" value="<?php echo $data['supplier']; ?>"></td>
                    </tr>
                    <tr>
                        <th>Purchase Date</th>
                        <td><input type="date" name="date" value="<?php echo $data['date']; ?>"></td>
                    </tr>

                </table>
                <button type="submit" name="btnupdate" class="btn btn-primary">Submit</button>
            </form>
        </center>
    </div>
</body>

</html>