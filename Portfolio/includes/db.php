<?php

    $server = "sql105.epizy.com";
    $username = "epiz_32176258";
    $password = "oT7eXWJ3hcKUvM";
    $dbname = "epiz_32176258_abulaportfolio";

    $con = mysql_connect($server, $username, $password, $dbname );

    if(!$con){
        die("Connection Failed:" .mysql_connect_error());
    }
?>   