<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Installer STEP 2/2</title>
<link rel="icon" href="install/favicon.ico" />
<link href="install/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="install/js/jquery.js"></script>
<script src="install/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<br/>

<div class="container">
<h1>Installer STEP 2/2</h1>
<h3>Created database</h3>
<div class="alert <?php if($success) echo('alert-success'); else echo('alert-error'); ?>"><p>
<?php 
if($success)
echo('Database successfull installed! You can go to the next step!');

else
echo('Unknow error! Please install by hand the database! The sql file is in <em>./includes/mysql.database.sql</em>.');
?>
</p></div>
<?php
if($success)
echo('<p class="text-right"><a class="btn btn-primary" href="install.php?clear=true">Clean the install file and go to the home page<i class="icon-arrow-right"></i></a></p>');
?>

<br/>
<div class="container">
<div class="text-center">
<small class="muted">Powered by <a href="https://code.google.com/p/simple-file-sharing/">simple-file-sharing</a> created by <a href="http://www.marcomg.tk/">marcomg</a></small>
</div>
</div>
</body>
</html>
