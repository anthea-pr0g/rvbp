<!-- Include Head -->
<?php include "assest/head.php"; ?>
<?php

$user_id = $_GET["id"];

// Get author Data to display
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();

?>

<title>Update User</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Update User</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/update.php?type=user&id=<?= $user_id ?>" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="UserName">User Name (required*)</label>
                            <input type="text" class="form-control" name="UserName" id="UserName" value="<?= $user['username'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="UserEmail">Email (required*)</label>
                            <input type="text" class="form-control" name="UserEmail" id="UserEmail" value="<?= $user['email'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="UserPassword">Password (required*)</label>
                            <input type="password" class="form-control" name="UserPassword" id="UserPassword">
                        </div>
                        
						<div class="form-group">
                            <label for="UserConfirmPassword">Confirm Password (required*)</label>
                            <input type="password" class="form-control" name="UserConfirmPassword" id="UserConfirmPassword">
                        </div>
                        <div class="form-group" align="center">
                            
                            <select name="checkadmin" id="checkadmin">
                            	<option value="0" <?php if ($user["userlevel"]==0) echo "selected";?> >User</option>
                            	<option value="1" <?php if ($user["userlevel"]==1) echo "selected";?> >Admin</option>
                            </select>
                        </div>


                        <div class="text-center">
                            <button type="submit" name="update" class="btn btn-success btn-lg w-25">Submit</button>
                        </div>


                    </form>
                </div>


            </div>

        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->

</body>

</html>
