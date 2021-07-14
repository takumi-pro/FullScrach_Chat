<?php
ini_set("log_errors", true);
ini_set("error_log", "php.log");
// ini_set("display_errors", 1);

const ERR_1 = "Please enter.";
const ERR_2 = "Please try again in a while.";
const ERR_3 = "Please enter the correct email format.";

$debug = false;
$err_msg = [];

//debug
function debug($msg){
    global $debug;
    if($debug){
        error_log("debug: ".$msg);
    }
}

function dbConnect(){
    $user = "root";
    $pass = "root";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true
    ];
    $dbh = new PDO("mysql:host=localhost;dbname=chat", $user, $pass, $options);
    return $dbh;
}

function query($dbh, $sql, $data){
    global $err_msg;
    $sth = $dbh->prepare($sql);
    if($sth->execute($data)){
        debug("query succes");
        return $sth;
    }else{
        debug("query failed");
        $err_msg["common"] = ERR_2;
        return false;
    }
}

function unenteredCheck($str, $key){
    global $err_msg;
    if($str === ""){
        $err_msg[$key] = ERR_1;
    }
}

function emailCheck($str, $key){
    global $err_msg;
    $isMatch = preg_match("/^[\w]+[\w\._-]*@[\w_-]+[\w\._-]+/", $str);
    if(!$isMatch){
        $err_msg[$key] = ERR_3;
    }
}