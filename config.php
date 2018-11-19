<?php 
$db['db_host']= "";
$db['db_user']= "";
$db['db_pass']= "";
$db['db_name']= "";
$data_pass= "fria"; 
// $db['db_host']= "hostname";
// $db['db_user']= "username";
// $db['db_pass']= "pass";
// $db['db_name']= "dbname";
// $data_pass= "Pin Password";
foreach ($db as $key => $value) {
  define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$connection->set_charset("utf8");
$connection->query("SET collation_connection = utf8_general_ci");
if (!$connection) {
    die("something wrong in connection" . mysql_errno());
  }
 ?>
