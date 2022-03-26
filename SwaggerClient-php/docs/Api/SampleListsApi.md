# Swagger\Client\SampleListsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchSampleListsUsingPOST**](SampleListsApi.md#fetchSampleListsUsingPOST) | **POST** /sample-lists/fetch | Fetch sample lists by ID
[**getAllSampleIdsInSampleListUsingGET**](SampleListsApi.md#getAllSampleIdsInSampleListUsingGET) | **GET** /sample-lists/{sampleListId}/sample-ids | Get all sample IDs in a sample list
[**getAllSampleListsInStudyUsingGET**](SampleListsApi.md#getAllSampleListsInStudyUsingGET) | **GET** /studies/{studyId}/sample-lists | Get all sample lists in a study
[**getAllSampleListsUsingGET**](SampleListsApi.md#getAllSampleListsUsingGET) | **GET** /sample-lists | Get all sample lists
[**getSampleListUsingGET**](SampleListsApi.md#getSampleListUsingGET) | **GET** /sample-lists/{sampleListId} | Get sample list


# **fetchSampleListsUsingPOST**
> \Swagger\Client\Model\SampleList[] fetchSampleListsUsingPOST($sample_list_ids, $projection)

Fetch sample lists by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SampleListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_list_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of sample list IDs
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchSampleListsUsingPOST($sample_list_ids, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SampleListsApi->fetchSampleListsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_list_ids** | **string[]**| List of sample list IDs |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\SampleList[]**](../Model/SampleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSampleIdsInSampleListUsingGET**
> string[] getAllSampleIdsInSampleListUsingGET($sample_list_id)

Get all sample IDs in a sample list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SampleListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_list_id = "sample_list_id_example"; // string | Sample List ID e.g. acc_tcga_all

try {
    $result = $apiInstance->getAllSampleIdsInSampleListUsingGET($sample_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SampleListsApi->getAllSampleIdsInSampleListUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_list_id** | **string**| Sample List ID e.g. acc_tcga_all |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSampleListsInStudyUsingGET**
> \Swagger\Client\Model\SampleList[] getAllSampleListsInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all sample lists in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SampleListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllSampleListsInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SampleListsApi->getAllSampleListsInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_id** | **string**| Study ID e.g. acc_tcga |
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\SampleList[]**](../Model/SampleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSampleListsUsingGET**
> \Swagger\Client\Model\SampleList[] getAllSampleListsUsingGET($direction, $page_number, $page_size, $projection, $sort_by)

Get all sample lists

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SampleListsApi(
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
    $result = $apiInstance->getAllSampleListsUsingGET($direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SampleListsApi->getAllSampleListsUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\SampleList[]**](../Model/SampleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSampleListUsingGET**
> \Swagger\Client\Model\SampleList getSampleListUsingGET($sample_list_id)

Get sample list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SampleListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_list_id = "sample_list_id_example"; // string | Sample List ID e.g. acc_tcga_all

try {
    $result = $apiInstance->getSampleListUsingGET($sample_list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SampleListsApi->getSampleListUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_list_id** | **string**| Sample List ID e.g. acc_tcga_all |

### Return type

[**\Swagger\Client\Model\SampleList**](../Model/SampleList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

