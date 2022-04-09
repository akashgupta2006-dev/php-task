<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<style>
#outer
{
	height:550px;
	width:1350px;
	background:url(images/nature3.jpg);
	border: 1px solid black;
	background-size: 100% 100%;
}
#inner
{
	height:550px;
	width:1350px;
	background:rgba(0, 0, 0, 0.8);
	border: 1px solid white;
	font-family: arial;
}
#left
{
	height:350px;
	width:420px;
	margin-left: 200px;
	float: left;
	padding: 20px;
	box-sizing: border-box;
	color: white;

}
#left a
{
	text-decoration: none;

}
#right
{
	height:350px;
	width:440px;
	background: white;
	margin: 0px 20px;
	float: left;
	padding: 15px 30px;
	box-sizing: border-box;
}
input
{
height: 35px;
width: 350px;
border: none;
border-bottom: 2px solid black;

}
button
{
	height: 40px;
	width: 90px;
	background: orange;
	font-size:25px;
	color: white;
	border-radius: 25px;
}
</style>
</head>
<body>
 <?php include __DIR__.'/menu.php'; ?>
<div id="outer">
	<div id="inner">
		<h1 style="margin-left: 500px; color: orange;">Contact Us</h1>
		<p style="margin-left: 450px; color:white;">Have Any Qustions? We'd love to heart from you..</p>
		<div id="left">
			<b style="color: orange;">Address</b>
			<p>section 5 Karaki, <br/>kasaya kala, sonbhadra,<br/>231216</p><br/><br/>
			<b style="color: orange;">Phone</b><br/>
			<a href="tel:+91 9628652640"> 91 9628652640</a> , 
			<a href="tel:+91 7705991250"> 91 7705991250</a><br/><br/>
			<b style="color: orange;">Email</b><br/>
			<a href="mailto:akku20062000@gmail.com"> akku20062000@gmail.com</a> , 
			<a href="mailto:akash9648293044@gmai.com"> akash9648293044@gmai.com</a><br/><br/>
		</div>
		<div id="right">
			<h2 style="">Send Messege</h2>
<input type="text" placeholder="Full Name"/><br/><br/>
<input type="email" placeholder="Email"/><br/><br/>
<input type="text" placeholder="Type Your Messege.."/><br/><br/>
<button>send</button>
		</div>
</div>
</div>
</body>
</html>
