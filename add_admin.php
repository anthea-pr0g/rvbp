<?php
$addStatus = 1;
if (isset($_GET["addStatus"])) {
    $addStatus = $_GET["addStatus"];
}
?>
<!-- Include Head -->
<?php include "assest/head.php"; ?>

<title>Add Admin</title>
</head>

<body>

    <!-- Header -->
    <?php include "assest/header.php" ?>

    <!-- Main -->
    <main role="main" class="main">

        <div class="jumbotron text-center">
            <h1 class="display-3 font-weight-normal text-muted">Add User/Admin</h1>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-lg-12 mb-4">
                    <!-- Form -->
                    <form action="assest/insert.php?type=user" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="adminName">Name</label>
                            <input type="text" class="form-control" name="UserName" id="user">
                        </div>

                        <div class="form-group">
                            <label for="adminEmail">Email</label>
                            <input type="email" class="form-control" name="UserEmail" id="UserEmail">
                        </div>

						<div class="form-group">
                            <label for="adminPassword">Password</label>
                            <input type="password" class="form-control" name="UserPassword" id="UserPassword">
                        </div>
                        
						<div class="form-group">
                            <label for="adminConfirmPassword">Confirm Password</label>
                            <input type="password" class="form-control" name="UserConfirmPassword" id="UserConfirmPassword">
                        </div>
                        <div class="form-group" align="center">
                            
                            <select name="checkadmin" id="checkadmin">
                            	<option value="0" >User</option>
                            	<option value="1" >Admin</option>
                            </select>
                        </div>   
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-success btn-lg w-25">Submit</button>
                        </div>
                        <?php 
                        if($addStatus == 0) { ?>
                            <span class="sign-error">Your username is already exist. Please enter another username.</span>
                        <?php } ?>
                    </form>
                </div>

            </div>
        </div>

    </main>

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->


</body>

</html>
