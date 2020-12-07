<?php

$conn = mysqli_connect('localhost','root','','teainc');

$workername_reg = isset($_POST['worker_name']) ? $_POST['worker_name'] : '';
$workermail_reg = isset($_POST['worker_mail']) ? $_POST['worker_mail'] : '';
$workerpasswd_reg = isset($_POST['worker_passwd']) ? $_POST['worker_passwd'] : '';

$auth=0;
$ok = true;

if ( !isset($workername_reg) || empty($workername_reg) ) {
    $ok = false;
}
if ( !isset($workermail_reg) || empty($workermail_reg) ) {
    $ok = false;
}
if ( !isset($workerpasswd_reg) || empty($workerpasswd_reg) ) {
    $ok = false;
}

$queryWorkerReg="SELECT * FROM pracownicy_konta WHERE login ='$workername_reg' OR email='$workermail_reg'";
$resultWorkerReg = mysqli_query($conn, $queryWorkerReg);
$rowWorkerReg = mysqli_fetch_array($resultWorkerReg);

if(mysqli_num_rows($resultWorkerReg)==1){
    $ok = false;
}
else{
    $ok = true;
}
if($ok===true){
    $queryADD="INSERT INTO pracownicy_konta (login,hasło,email) VALUES ('$workername_reg','$workerpasswd_reg','$workermail_reg')";
    $resultADD = mysqli_query($conn, $queryADD);
}

echo json_encode(
    array(
        'ok' => $ok,
    )
);


