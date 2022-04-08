<?php
session_start();


?>

<?php

$conn = mysqli_connect("localhost:3308","root","","app1") or die("connection error");

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$number= $_POST['number'];
$pwd = $_POST['pwd'];
mysqli_query($conn,"insert into student(name,email,number,password) values('$name','$email','$number','$pwd')");
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        Name : <input type="text" name="name" ><br><br>
        Email : <input type="email" name = "email"><br><br>
        Number : <input type="number" name= "number"><br><br>
       Create Password : <input type="password" name="pwd" placeholder="Create Password"><br><br>
        Repeat Passwod : <input type="password" name="rpwd" placeholder="repeat password"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>