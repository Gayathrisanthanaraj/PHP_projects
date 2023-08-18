<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php
$id =$_POST['id'];
$des =$_POST['des'];
$title =$_POST['title'];
$video = $_FILES["video"]["name"];
$folder = "video/";
$path = $folder.$video; 
$aaa=move_uploaded_file($_FILES["video"]["tmp_name"] , $path);
if( $aaa ) {
$inp=file_get_contents("new.json");
$datas=json_decode($inp,true);
foreach($datas as $key => $video)
{
if($key == $id)
{
$datas[$key]['title']=$title; 
$datas[$key]['video']=$path; 
$datas[$key]['des']=$des; 
}
$aaa=file_put_contents("new.json",json_encode($datas));
}
if($aaa) {
echo '<script type="text/javascript">';
echo 'setTimeout(function(){swal("data updated successfully","success","success").then(function(){;';
echo 'window.location="blog.php";';
echo '});';
echo '});';
echo '</script>';
} else {
echo 'Something went wrong uploading file';
}
} 

?>


