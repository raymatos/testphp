<?php
$link = mysql_connect($_ENV["DB_HOST"], 'nextpost_user', 'E3LX3ZUqNgYXAPFC');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
printf("MySQL server version: %s\n", mysql_get_server_info());
?>
