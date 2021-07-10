<?php
require("./db.php");
$post = json_decode(file_get_contents("php://input"), true);

if($post){
    debug("post送信");
    $firstName = $post["first_name"];
    $lastName = $post["last_name"];
    $email = $post["email"];
    $pass = $post["password"];
    try{
        debug("dbconnect");
        $dbh = dbConnect();
        $sql = "INSERT INTO users SET first_name=?,last_name=?,email=?,password=?";
        $data = [$firstName, $lastName, $email, $pass];
        $sth = query($dbh, $sql, $data);
        header("Location:home.php");
    }catch (Exception $e){
        error_log("err: ".$e->getMessage());
    }
}