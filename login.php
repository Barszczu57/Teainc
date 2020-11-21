<?php

$connection = mysqli_connect('localhost','root','','teainc');

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$ok = true;

if ( !isset($username) || empty($username) ) {
    $ok = false;
}

if ( !isset($password) || empty($password) ) {
    $ok = false;
}

$query="SELECT * FROM users WHERE username ='$username' and password='$password'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

if(mysqli_num_rows($result)==1){
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

?>