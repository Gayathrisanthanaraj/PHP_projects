<?php
$mode = $_POST['mode'];
if($mode=="insert"){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pno = $_POST['pno'];
$details=array();
$details["name"]=$name;
$details["email"]=$email;
$details["pass"]=$pass;
$inp=file_get_contents("new.json");
$datas=json_decode($inp,true);
$datas[$pno]=$details;
$json=json_encode($datas,JSON_PRETTY_PRINT);
$final=file_put_contents("new.json",$json);
echo "success";
}

else if($mode=="getdata"){
$data=file_get_contents("new.json");
$datas=json_decode($data,true);
echo $data;
}

else if($mode=="delete"){
$pno = $_POST['pno'];
$data=file_get_contents("new.json");
$datas=json_decode($data,true);
unset($datas[$pno]);
$datas=json_encode($datas);
file_put_contents("new.json",$datas);
echo "success";
}

else if($mode=="update"){
$data=file_get_contents("new.json");
$datas=json_decode($data,true);
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pno = $_POST['pno'];
foreach($datas as $key => $value)
{
if($key == $pno)
{
$datas[$key]['name']=$name; 
$datas[$key]['email']=$email;
$datas[$key]['pass']=$pass;  
}
} 
file_put_contents("new.json",json_encode($datas));
if(file_put_contents("new.json",json_encode($datas)))
{
echo "success";
}
}

else if($mode=="add")
{
$pno = $_POST['pno'];
$data=file_get_contents("new.json");
$datas=json_decode($data,true);
$enc =$datas[$pno];
$arr=array($enc);
array_push($arr,$pno);
echo json_encode($arr);
}


?>

