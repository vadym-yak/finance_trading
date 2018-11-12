<?php
	set_time_limit(10000);

	$con = mysqli_connect('127.0.0.1','root','', 'mltr');
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }


	$fp = fopen("DataSet.csv", "r");
	$i = 0;
	while( !feof($fp) ) {
	  if( !$line = fgetcsv($fp, 1000, ';', '"')) {
	     continue;
	  }

	  $token = explode(',', $line[0]);

	  	$date = str_replace('/', '-', $token[0]);
	  	$date = date('Y-m-d', strtotime($date));
	    $importSQL = "INSERT INTO msft(`date`, `open`, `high`, `low`, `close`, `volume`, `adj_close`) VALUES('".$date."','".$token[2]."','".$token[3]."','".$token[4]."','".$token[1]."','".$token[6]."','".$token[5]."')";

	    if ( $i != 0 ) {
	    	echo $line[0]; 
	    	echo $importSQL;
	    	mysqli_query($con, $importSQL) or die(mysqli_error($con));  
	    }
	    $i++;

	}

	fclose($fp);
	mysql_close($con);
?>