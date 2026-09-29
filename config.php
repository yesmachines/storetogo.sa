<?php
//$con = mysql_connect("localhost", "root", "") or die('error');
//mysql_select_db("unclefoody", $con);
//$host='localhost';
//$user='riyasm_nbc';
//$password='m%IuRsZ84TP?';
//$db='riyasm_nbc';
//$con = mysql_connect($host, $user, $password) or die('error');
//mysql_select_db($db, $con);
?>

<?php


$isLocal = in_array($_SERVER['SERVER_ADDR'] ?? '', ['127.0.0.1', '::1'], true);
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
define('URL', $isLocal ? $basePath . '/manage/' : 'https://storetogo.ae/manage/');
define("ABS_PATH", $_SERVER['DOCUMENT_ROOT'] . "/manage/");
define('UPLOADS', URL . 'public/uploads/');



//$con = mysql_connect("localhost", "root", "") or die('error');
//mysql_select_db("unclefoody", $con);
// $host='localhost';
// $user='hcoyym1o_storeto';
// $db='hcoyym1o_storetogo';
// $password='oJS#5$88!gr}';
// $con = mysqli_connect($host,$user,$password,$db) or die('error');



$host='localhost';
$user='hcoyym1o_storeto';
$db='hcoyym1o_storetogo';
$password='oJS#5$88!gr}';
if ($isLocal) {
    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $db = 'storetogo';
}

$con = false;
try {
    $con = @mysqli_connect($host, $user, $password, $db);
    if ($con) {
        mysqli_set_charset($con, 'utf8mb4');
    } else {
        error_log('Storetogo news database connection failed: ' . mysqli_connect_error());
    }
} catch (mysqli_sql_exception $error) {
    error_log('Storetogo news database connection failed: ' . $error->getMessage());
}
?>