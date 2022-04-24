<?php
$title = "Dashboard";
include_once('../templates/header.php');
?>

<body>
    <div class="wrap">
        <h1><?php echo $title; ?></h1>
    </div>
    <div class="container pt-5 mt-5">
        <main>

            <div class="cards">
                <div>
                    <a href="../templates/showall.php" class="card-single btn">
                        <h1>Show All</h1>
                    </a>

                </div>
                <div>
                    <a href="../templates/showindividual.php" class="card-single btn">
                        <h1>Show Individual</h1>
                    </a>
                </div>

                <div>
                    <a href="../templates/insert.php" class="card-single btn">
                        <h1>Insert</h1>
                    </a>
                </div>
                <div>
                    <a href="../templates/deleteindividual.php" class="card-single btn">
                        <h1>Delete</h1>
                    </a>
                </div>
                <div>
                    <a href="../templates/logout.php" class="card-single btn">
                        <h1>Logout</h1>
                    </a>
                </div>
        </main>
    </div>



</body>

</html>