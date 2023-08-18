<html>
<head>
<title>regform</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
.form-control{
padding:10px;
font-size:20px;
}
label{
font-size:25px;
margin-top:40px;
}
*{
font-family:sans-sarif;
font-weight:bold;
font-style:italic;
}
input[type=email],
input[type=password]{
border:3px solid black;
background-color:#f4d8dd;
}
body{
background:url('../Saved Pictures/8.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
.log{
margin-top:15px; 
padding:2px;
font-size:40px;
}
#btn{
font-size:25px;
padding:0px;
margin-top:50px;
color:black;
}
h1{
text-align:center;
font-family:sans-sarif;
padding:50px;
font-weight:bold;
font-style:italic;
margin-top:20px;
}
</style>
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4 log">
<h1>login form</h1>
<div>
<label>Enter email:</label>
<input type="email" class="form-control" id="emailid">
</div>
<div>
<label>Enter password:</label>
<input type="password" class="form-control" id="password">
</div>
<br>
<button class="btn btn-primary btn-block" onclick="myFunction()" id="btn">submit</button>
</div>
<div class="col-md-4">
</div>
</div>
</body>
<script>
function myFunction(){
var emailid=$("#emailid").val();
var password=$("#password").val();
$.post("store2.php",{
emailid:emailid,
password:password,
mode:"login"
},function(data){
if(data=="login successfully"){
swal("Login Success!", "success" , "success").then(function(){
window.location="success.php";
});
}
else{
swal("oobs!","invalid email & password!", "error").then(function(){
window.location="signin.php";
});
}
})
}
</script>
</html>