<?php
	// $tbl = $_POST['model'];
	$con=mysqli_connect("localhost","root","","mltr");
	$chartData = [];
	$i = 0;
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	// Perform queries 
	$result = mysqli_query($con,"SELECT `date`, `open`, `close`, `high`, `low`, `volume` FROM msft");

	while ($row = $result->fetch_assoc())
	{
		$item = array();
		$item['open'] = floatval($row['open']);
		$item['close'] = floatval($row['close']);
		$item['high'] = floatval($row['high']);
		$item['low'] = floatval($row['low']);
		// $item['adj_close'] = floatval($row['adj_close']);
		$item['volume'] = floatval($row['volume']);
		$item['date'] = $row['date'];
	    array_push($chartData, $item);
	}
	// var_dump($chartData);
	echo json_encode($chartData);
?>