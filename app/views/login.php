<html>
<head>
	<title></title>
	<link rel="stylesheet/less" type="text/css" href="<?php echo base_path(). '/externals/bootstrap/less/bootstrap.less'; ?>}}">
</head>
<body>




<?php 
echo Form::open();
echo Form::label("username", "username");
echo Form::text("username");
echo Form::label("password", "password");
echo Form::password("password");
echo Form::submit("Log In");
echo Form::close();
 ?>

 </body>
</html>