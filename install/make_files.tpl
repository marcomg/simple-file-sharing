<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Installer STEP 2/4</title>
<link rel="icon" href="install/favicon.ico" />
<link href="install/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="install/js/jquery.js"></script>
<script src="install/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<br/>

<div class="container">
<h1>Installer STEP 2/4</h1>
<h3>File install</h3>

<?php
if($c_htaccess){
    echo('<div class="alert alert-success"><p>Files successful created, you can continue installing!</p></div>');
}

else{
    echo('<div class="alert alert-error"><p>:-O you haven\'t read yet the install instructions, please read them and reload this page.</p></div>');
}
?>

<p class="text-right"><a class="btn btn-primary" href="install.php">Continue the wizard installing the database <i class="icon-arrow-right"></i></a></p>
</div>


<br/>
<div class="container">
<div class="text-center">
<small class="muted">Powered by <a href="https://code.google.com/p/simple-file-sharing/">simple-file-sharing</a> created by <a href="http://www.marcomg.tk/">marcomg</a></small>
</div>
</div>
</body>
</html>
