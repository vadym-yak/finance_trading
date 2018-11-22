<?php
	// $tbl = $_POST['model'];
	include_once('db.php');
	$chartData = [];
	$i = 0;
	// Perform queries 
	$result = mysqli_query($con,"SELECT `price`, `schange`, `percent`, `updatetime`, `sopen`, `previousclose`, `high`, `low`, `volume` FROM stocksdata");

	while ($row = $result->fetch_assoc())
	{
		$item = array();
		$item['open'] = floatval($row['sopen']);
		$item['close'] = floatval($row['previousclose']);
		$item['high'] = floatval($row['high']);
		$item['low'] = floatval($row['low']);
		// $item['adj_close'] = floatval($row['adj_close']);
		$item['volume'] = floatval(str_replace(",",'', $row['volume']));
		$item['date'] =  date("Y-m-d\TH:i:s.000\Z", strtotime($row['updatetime']));
	    array_push($chartData, $item);
	}
	// var_dump($chartData);
	echo json_encode($chartData);
?>