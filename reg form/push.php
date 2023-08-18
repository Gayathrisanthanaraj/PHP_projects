<?php
$name = $_POST['name'];
$email = $_POST['email'];
$cont = $_POST['cont'];
$age = $_POST['age'];
$details=array();
$details["name"]=$name;
$details["email"]=$email;
$details["cont"]=$cont;
$details["age"]=$age;
$data=file_put_contents("store.json",json_encode($details),FILE_APPEND);
echo json_encode($details);
?>