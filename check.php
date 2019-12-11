<?php

//print_r(PDO::getAvailableDrivers());

    //$db_connection = pg_connect("host=217.182.51.243 dbname=antondb user=anton password=admin");
    //$result = pg_query($db_connection, "SELECT * FROM public.stocks");
try {


	$myPDO = new PDO('pgsql:host=217.182.51.243;dbname=antondb', 'anton', 'admin');
	$sql = 'SELECT * FROM public.stocks';
 
	foreach($myPDO->query($sql) as $row) {
		print "<br/>";
		print $row['id']. '-' . $row['symbol']. '<br/>';

	}
echo 'Connected with PDO postgresQL';
} catch (PDOException $e) {
	echo $e->getMessage();
}


