<!DOCTYPE html>
<html>
<head>
<title>Sidebar</title>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
body {
margin: 0;
padding: 0;
background-image:url('../Saved Pictures/8.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
nav ul {
margin: 0;
padding: 0;
height: 100%;
width: 200px;
position: fixed;
top: 0;
left: 0;
background-color:#eb8fae;
}
nav ul li {
list-style: none;
}
nav ul li a {
display: block;
text-decoration:none;
text-transform:capitalize;
font-size:20px;
color:black;
position: relative;
padding: 25px 25px 25px 38px;
}
nav ul li a:hover {
color: #2b2626;
background-color:pink;
}
.wrapper {
margin-left: 260px;
}
.section {
display: grid;
place-items: center;
min-height:50vh;
text-align: center;
font-size: 20px;
}
.section h2 {
text-transform: uppercase;
font-size: 50px;
}
.logo {
width: 150px;
height: 150px;
border-radius: 50%;
overflow: hidden;
margin: 25px auto;
}
.logo img {
width: 100%;
height:100%;
}
.fa{
padding:3px 10px 0px 5px;
}  
.card {
box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
width: 430px;
height:90%;
padding:1px;
border-radius:30px;
font-size:22px;
background-image:url('9.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-size:100% 100%;
}
.container{
padding:1px;
}
span{
line-height:7px;
}
table{
text-align:left;
padding:15px;
border-spacing:15px;
}
</style>
<body>
<nav>
<ul>
<li class="logo"><img src="../Saved Pictures/2.jpg"></li>
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
<div class="wrapper">
<div class="section">
<h2 id="btn" style="color: #2b2626">Homepage</h2>
<div class="card">
<div class="container">
<h3>user details</h3>
<p>
<table>
<tr>
<th><label>Name</th><th>:</th></label><td><span id="demo"></span></td>
</tr>
<tr>
<th><label>Age</th><th>:</th></label><td><span id="demo2"></span></td>
</tr>
<tr>
<th><label>Contact</th><th>:</th></label><td><span id="demo3"></span></td>
</tr>
<tr>
<th><label>Email</th><th>:</th></label><td><span id="demo4"></span></td>
</tr>
<tr>
<th><label>Password</th><th>:</th></label><td><span id="demo5"></span></td>
</tr>
</table>
</p>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
$.getJSON("stored.json",function(data){
document.getElementById("demo").innerHTML =data.name;
document.getElementById("demo2").innerHTML = data.age;
document.getElementById("demo3").innerHTML = data.cont;
document.getElementById("demo4").innerHTML = data.email;
document.getElementById("demo5").innerHTML = data.pass;
});
});
</script>

</body>
</html>
