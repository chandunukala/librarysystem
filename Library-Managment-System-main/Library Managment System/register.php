<?php
mysql_connect('localhost:8080', 'root', '') or die('Could not connect the database : Username or password incorrect');
mysql_select_db('demo1') or die ('No database found');
echo 'Database Connected successfully';
?>
