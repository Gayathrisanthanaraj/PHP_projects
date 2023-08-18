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
$details=array();
$details["title"]=$title;
$details["des"]=$des;
$details["video"]=$path;
$datas[$id]=$details;
$json=json_encode($datas);
$aaa=file_put_contents("new.json",$json);
if($aaa) {
echo '<script type="text/javascript">';
echo 'setTimeout(function(){swal("data uploaded successfully","success","success").then(function(){;';
echo 'window.location="blog.php";';
echo '});';
echo '});';
echo '</script>';
} else {
echo 'Something went wrong uploading file';
}
} 

?>


