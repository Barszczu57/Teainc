<?php

$connection2 = mysqli_connect('localhost','root','','teainc');

$username2 = isset($_POST['username2']) ? $_POST['username2'] : '';
$password2 = isset($_POST['password2']) ? $_POST['password2'] : '';

$ok = true;

if ( !isset($username2) || empty($username2) ) {
    $ok = false;
}

if ( !isset($password2) || empty($password2) ) {
    $ok = false;
}

$query2="SELECT * FROM users WHERE username ='$username2' AND password='$password2'";
$result2 = mysqli_query($connection2, $query2);
$row2 = mysqli_fetch_array($result2);

if(mysqli_num_rows($result2)==1){
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