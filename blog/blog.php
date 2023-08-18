<html>
<head><title>sqlite</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/tinymce.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.6/jquery.tinymce.min.js"></script>
</head>
<style>
body{
background:url("../Saved Pictures/p16.jpg");
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
margin:3px;
font-size:15px;
}
#div1{
margin:0;
padding:0;
}
#data{
margin:0;
padding:0;
}
.container{
width:97%;
}
#display{
margin-left:100px;
}
#new{
margin-top:20px;
margin-left:10px;
align:right;
width:100px;
height:40px;
font-size:19px;
float:right;
}
.form-control{
padding:10px;
font-size:15px;
width:300px;
}

#file{
height:40px;
}
#mymodal,#mymodal2{
width:980px;
left:2px;
top:2px;
position:fixed;
padding-top:10px;
padding-left:600px;
}
.btn-info{
margin-bottom:10px;
margin-right:10px;
width:80px;
}
.btn-primary{
margin-bottom:10px;
margin-left:10px;
width:80px;
}
.modal-content {
margin: 15px auto;
padding: 15px;
border: 1px solid #888;
width: 100%;
}
.img{
height:50px;
width:50px;
}
nav ul {
margin: 0;
padding:3px;
height: 100%;
width:200px;
position: fixed;
top: 0;
left: 0;
background-color:#1f485a;
}
nav ul li {
list-style: none;
}
nav ul li a {
display: block;
text-decoration:none;
text-transform:capitalize;
font-size:15px;
color: #fff;
position: relative;
padding: 20px 20px 20px 20px;
}
nav ul li a:hover {
color: #2b2626;
background-color:#5b8ab9;
}

.logo {
width: 150px;
height: 150px;
border-radius: 50%;
overflow: hidden;
margin: 25px auto;
}
label{
margin-top:5px;
}
#img{
width:218px;
height:150px;
border-radius:10px;
}
.card-body{
height:120px;
text-transform:capitalize;
}
#card{
width:228px;
height:340px;
box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
background-color:white;
text-align:center;
padding:5px;
margin-left:30px;
margin-top:10px;
margin-right:20px;
border-radius:10px;
}
.sec{
padding:4px;
font-size:15px;
width:300px;
}
.logo img {
width: 100%;
height:100%;
}

.fa{
padding:3px 10px 0px 5px;
}

#videoframe{
width:250px;
height:150px;
border:2px;
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-1">
<nav>
<ul>
<li class="logo"><img src="../Saved Pictures/5.jpg"></li>
<li>
<a href="#"><i class="fa fa-home"></i>home</a>
</li>
<li>
<a href="#"><i class="fa fa-music"></i>Music</a>
</li>
<li>
<a href="#"><i class="fa fa-telegram"></i>telegram</a>
</li>
<li>
<a href="#"><i class="fa fa-camera"></i>camera</a>
</li>
<li>
<a href="#"><i class="fa fa-calculator"></i>calculator</a>
</li>
<li>
<a href="#"><i class="fa fa-picture-o"></i>Gallery</a>
</li>
<li>
<a href="#"><i class="fa fa-phone"></i>contact</a>
</li>
</ul>
</nav>
</div>
<div class="col-md-11" id="div1">
<div class="col-md-12" id="data">
<button type="button" class="btn btn-primary" data-toggle="modal" id="new" data-target="#mymodal">Add Data</button>
</div>
<div id="display"></div>
</div>
</div>
</div>
<div class="modal fade" id="mymodal" role="dialog">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form name="submit"  action="imageblog.php" method="post" enctype="multipart/form-data">
<label>Enter id :</label>
<input type="text" class="form-control"  name="id" value="">
<label>Upload Video :</label>
<input type="file" class="form-control sec" value="Choose file"  id="video" name="video">
<label>Video Title :</label>
<input type="text" name="title" class="form-control" id="title">
<label>Video Description :</label>
<textarea name="des" class="form-control" rows="3"></textarea><br>
<button type="submit" class="btn btn-success btn-block" id="vidupd" >Upload</button>
</form>
</div>
</div>

<div class="modal fade" id="mymodal2" role="dialog">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form name="submit"  action="update.php" method="post" enctype="multipart/form-data">
<input type="hidden" class="form-control" id="idid" name="id">
<label>Upload Video :</label>
<input type="file" class="form-control sec" value="Choose file"  id="vidsel" name="video">
<label>Video Title :</label>
<input type="text" name="title" class="form-control" id="titlesel" value="">
<label>Video Description :</label>
<textarea name="des" class="form-control" id="dessel" rows="3"></textarea><br>
<button type="submit" class="btn btn-success btn-block" id="imgupdate">Upload</button>
</form>
</div>
</div>


<script>
getdata();

function getdata()
{
$.post("back.php",{
mode:"getdata"
},function(data){
data = JSON.parse(data);
tblRow="";
if(data)
{
for(i in data)
{
tblRow +="<div class='card card-widget col-sm-2 m-2' id='card'><div class='card-header'><img id='img' src="+data[i]['video']+"></div><div class='card-body'><h3><b>"+data[i]['title']+"</b></h3><p>"+data[i]['des']+"</p></div>";
tblRow += "<div class='card-footer'><button class='btn btn-info  mr-2' id='edit' data-toggle='modal' data-target='#mymodal2' onclick='select(\""+i+"\")'>Edit <i class='fa fa-edit'></i></button>";
tblRow += "<button class='btn btn-primary  mr-2' onclick='deletevalue(\""+i+"\")'>Delete <i class='fa fa-trash-o'></i></button></div></div>";
}
}
$("#display").html(tblRow);
})
}

function select(id)
{
$.post("back.php",{
mode:"add",
id:id
},function(data){
datas = JSON.parse(data);
console.log(datas);
for(i in datas){
document.getElementById("dessel").value=datas[0]['des'];
document.getElementById("idid").value=datas[1];
document.getElementById("titlesel").value=datas[0]['title'];
}
})
}

function deletevalue(id)
{
$.post("back.php",{
mode:"delete",
id:id
},function(data){
if(data="success"){
swal("data deleted successfully!","Success", "success");
getdata();
}
else{
swal("data not deleted!","Error", "Error");
}
})
}

</script>
<script>
  tinymce.init({
    selector: 'textarea',
    height: 100,
   width:300
});
</script>
</body>
</html>