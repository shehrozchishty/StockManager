<?php 	

require_once 'core.php';

header('Content-Type: application/json');

$sqlQuery = "SELECT product_id, product_name,SUM(quantity) as 'Quantity' FROM `product` where active=1 AND status=1 GROUP BY product_name;";

$result = mysqli_query($connect,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($connect);

echo json_encode($data);

?>