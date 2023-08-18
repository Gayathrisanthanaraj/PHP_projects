<?php
$mode = $_POST['mode'];

if($mode=="getdata"){
$data=file_get_contents("new.json");
$datas=json_decode($data,true);
echo $data;
}

else if($mode=="delete"){
$id = $_POST['id'];
$data=file_get_contents("new.json");
$datas=json_decode($data,true);
unset($datas[$id]);
$datas=json_encode($datas);
file_put_contents("new.json",$datas);
echo "success";
}

else if($mode=="add")
{
$id = $_POST['id'];
$data=file_get_contents("new.json");
$datas=json_decode($data,true);
$enc =$datas[$id];
$arr=array($enc);
array_push($arr,$id);
echo json_encode($arr);
}


else{
echo "mode is not defined";
}
?>

