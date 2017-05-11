<?php

	try 
	{
	$mdb = new MongoDB\Driver\Manager("mongodb://ITguest:12345@ds139470.mlab.com:39470/ironworks");


	$command = new MongoDB\Driver\Command(['ping' => 1]);
	$mdb->executeCommand ('db', $command);

	$servers = $mdb->getServers();
	//print_r($servers);   
	$filter = array();
	$query = new MongoDB\Driver\Query($filter);
	$results = $mdb->executeQuery("ironworks.employees", $query);
	echo "Generating List of Employees: \r\n";
	print_r($results);

	foreach ($results as $doc) {



	var_dump($doc);
	echo "\r\n";
	
}
}
catch(exception $e)
 {
	print_r($e);
}

?>
