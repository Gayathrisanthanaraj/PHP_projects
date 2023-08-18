<?php
$emailid = "rajsandhana362@gmail.com";
$password = "gayuma";
$datas=json_decode(file_get_contents("stored.json"),true);

if($datas['pass']==$password && $datas['email']==$emailid)
{
echo "login successfully";
}
else{
echo "login not successfully";
}
?>