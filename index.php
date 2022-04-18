<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bebas+Neue|Roboto+Serif" rel="stylesheet">
    <title>Dr Brownies </title>
	<style>

/* Afiq Ridhwan (2014161)*/		
* {
box-sizing: border-box;
}

ul {
list-style-type: none;
margin: 0;
padding-top: 2%;
padding-right: 4%;
padding-bottom: 2%;
overflow: hidden;
}

li {
font-family:Bebas Neue;
float: right;
color:white
}

li a {
display: block;
color: white;
text-align: center;
padding: 8px 14px;
text-decoration: none;
}

li a:hover {
color:#444444;
opacity:50%;
transition:0.2s ease-in;
}

.material-icons {
font-size:50px;
color:white
display: inline-block;
margin-top: 15px
}

body {
background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('images/bg.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
margin:0;
}

.navbar{
position:absolute;
width:100%;
z-index:1;
}

.logo{
display: inline-block;
margin-left: 375px;
}

.call{
display: inline;
float :left
}

.phoneno{
font-size:120%;
}

.time{
font-size:80%;
color:#b6afac
}

.home{
text-align:center;
margin-top: 100px;
color:white}

.shop-button {
background-color: transparent;
border: 2px solid white;
color: white;
padding: 10px 20px;
text-align: center;
display: inline-block;
font-size: 25px;
margin: 10px 30px;
cursor: pointer;
font-family: Bebas Neue;
width:20%;
margin-left: 523px;
margin-top: 50px;
margin-bottom: 100px;
}

.shop-button:hover {
background-color: #8b0000;
color: white;
border: 2px solid #8b0000;

</style>
</head>

<body>
/* Afiq Ridhwan (2014161)*/
	
<ul>
<div class ="call">
<li class = "phoneno" ><br>+6012-345-6789<br><span class = "time"> &nbsp 10:00am-10:00pm</span></li>
<li><a href="http://www.wasap.my/60123456789/"><i class="material-icons">phone_android</i></a></li>
</div>
<div class ="logo">
<li><img src="images/logo.png" width="135" height="auto"></li>
</div>
<li><a href="#cart"><i class="material-icons">shopping_cart</i></a></li>
</ul>

<div class="home">
<span style= "font-size:300%;font-family:Roboto Serif;" >Your </span><br>
<span style= "font-family:Bebas Neue;font-size:800%;color:#ffffff" >Brownie's</span><br>
<span style= "font-size:300%;font-family:Roboto Serif;" >Expert</span><br>
</div>

<button class="shop-button" onclick="window.location.href = '#menu';"> SHOP NOW </button>

</body>
</html>
