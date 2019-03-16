<html>
<body>

<?php
 //Establishing connection with the database
 define('DB_SERVER', 'localhost:3306');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', 'root123');
 define('DB_DATABASE', 'profile'); //where customers is the database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
//RegSuccess.php
<!DOCTYPE HTML>
<html>
<title>Success.php</title>
<body>
<div style="text-align:left"><h1>Registration Successful </h1></div>
<br/>
<div style="text-align: left"><a href="https://krazytech.com/programs/php-login-page-using-mysql">Please log-in to continue</a></div>
</body>
</html>
1