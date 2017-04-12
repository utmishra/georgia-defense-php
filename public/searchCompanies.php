<?php
header('Access-Control-Allow-Origin: *');  
header('Content-Type:application/json');

require __DIR__ . '/../vendor/autoload.php';

use GeorgiaPHP\Models\Fetch;


$query = strtolower($_GET['query']);
$fetch = new GeorgiaPHP\Models\Fetch();
$searchResponse = $fetch->searchByCompanyName($query);
$finalResult = array();
foreach ($searchResponse as $key => $value) {
	$finalResult[$key]['duns'] = $value['duns'];
	$finalResult[$key]['companyname'] = $value['companyname'];
}
echo json_encode($finalResult);
?>