<?php
if(isset($_POST['mode']))
{
$mode=$_POST['mode'];
if($mode=="reg")
{
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$cont = $_POST['cont'];
$age = $_POST['age'];
$details=array();
$details["name"]=$name;
$details["email"]=$email;
$details["pass"]=$pass;
$details["cont"]=$cont;
$details["age"]=$age;
$data=file_put_contents("stored.json",json_encode($details));
echo "registration successfully";
}
else if($mode=="login")
{
$emailid = $_POST['emailid'];
$password = $_POST['password'];
$datas=json_decode(file_get_contents("stored.json"),true);

if($datas['pass']==$password && $datas['email']==$emailid)
{
echo "login successfully";
}
else{
echo "login not successfully";
}
}

}
?>