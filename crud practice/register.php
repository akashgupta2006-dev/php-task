<!DOCTYPE html>
<?php include_once __DIR__ ."/functions.php"; ?>
<html>
<head>
<style>
</style>
</head>
<body>
<form action="<?php url("RegisterHandler.php") ?>" method="post">
Name :<br/>
<input type="text" name="name"/><br/>
Email :<br/>
<input type="email" name="email"/><br/><br/>
<input type="submit" value="SAVE"/>
</form>
</body>
</html>