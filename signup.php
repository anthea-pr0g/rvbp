<?php include "assest/head.php"; ?>
<?php

function insertToDB($conn, $table, $data)
{

    // Get keys string from data array
    $columns = implodeArray(array_keys($data));
    // Get values string from data array with prefix (:) added
    $prefixed_array = preg_filter('/^/', ':', array_keys($data));
    $values = implodeArray($prefixed_array);

    $query_search = "SELECT * FROM $table where username = '".$data["username"]."'";
    $pdo_statement = $conn->prepare($query_search);
    // $pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
    $pdo_statement->execute();
    $row_count = $pdo_statement->rowCount();

    if(empty($row_count)){
        try {
            // prepare sql and bind parameters
            $sql = "INSERT INTO $table ($columns) VALUES ($values)";
            $stmt = $conn->prepare($sql);
    
            // insert row
            $stmt->execute($data);
            echo "New records created successfully";
        } catch (PDOException $error) {
            echo $error;
        }
        return 1;

    }else{
        return 0;
    }
    
}

function implodeArray($array)
{
    return implode(", ", $array);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}




// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$signStatus = 1;
if (isset($_GET["signStatus"])) {

    $signStatus = $_GET["signStatus"];
}

// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }


    if (empty($username_err) && empty($password_err)) {

        
        $confirm_password = trim($_POST["passwordconfirm"]);
        
        if ($password != $confirm_password){
        	$password_err = "Please confirm password";
        	exit;
        }
        
        $hashedpassword = md5($confirm_password);
        
        $data = array(
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" =>  $hashedpassword,
            "userlevel" =>  "0"
        );

        $tableName = 'users';
        if(insertToDB($conn, $tableName, $data) == 1){
            $_SESSION["loggedin"] = true;
            $loggedin = true;
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["userlevel"] = 0;
            header("Location: ../index.php", true, 301);
        }
        else{
            header("Location: ../signup.php?signStatus=0", true, 301);
        }

        
        
    }

    // Close connection
    unset($pdo);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo/flogo.png" sizes="32x32" type="image/png">

    <!-- Bootstrap, FontAwesome, Custom Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">


    <title>Sign Up</title>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    <?php include "assest/header.php" ?>
    <!-- </Header> -->

    <!-- Main -->
    <main class="main">

        <!-- Latest Articles -->
        <div class="section jumbotron mb-0 h-100">
            <!-- container -->
            <div class="container d-flex flex-column justify-content-center align-items-center h-100">


                <!-- row -->
                <div class="wrapper bg-white rounded px-4 py-4 w-50">

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                            <span class="invalid-feedback"><?= $username_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control <?= (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="">
                            <span class="invalid-feedback"><?= $email_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?= $password_err; ?></span>
                        </div>
                        <div class="form-group">
                            <label>Password Confirm</label>
                            <input type="password" name="passwordconfirm" class="form-control <?= (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <span class="invalid-feedback"><?= $passwordconfirm_err; ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Signup">
                        </div>
                        <?php 
                        if($signStatus == 0) { ?>
                            <span class="sign-error">Your username is already exist. Please enter another username.</span>
                        <?php } ?>
                    </form>
                </div>

                <!-- /row -->

            </div>
            <!-- /container -->
        </div>


    </main><!-- </Main> -->

    <!-- Footer -->
    <!-- <?php include "assest/footer.php" ?> -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>

