<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

// Check if the admin is already logged in, if yes then redirect him to home page
if (!$loggedin) {
    header("location: index.php");
    exit;
}

$OUT_STRING = array("0"=>"user", "1"=>"admin");

$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll();


$hashedpassword = password_hash("abcd", PASSWORD_BCRYPT);
$test = password_verify("abcd", $hashedpassword);

// echo $test;

?>

<title>All User</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />

<style>
    .fa-twitter,
    .fa-github,
    .fa-linkedin-square {
        font-size: 2.3rem;
    }
</style>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- </Header> -->

    <!-- Main -->
    <main role="main" class="main">
        <div class="jumbotron text-center mb-0">
            <h1 class="display-3 font-weight-normal text-muted">All Users</h1>
        </div>

        <div class="bg-white py-3 px-5">
            <div class="row">

                <div class="col-lg-12 text-center mb-3">
                    <a class="btn btn-info" href="add_admin.php">Add User/Admin</a>
                </div>

            </div>

            <div class="row">
                <table class='table table-striped table-bordered'>

                    <thead class='thead-dark'>
                        <tr>
                            <th scope='col'>Name</th>
                            <th scope='col'>Email</th>
                            <th scope='col'>UserType</th>
                            <th scope='col' colspan="2">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($users as $user) :
                            echo "<tr>";
                            ?>
                            
                            <td><?= $user['username'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><?= $OUT_STRING[$user['userlevel']] ?></td>

                            <td>
                                <a class="btn btn-success" href="update_user.php?id=<?= $user['id'] ?>">
                                    <i class="fa fa-pencil " aria-hidden="true"></i>
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="assest/delete.php?type=users&id=<?= $user['id'] ?>">
                                    <i class="fa fa-trash " aria-hidden="true"></i>
                                </a>
                            </td>

                        <?php
                            echo "</tr>";
                        endforeach;
                        ?>
                    </tbody>

                </table>
            </div>

        </div>

    </main><!-- </Main> -->

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->

</body>

</html>
