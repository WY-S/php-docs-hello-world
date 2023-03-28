<?php
$con = mysqli_init();
if (!$con) {
  die("mysqli_init failed");
}
echo "hello";
mysqli_ssl_set($conn,NULL,NULL, "/home/site/wwwroot/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con,"wenyimysql.mysql.database.azure.com","azureuser","SUNwenyi1234","school",3306,MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo "hello";
?> 