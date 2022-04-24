<?php
$title = "Show All";
include_once("db_conn.php");
include_once("header.php");

?>

<body>
    <div class="container mt-5 ">
        <div class="wrap">
            <h1><?php echo $title; ?></h1>
            <h6 class="text-danger">
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

            </h6>
        </div>
        <div class="cnt-wrapbox-body mt-5">
            <div class="table-responsive">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Product ID</td>
                            <td>Product Name</td>
                            <td>Brand</td>
                            <td>Price</td>
                            <td>Supplier</td>
                            <td>For</td>
                            <td>Purchase Date</td>
                            <td>Action</td>


                        </tr>
                    </thead>
                    <tbody>


                        <?php

                        $sql = "Select * from `cosmetic_details`";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {

                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['id'];
                                $pname = $row['name'];
                                $brand = $row['brand'];
                                $cost = $row['cost'];
                                $supplier = $row['supplier'];
                                $gender = $row['productfor'];
                                $date = $row['date'];
                                echo '<tr>
                                            <td>' . $id . '</td>
                                            <td>' . $pname . '</td>
                                            <td>' . $brand . '</td>
                                            <td>' . $cost . '</td>
                                            <td>' . $supplier . '</td>
                                            <td>' . $gender . '</td>
                                            <td>' . $date . '</td>
                                            <td>
                                        <a href="update.php?updateid=' . $id . '" name="updateid" class="btn btn-primary m-2 text-light">Update</a>
                                        <a href="delete.php?deleteid=' . $id . '" class="btn btn-danger m-2 text-light">Delete</a>
                                        
                                        </td> 
                                        </tr>';
                            }
                        }
                        ?>
                    </tbody>
                </table>



            </div>


</body>