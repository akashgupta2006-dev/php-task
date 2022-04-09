<html>
<head>
<style>
#outer
{
	height:500px;
	width:1340px;
	background:silver;
	border:1px solid red;
}
#inner
{
	height:300px;
	width:400px;
	background:orange;
	margin:100px 400px;
	color:white;
	font-size:30px;
	padding:20px;
	box-sizing:border-box;
	border-radius:10px;
}
input
{
	height:40px;
	width:200px;
	border-radius:10px;
	color:silver;
	font-size:20px;
}
</style>
</head>
<body>
<div id="outer">
<div id="inner">
<form action="LoginController.php" method="POST">
    Email : <br/><input type="email" name="email"><br/><br/>
    Password : <br/><input type="password" name="password"><br/><br/>
    <input type="submit" value="Login" style="background:navy; width:100px;">
</form>
</div>
</div>
</body>
</html>