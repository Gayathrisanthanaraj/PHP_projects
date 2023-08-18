<html>
<head>
<title>regform</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<style>
*{
font-family:sans-sarif;
font-weight:bold;
font-style:italic;
}
.container{
width:100%;
}
input[type=text],
input[type=age],
input[type=email],
input[type=password],
input[type=dob],
input[type=address],
input[type=tel]{
border:3px solid black;
background-color:#f4d8dd;
}
input[type=file]{
font-size:15px;
border:1px solid black;
background-color:#f4d8dd;
padding:10px;
font-size:20px;
height:28px;
}
body{
background:url('../Saved Pictures/8.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
.form-control aaa{
padding:10px;
font-size:20px;
height:28px;
}
#btn{
font-size:25px;
padding:0px;
margin-top:50px;
color:black;
}
label{
font-size:25px;
}
.reg{
margin-top:10px; 
padding:1px;
font-size:40px;
}
h1{
text-align:center;
font-family:sans-sarif;
padding:20px;
font-weight:bold;
font-style:italic;
}
</style>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>registration form</h1>
</div>
<div class="col-md-3">
</div>
<div class="col-md-3 reg">
<div class="form-group aaa">
<label>Enter name:</label><br>
<input type="text" class="form-control" id="name" >
</div>
<div class="form-group aaa">
<label>Enter email:</label><br>
<input type="email" class="form-control" id="email">
</div>
<div class="form-group aaa">
<label>Enter password:</label><br>
<input type="password" class="form-control" id="pass">
</div>
<div class="form-group aaa">
<label>Enter contact:</label><br>
<input type="tel" class="form-control" id="cont">
</div>
</div>
<div class="col-md-3 reg">
<div class="form-group aaa">
<label>Enter age:</label><br>
<input type="age" class="form-control" id="age">
</div>
<div class="form-group aaa">
<label>Enter date of birth:</label><br>
<input type="dob" class="form-control" id="dob">
</div>
<div class="form-group aaa">
<label>Enter address:</label><br>
<input type="address" class="form-control" id="address">
</div>
<div class="form-group aaa">
<label>Enter city:</label><br>
<input type="text" class="form-control" id="city">
</div>
</div>
</div>
<div class="col-md-3">
</div>
<div class="col-md-6">
<div class="form-group aaa">
<label>Add Image:</label><br>
<input type="file" class="form-control" name="image" id="cont">
</div>
<div class="form-group aaa">
<button class="btn btn-primary btn-block" onclick="myFunction()" id="btn">Register</button>
</div>
</div>
<div class="col-md-3">
</div>
</div>
</body>
<script>
function myFunction(){
name=$("#name").val();
email=$("#email").val();
pass=$("#pass").val();
cont=$("#cont").val();
age=$("#age").val();
$.post("store2.php",{
mode:"reg",
name:name,
email:email,
pass:pass,
cont:cont,
age:age
},function(data){
if(data=="registration successfully")
{
swal("registration Success!", "success","success").then(function(){
window.location="loginblog.php";
});
}
else{
swal("oobs!", "error");
}
})
}
</script>
</html>