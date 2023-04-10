<?php

function OpenCon()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "application";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);

    return $conn;
}
//function untuk open connection dari webpage ke database

function CloseCon($conn)
{
    $conn->close();
}
//function untuk tutup connection

?>