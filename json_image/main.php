<html>
<head><title>sqlite</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<style>
body{
background-color:#c8c8f8;
}
#new{
margin-top:10px;
}
.form-control{
padding:10px;
font-size:15px;
width:300px;
}
.btn-success{
margin-right:10px;
}
.btn-warning{
margin-right:10px;
}
.btn-primary{
margin-right:10px;
}
#file{
height:40px;
}
#mymodal,#mymodal2,#mymodal3,#mymodal4,#mymodal5{
width:940px;
left:2px;
top:4px;
position:fixed;
padding-top:100px;
padding-left:600px;
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
.table{
float:left;
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
.sec{
padding:4px;
font-size:15px;
width:300px;
}
.logo img {
width: 100%;
height:100%;
}
#ttt{
padding:15px;
}
.fa{
padding:3px 10px 0px 5px;
}
#bbb{
align:right;
margin-left:1150px;
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 align="center" id="details">User Details</h2>
<button type="button" class="btn btn-primary" id="bbb" data-toggle="modal" id="new" data-target="#mymodal">New data entry</button>
</div>
<div class="col-md-1">
<nav>
<ul>
<li class="logo"><img src="../Saved Pictures/8.jpg"></li>
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
<table class="table table-hover" id="aaa">
<table class="table table-borderless" id="aaa">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<thead id="thead">
<th>NAME</th>
<th>EMAIL-ID</th>
<th>PASSWORD</th>
<th>PH.NO</th>
<th>IMAGE</th>
<th>UPLOAD</th>
<th>VIDEO</th>
<th>ACTION</th>
</thead>
<tbody id="display">
</tbody>
</table>
</div>

</div>
</div>
<div class="modal fade" id="mymodal" role="dialog">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form method="post">
<div>
<label>NAME :</label>
<input class="form-control" type="text" id="name" placeholder="enter name" >
</div>
<div>
<label>EMAIL :</label>
<input class="form-control" type="email" id="email" placeholder="enter email" >
</div>
<div>
<th><label>PASSWORD :</label>
<td><input type="password" class="form-control" id="pass" placeholder="enter password">
</div>
<div>
<label>phone number :</label>
<input class="form-control" type="number" id="pno" placeholder="enter phone number" ><br>
</div>
<button type="submit" class="btn btn-success" value="insert" onclick="insert()">INSERT</button>
</form>
</div>
</div>


<div class="modal fade" id="mymodal3" role="dialog">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form name="submit"  action="sample.php" method="post" enctype="multipart/form-data">
<label>Upload Image :</label>
<input type="hidden" class="form-control" id="hidden" name="pno"><br>
<input type="file" class="form-control sec" value="Choose file"  id="pic" name="pic"><br>
<button type="submit" class="btn btn-success btn-block" id="upd" >Upload</button>
</form>
</div>
</div>

<div class="modal fade" id="mymodal4" role="dialog">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form name="submit"  action="video.php" method="post" enctype="multipart/form-data">
<label>Upload Video :</label>
<input type="hidden" class="form-control" id="hidden2" name="pno">
<input type="file" class="form-control sec" value="Choose file"  id="video" name="video">
<label>Video Description :</label>
<textarea name="des" class="form-control" rows="3"></textarea><br>
<button type="submit" class="btn btn-success btn-block" id="vidupd" >Upload</button>
</form>
</div>
</div>

<div class="modal fade" id="mymodal5" role="dialog">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<iframe id="src"></iframe>
<h3><b>description :</b></h3>
<h4 id="pdes"></h4>
</div>
</div>

<div class="modal fade" id="mymodal2" role="dialog">
<div class="modal-content">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<form method="post">
<div>
<label>NAME :</label>
<input class="form-control" type="text" id="name2" value="">
</div>
<div>
<label>EMAIL :</label>
<input class="form-control" type="email" id="email2"  value"">
</div>
<div>
<th><label>PASSWORD :</label>
<td><input type="password" class="form-control" id="pass2" value="">
</div>
<div>
<label>phone number :</label>
<input class="form-control" type="number" id="pno2" value=""><br>
</div>
<button type="submit" class="btn btn-success" onclick="update(datas[1])">UPDATE</button>
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
tblRow += "<tr id='row'>"
tblRow += "</th><th id='name1'>"+data[i]['name']+"</th><th id='email1'>"+data[i]['email']+"</th><th id='pass1'>"+data[i]['pass']+"</th><th id='pno1'>"+i+"</th><th id='file1'><img src='"+data[i]['file']+"' class='img img-circle'></th>";
tblRow += "<th><button class='btn btn-success mr-2' id='img' data-toggle='modal' data-target='#mymodal3' onclick='sel(\""+i+"\")'>Image</button>";
tblRow += "<button class='btn btn-info mr-2' id='vidid' data-toggle='modal' data-target='#mymodal4' onclick='vid(\""+i+"\")'>Video</button></th>";
tblRow += "<th><button class='btn btn-primary mr-2' id='viddis' data-toggle='modal' data-target='#mymodal5' onclick='viddis(\""+i+"\")'>watch</button></th>";
tblRow += "<th><button class='btn btn-warning mr-2' id='edit' data-toggle='modal' data-target='#mymodal2' onclick='select(\""+i+"\")'>Edit</button>";
tblRow += "<button class='btn btn-danger ml-2' onclick='deletevalue(\""+i+"\")'>delete</button></th>";
tblRow += "</tr>";

}
}
tblRow +="</tbody></table>";
$("#display").html(tblRow);
})
}

function insert(){
name=$("#name").val();
email=$("#email").val();
pass=$("#pass").val();
pno=$("#pno").val();
$.post("back.php",{
mode:"insert",
name:name,
email:email,
pass:pass,
pno:pno
},function(data){
console.log(data);
getdata();
swal("Data inserted!","success", "success");
})
}


function select(pno)
{
$.post("back.php",{
mode:"add",
pno:pno
},function(data){
datas = JSON.parse(data);
for(i in datas){
document.getElementById("name2").value=datas[0]['name'];
document.getElementById("email2").value=datas[0]['email'];
document.getElementById("pass2").value=datas[0]['pass'];
document.getElementById("pno2").value=datas[1];
}
})
}

function sel(pno)
{
$.post("back.php",{
mode:"add",
pno:pno
},function(data){
datas = JSON.parse(data);
console.log(datas);
document.getElementById("hidden").value=datas[1];
})
}

function vid(pno)
{
$.post("back.php",{
mode:"add",
pno:pno
},function(data){
datas = JSON.parse(data);
console.log(datas);
document.getElementById("hidden2").value=datas[1];
})
}
function viddis(pno)
{
$.post("back.php",{
mode:"add",
pno:pno
},function(data){
datas = JSON.parse(data);
console.log(datas);
document.getElementById("pdes").innerHTML=datas[0]['des'];
document.getElementById("src").src=datas[0]['video'];
})
}


function deletevalue(pno)
{
$.post("back.php",{
mode:"delete",
pno:pno
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

function update(pno)
{
name=$("#name2").val();
email=$("#email2").val();
pass=$("#pass2").val();
$.post("back.php",{
mode:"update",
name:name,
email:email,
pass:pass,
pno:pno
},function(data){
if(data){
swal("Data updated successfully!", "success");
getdata();
}
else{
swal("Data not updated!","Error!","Error");
}
})
}



</script>

<script>
$(document).ready(function(){
$("#aaa").DataTable();
});
</script>
</body>
</html>