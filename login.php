<?php

$conn = mysqli_connect('localhost','root','','teainc');

$username_log = isset($_POST['username_log']) ? $_POST['username_log'] : '';
$password_log = isset($_POST['password_log']) ? $_POST['password_log'] : '';

$ok = true;

if ( !isset($username_log) || empty($username_log) ) {
    $ok = false;
}

if ( !isset($password_log) || empty($password_log) ) {
    $ok = false;
}
$queryLog="SELECT * FROM users WHERE username ='$username_log' AND password='$password_log'";
$resultLog = mysqli_query($conn, $queryLog);
$rowLog = mysqli_fetch_array($resultLog);

if(mysqli_num_rows($resultLog)==1){
    $ok = true;
}
else{
    $ok = false;
}
echo json_encode(
    array(
        'ok' => $ok,
    )
);