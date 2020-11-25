<?php

$conn = mysqli_connect('localhost','root','','teainc');

$username_reg = isset($_POST['username_reg']) ? $_POST['username_reg'] : '';
$email_reg = isset($_POST['email_reg']) ? $_POST['email_reg'] : '';
$password_reg = isset($_POST['password_reg']) ? $_POST['password_reg'] : '';

$auth=0;
$ok = true;

if ( !isset($username_reg) || empty($username_reg) ) {
    $ok = false;
}
if ( !isset($email_reg) || empty($email_reg) ) {
    $ok = false;
}
if ( !isset($password_reg) || empty($password_reg) ) {
    $ok = false;
}

$queryReg="SELECT * FROM users WHERE username ='$username_reg' OR email='$email_reg'";
$resultReg = mysqli_query($conn, $queryReg);
$rowReg = mysqli_fetch_array($resultReg);

if(mysqli_num_rows($resultReg)==1){
    $ok = false;
}
else{
    $ok = true;
}
if($ok===true){
    $queryADD="INSERT INTO users (username,email,password,auth) VALUES ('$username_reg','$email_reg','$password_reg','$auth')";
    $resultADD = mysqli_query($conn, $queryADD);
}

echo json_encode(
    array(
        'ok' => $ok,
    )
);

?>

