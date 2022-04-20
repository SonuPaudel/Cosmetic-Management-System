<?php
$title = "INSERT";
include_once('header.php');
$id = $name = $age = $email = $gender = $dob = $phone = "";
if (isset($_GET["btninsert"])) {
    $id = $_GET["txtid"];
    $name = $_GET["txtname"];
    $age = $_GET["age"];
    $email = $_GET["email"];
    $gender = $_GET["ddlgender"];
    $dob = $_GET["txtdob"];
    $phone = $_GET["phone"];
    $conn = mysqli_connect("localhost", "root", "", "studentdb");
    if (!$conn) {
        die("Error in connection");
    }

    $query = "INSERT INTO `data`(`id`,`name`,`age`,`email`,`gender`,`dob`,`phone`) VALUES (NULL,'$name','$age','$email','$gender','$dob','$phone');";
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
            <form action="index.php" method="get">
                <table>
                    <tr>
                        <th>ID</th>
                        <td><input type="number" name="txtid" value="<?php $id; ?>"></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><input type="text" name="txtname" value="<?php $name; ?>"></td>
                    </tr>
                    <tr>
                        <th>Age</th>
                        <td><input type="number" name="age" value="<?php $age; ?>"></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><input type="email" name="email" value="<?php $email; ?>"></td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td><select name="ddlgender">
                                <option value="Select">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>


                            </select></td>
                    </tr>
                    <tr>
                        <th>DOB</th>
                        <td><input type="date" name="txtdob" value="<?php $date; ?>"></td>
                    </tr>


                    <tr>
                        <th>Phone</th>
                        <td><input type="number" name="phone" value="<?php $phone; ?>"></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><input class="btn btn-primary" type="submit" value="submit" name="btninsert"></td>
                    </tr>






                </table>
            </form>
        </center>
    </div>