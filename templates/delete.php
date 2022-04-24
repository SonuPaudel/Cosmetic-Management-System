<?php
include "db_conn.php";
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    mysqli_begin_transaction($conn);
    try {
        $sql = "DELETE FROM `cosmetic_details` WHERE id=$id";

        $result = mysqli_query($conn, $sql);

        mysqli_commit($conn);
        if ($result) {
            header("Location: ../templates/showall.php?error=Record Deleted Succesfully");
            exit();
        }
    } catch (mysqli_sql_exception $exception) {
        mysqli_rollback($conn);
        throw $exception;
        echo "Error";
    }
}
