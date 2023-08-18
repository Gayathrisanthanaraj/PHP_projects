<html>
<head>
<title>regform</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
body{
background-image:linear-gradient(to bottom right,#f998e8,#ffb96c);
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4" style="margin-top:2%; padding:3px; font-size:25px;">
<h1 align="center"><b>Registration form</b></h1><br>
<div class="form-group">
<label>Enter name:</label>
<input type="text" class="form-control" id="name">
</div>
<div class="form-group">
<label>Enter email:</label>
<input type="email" class="form-control" id="email">
</div>
<div class="form-group">
<label>Enter contact:</label>
<input type="number" class="form-control" id="cont">
</div>
<div class="form-group">
<label>Enter age:</label>
<input type="number" class="form-control" id="age">
</div>
<br>
<button class="btn btn-primary btn-block" onclick="myFunction()" id="btn" >submit</button>
</div>
<div class="col-md-4">
</div>
</div>
</body>
<script>
function myFunction(){
var name=$("#name").val();
var email=$("#email").val();
var cont=$("#cont").val();
var age=$("#age").val();

$.post("push.php",{
name:name,
email:email,
cont:cont,
age:age
},function(data){
var aaa=JSON.parse(data);
swal("Welcome "+aaa.name , "Registration Successfully" , "success");
})
}
</script>
</html>