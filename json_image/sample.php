<head>
  <script src="jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<?php
$pno =$_POST['pno'];
$pic = $_FILES["pic"]["name"];
$folder = "upload/";
$path = $folder.$pic; 
$aaa=move_uploaded_file($_FILES["pic"]["tmp_name"] , $path);
if( $aaa ) {
$inp=file_get_contents("new.json");
$datas=json_decode($inp,true);
$datas[$pno]['file']=$path;
$json=json_encode($datas);
$aaa=file_put_contents("new.json",$json);
if($aaa) {
echo '<script type="text/javascript">';
echo 'setTimeout(function(){swal("image uploaded successfully","success","success").then(function(){;';
echo 'window.location="main.php";';
echo '});';
echo '});';
echo '</script>';
} else {
echo 'Something went wrong uploading file';
}
} 

?>


