<?php
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Origin: *");
?>
(function(){
    console.log("Inside the remote script.");
    return "remote script";
})();