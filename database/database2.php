<?php
$mode = $_POST['mode'];
if($mode=="insert"){
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$db = new SQLite3('students.db');
//$db->exec("CREATE TABLE friend(id INTEGER PRIMARY KEY,name VARCHAR(50),email VARCHAR(50),pass TEXT)");
$insert=$db->exec("INSERT INTO friend(name,email,pass) VALUES ('$name','$email','$pass')");
$db->close();
if($insert){
echo "success";
}
}
else if($mode=="add")
{
$id = $_POST['id'];
$db = new SQLite3('students.db');
if (!$db) 
die ("Unable to open DB.");
$select="SELECT * FROM friend WHERE id='".$id."'";
$results = $db->query($select);
$data=array();
while($row=$results->fetchArray(SQLITE3_ASSOC)){
array_push($data,$row);
}
echo json_encode($data);
}


else if($mode=="delete")
{
$id = $_POST['id'];
$db = new SQLite3('students.db');
if (!$db) 
die ("Unable to open DB.");
$delete="DELETE FROM friend WHERE id='".$id."'";
$results = $db->query($delete);
$db->close();
if(!$results){
echo "not deleted";
}
else
{
echo "success";
}


}
else if($mode=="getdata")
{ 
$db = new SQLite3('students.db');
if (!$db) 
die ("Unable to open DB.");
$results = $db->query('SELECT * FROM friend');
$data=array();
while($row=$results->fetchArray(SQLITE3_ASSOC)){
array_push($data,$row);
}
echo json_encode($data);
}

else if($mode=="update")
{ 
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass']; 
$id = $_POST['id'];
$db = new SQLite3('students.db');
if (!$db) 
die ("Unable to open DB.");
$update="UPDATE friend set name='".$name."', email='".$email."', pass='".$pass."' WHERE id='".$id."' ";
$results = $db->query($update);
$db->close();
if(!$results){
echo "notupdated";
}else
{
echo "success";
}
}
else{
echo "invalid mode";
}

?>