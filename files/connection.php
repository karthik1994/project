<?php
require 'app_config1.php';
mysql_connect(host,user,pwd)
or die("error:".mysql_error());
mysql_select_db(db)
or die(mysql_error());
?>