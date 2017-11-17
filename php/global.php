<?php

//Database Connection - Local
$datahost = "127.0.0.1";
// $datahost = "localhost";
$datauser = "root";
$datapw = "";
$datadb = "poll";
$dc;


function ConnectDB() {
    global $datahost;
    global $datauser;
    global $datapw;
    global $datadb;

    global $dc;
    $dc = mysqli_connect($datahost, $datauser, $datapw, $datadb);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $dc->set_charset("utf8");
}

function CleanJSON($string) {
  return str_replace("\n", "\\n", str_replace("\r", "\\r", str_replace("\"", "\\\"", str_replace("\\", "\\\\", $string))));
}
function CleanSQL($string) {
  return str_replace("\\", "\\\\", str_replace("'", "''", $string));
}
