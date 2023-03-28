<?php
ini_set ('error_reporting', E_ALL);
ini_set ('display_errors', '1');
error_reporting (E_ALL|E_STRICT);

$db = mysqli_init();
mysqli_options ($db, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

$db->ssl_set(NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
$link = mysqli_real_connect ($db, 'wenyimysql.mysql.database.azure.com', 'azureuser', 'SUNwenyi1234', 'school', 3306, NULL, MYSQLI_CLIENT_SSL);
if (!$link)
{
    die ('Connect error (' . mysqli_connect_errno() . '): ' . mysqli_connect_error() . "\n");
}
echo "hello";
$db->close();
?>
