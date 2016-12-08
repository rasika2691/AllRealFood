<?php
/* Database config */

$db_host = "sql9.freemysqlhosting.net"; //Host address (most likely localhost)
$db_database = "sql9145020"; //Name of Database
$db_user = "sql9145020"; //Name of database user
$db_pass = "iGdr79ghRu"; //Password for database user
/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>