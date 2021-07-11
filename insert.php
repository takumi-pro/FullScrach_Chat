<?php
require("./db.php");
$post = json_decode(file_get_contents("php://input"), true);

if($post){
    debug("post");
    $firstName = $post["first_name"];
    $lastName = $post["last_name"];
    $email = $post["email"];
    $pass = $post["password"];

    unenteredCheck($firstName, "first_name");
    unenteredCheck($lastName, "last_name");
    unenteredCheck($email, "email");
    unenteredCheck($pass, "password");

    if(empty($err_msg)){
        try{
            debug("dbconnect");
            $dbh = dbConnect();
            $sql = "INSERT INTO user SET first_name=?,last_name=?,email=?,password=?,created_at=NOW()";
            $data = [$firstName, $lastName, $email, $pass];
            $sth = query($dbh, $sql, $data);
        }catch (Exception $e){
            error_log("err: ".$e->getMessage());
            $err_msg["common"] = $e->getMessage();
        }
        echo json_encode($err_msg);
    }else{
        echo json_encode($err_msg);
    }
}