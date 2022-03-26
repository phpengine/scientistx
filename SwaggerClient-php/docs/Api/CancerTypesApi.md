# Swagger\Client\CancerTypesApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllCancerTypesUsingGET**](CancerTypesApi.md#getAllCancerTypesUsingGET) | **GET** /cancer-types | Get all cancer types
[**getCancerTypeUsingGET**](CancerTypesApi.md#getCancerTypeUsingGET) | **GET** /cancer-types/{cancerTypeId} | Get a cancer type


# **getAllCancerTypesUsingGET**
> \Swagger\Client\Model\TypeOfCancer[] getAllCancerTypesUsingGET($direction, $page_number, $page_size, $projection, $sort_by)

Get all cancer types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CancerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllCancerTypesUsingGET($direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancerTypesApi->getAllCancerTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\TypeOfCancer[]**](../Model/TypeOfCancer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCancerTypeUsingGET**
> \Swagger\Client\Model\TypeOfCancer getCancerTypeUsingGET($cancer_type_id)

Get a cancer type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CancerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$cancer_type_id = "cancer_type_id_example"; // string | Cancer Type ID e.g. acc

try {
    $result = $apiInstance->getCancerTypeUsingGET($cancer_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancerTypesApi->getCancerTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cancer_type_id** | **string**| Cancer Type ID e.g. acc |

### Return type

[**\Swagger\Client\Model\TypeOfCancer**](../Model/TypeOfCancer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

