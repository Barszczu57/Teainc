<?php

$conn = mysqli_connect('mysql.ct8.pl','m17098_Admin','Maslo12','m17098_Teainc');

$username_log = isset($_POST['username_log']) ? $_POST['username_log'] : '';
$password_log = isset($_POST['password_log']) ? $_POST['password_log'] : '';

$ok = true;

if ( !isset($username_log) || empty($username_log) ) {
    $ok = false;
}

if ( !isset($password_log) || empty($password_log) ) {
    $ok = false;
}
if($ok==true){
    $queryLog1="SELECT * FROM pracownicy_konta WHERE login ='$username_log' AND haslo='$password_log'";
    $resultLog1 = mysqli_query($conn, $queryLog1);
    $rowLog2 = mysqli_fetch_array($resultLog1);
}
if(mysqli_num_rows($resultLog1)==1){
    $ok = true;
}
else{
    $ok = false;
}

if($ok==false){
    $queryLog2="SELECT * FROM klienci_konta WHERE login ='$username_log' AND haslo='$password_log'";
    $resultLog2 = mysqli_query($conn, $queryLog2);
    $rowLog2 = mysqli_fetch_array($resultLog2);
}

if(mysqli_num_rows($resultLog2)==1){
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