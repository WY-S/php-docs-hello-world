<?php
ini_set ('error_reporting', E_ALL);
ini_set ('display_errors', '1');
error_reporting (E_ALL|E_STRICT);

$db = mysqli_init();
mysqli_options ($db, MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);

$db->ssl_set(NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
$link = mysqli_real_connect ($db, 'wenyimysql8.mysql.database.azure.com', 'azureuser', 'SUNwenyi1234', 'school', 3306, NULL, MYSQLI_CLIENT_SSL);
if (!$link)
{
    die ('Connect error (' . mysqli_connect_errno() . '): ' . mysqli_connect_error() . "\n");
}
echo "hello";

// Run the create table query
if (mysqli_query($db, '
CREATE TABLE Products1 (
`Id` INT NOT NULL AUTO_INCREMENT ,
`ProductName` VARCHAR(200) NOT NULL ,
`Color` VARCHAR(50) NOT NULL ,
`Price` DOUBLE NOT NULL ,
PRIMARY KEY (`Id`)
);
')) {
printf("Table created\n");
}

$db->close();
?>
