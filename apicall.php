<?php

require_once (__DIR__.'/SwaggerClient-php/vendor/autoload.php') ;

$start_time = microtime(true) ;
$CancerTypesApiInstance = new Swagger\Client\Api\CancerTypesApi();
$GenesApiInstance = new Swagger\Client\Api\GenesApi();
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
//    new GuzzleHttp\Client()
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
//$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

//try {
//    $result = $apiInstance->getAllCancerTypesUsingGET();
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling CancerTypesApi->getAllCancerTypesUsingGET: ', $e->getMessage(), PHP_EOL;
//}


//try {
//    $result = $CancerTypesApiInstance->getAllCancerTypesUsingGET();
//    print_r($result);
//} catch (Exception $e) {
//    echo 'Exception when calling CancerTypesApi->getAllCancerTypesUsingGET: ', $e->getMessage(), PHP_EOL;
//}


//try {
//    $result = $GenesApiInstance->getAllGenesUsingGET();
//    print_r($result[0]) ;
//    foreach ($result as $gene) {
//        $types[] = $gene['type'] ;
//    }
//    $unique_types = array_unique($types) ;
//    sort($unique_types) ;
//    print_r($unique_types);
//} catch (Exception $e) {
//    echo 'Exception when calling GenesApiInstance->getAllGenesUsingGET: ', $e->getMessage(), PHP_EOL;
//}

$target_gene = 'ROS1' ;

try {
    $relevant_genes = [] ;
    $result = $GenesApiInstance->getAllGenesUsingGET();
//    print_r($result[0]) ;
    foreach ($result as $gene) {
        if (strpos($gene['hugo_gene_symbol'], $target_gene) !== false) {
            echo "{$gene->getHugoGeneSymbol()}, {$gene->getType()}\n" ;
            $relevant_genes[] = $gene ;
        }
    }

} catch (Exception $e) {
    echo 'Exception when calling GenesApiInstance->getAllGenesUsingGET: ', $e->getMessage(), PHP_EOL;
}


?>

