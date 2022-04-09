<!DOCTYPE html>
<?php include_once __DIR__."/functions.php"; ?>
<html>
<head>
<style>
</style>
</head>
<body>
<form action="<?php echo url("registerHandler.php"); ?>" method="post">
NAME :<br/>
<input type="text" name="name" placeholder="Enter the name"/><br/><br/>
EMAIL :<br/>
<input type="text" name="email" placeholder="Enter the email"/><br/><br/>
<input type="submit" value="register" name="save"/>
</form>
</body>
</html>