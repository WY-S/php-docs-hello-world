<?php
$con = mysqli_init();
if (!$con) {
  die("mysqli_init failed");
}
echo "hello1";
echo "\n";
$cmd = "ls";
$ret1 = system($cmd);
echo "\n";
var_dump($ret1);
echo "\n";

mysqli_ssl_set($con,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
echo "======";
mysqli_real_connect($con,"wenyimysql8.mysql.database.azure.com","azureuser","SUNwenyi1234","school",3306,MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($con)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo "hello2";
?> 
