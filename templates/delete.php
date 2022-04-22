<?php
$title = "DELETE";
include_once('header.php');
$id = "";
if (isset($_GET["btndelete"])) {
    $id = $_GET["id"];

    $conn = mysqli_connect("localhost", "root", "", "cosmetic_management");
    if (!$conn) {
        die("Error in connection");
    }

    $query = "delete from cosmetic_details where`id` = $id";
    if (mysqli_query($conn, $query)) {
        echo "Information Deleted";
    } else {
        echo "Information delete fail";
    }
}
?>

<html>

<head>
    <title>Cometic Delete</title>
</head>

<body>
    <div class="container my-5">
        <center>
            <form action="delete.php" method="get">
                <table>
                    <tr>
                        <th>ID</th>
                        <td><input type="number" name="id" value="<?php $id; ?>"></td>
                    </tr>

                    <tr>
                        <th></th>
                        <td><input class="btn btn-primary" type="submit" value="submit" name="btndelete"></td>
                    </tr>

                </table>
            </form>
        </center>
    </div>
</body>

</html>