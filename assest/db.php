<?php
 
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["b436d63b6a0fa4"];
$cleardb_password = $cleardb_url["f7cb29fa"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

    /* Attempt to connect to MySQL database */
    try{
        $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        // Set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $GLOBALS['conn'] = $pdo;

    } catch(PDOException $e){
        $GLOBALS['e'] = $e;
        die("ERROR: Could not connect. " . $e->getMessage());
    }

