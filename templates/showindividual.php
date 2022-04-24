<?php
$title = "Show Individual";
include_once("db_conn.php");
include_once("header.php");
?>

<body>
    <div class="container mt-5 ">
        <div class="wrap">
            <h1><?php echo $title; ?>

            </h1>
        </div>
        <center>
            <div class="mt-5">
                <form action="?">
                    <div class="form-group">
                        <table>
                            <tr>
                                <td>

                                <th>Select</th>
                                <td><select class="form-select" id="select" name="id">
                                        <option value="">Choose...</option>
                                        <?php
                                        $sql = "SELECT * FROM `cosmetic_details`";
                                        $result = mysqli_query($conn, $sql);
                                        if ($result) {

                                            while ($row = mysqli_fetch_assoc($result)) {

                                                echo "<option value='" . $row['id'] . "'";
                                                echo $row['id'] == ($_GET['id'] ?? 0) ? ' selected' : '';
                                                echo ">" . $row['name'] . "</option>";
                                            }
                                        }

                                        ?>

                                    </select></td>
                                </td>
                                <td><button class="btn btn-primary" type="submit">Show</button></td>
                            </tr>
                        </table>
                    </div>

                </form>

                <?php
                if (!empty($_GET['id'])) {
                    $globalid = $_GET['id'];
                    $data = [];
                    $sql = "Select * from `cosmetic_details` WHERE id=$globalid";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $data = $row;
                        }
                    }
                    $sql = "Select * from `cosmetic_details` WHERE id=$globalid";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $data2 = $row;
                        }
                    }

                    if (empty($data) || empty($data2)) {
                        die("Data Not Found");
                    }

                ?>
                    <div>
                        <table>
                            <tr>
                                <th>Id</td>
                                <td><?php echo $data['id']; ?></th>
                            </tr>
                            <tr>
                                <th>Product Name:</td>
                                <td><?php echo $data['name']; ?></th>
                            </tr>
                            <tr>
                                <th>Product Brand:</td>
                                <td><?php echo $data['brand']; ?></th>
                            </tr>
                            <tr>
                                <th>Product Cost:</td>
                                <td><?php echo $data['cost']; ?></th>
                            </tr>

                            <th>Product For:</td>
                            <td><?php echo $data['productfor']; ?></th>
                                </tr>
                                <tr>
                                    <th>Product Supplier:
                            </td>
                            <td><?php echo $data['supplier']; ?></th>
                                </tr>
                                <tr>
                                    <th>Purchase Date:
                            </td>
                            <td><?php echo $data['date']; ?></th>
                                </tr>

                        </table>
                    </div>


                <?php } ?>
            </div>
        </center>
</body>