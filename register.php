<?php

$connection1 = mysqli_connect('localhost','root','','teainc');

$username1= isset($_POST['username1']) ? $_POST['username1'] : '';
$email1 = isset($_POST['email1']) ? $_POST['email1'] : '';
$password1 = isset($_POST['password1']) ? $_POST['password1'] : '';
$auth=0;
$ok = true;

if ( !isset($username1) || empty($username1) ) {
    $ok = false;
}
if ( !isset($email1) || empty($email1) ) {
    $ok = false;
}
if ( !isset($password1) || empty($password1) ) {
    $ok = false;
}

$query1="SELECT * FROM users WHERE username ='$username1' OR email='$email1'";
$result1 = mysqli_query($connection1, $query1);
$row1 = mysqli_fetch_array($result1);

if(mysqli_num_rows($result1)==1){
    $ok = false;
}
else{
    $ok = true;
}
if($ok===true){
    $queryADD="INSERT INTO users (username,email,password,auth) VALUES ('$username1','$email1','$password1','$auth')";
    $resultADD = mysqli_query($connection1, $queryADD);
}

echo json_encode(
    array(
        'ok' => $ok,
    )
);

?>

