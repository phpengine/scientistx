# Swagger\Client\StudiesApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchStudiesUsingPOST**](StudiesApi.md#fetchStudiesUsingPOST) | **POST** /studies/fetch | Fetch studies by IDs
[**getAllStudiesUsingGET**](StudiesApi.md#getAllStudiesUsingGET) | **GET** /studies | Get all studies
[**getStudyUsingGET**](StudiesApi.md#getStudyUsingGET) | **GET** /studies/{studyId} | Get a study
[**getTagsForMultipleStudiesUsingPOST**](StudiesApi.md#getTagsForMultipleStudiesUsingPOST) | **POST** /studies/tags/fetch | Get the study tags by IDs
[**getTagsUsingGET**](StudiesApi.md#getTagsUsingGET) | **GET** /studies/{studyId}/tags | Get the tags of a study


# **fetchStudiesUsingPOST**
> \Swagger\Client\Model\CancerStudy[] fetchStudiesUsingPOST($study_ids, $projection)

Fetch studies by IDs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of Study IDs
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchStudiesUsingPOST($study_ids, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->fetchStudiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_ids** | **string[]**| List of Study IDs |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\CancerStudy[]**](../Model/CancerStudy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllStudiesUsingGET**
> \Swagger\Client\Model\CancerStudy[] getAllStudiesUsingGET($authenticated, $authorities_0_authority, $credentials, $details, $direction, $keyword, $page_number, $page_size, $principal, $projection, $sort_by)

Get all studies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authenticated = true; // bool | 
$authorities_0_authority = "authorities_0_authority_example"; // string | 
$credentials = array('key' => "credentials_example"); // map[string,string] | 
$details = array('key' => "details_example"); // map[string,string] | 
$direction = "ASC"; // string | Direction of the sort
$keyword = "keyword_example"; // string | Search keyword that applies to name and cancer type of the studies
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$principal = array('key' => "principal_example"); // map[string,string] | 
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllStudiesUsingGET($authenticated, $authorities_0_authority, $credentials, $details, $direction, $keyword, $page_number, $page_size, $principal, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getAllStudiesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authenticated** | **bool**|  | [optional]
 **authorities_0_authority** | **string**|  | [optional]
 **credentials** | [**map[string,string]**](../Model/string.md)|  | [optional]
 **details** | [**map[string,string]**](../Model/string.md)|  | [optional]
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **keyword** | **string**| Search keyword that applies to name and cancer type of the studies | [optional]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **principal** | [**map[string,string]**](../Model/string.md)|  | [optional]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\CancerStudy[]**](../Model/CancerStudy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStudyUsingGET**
> \Swagger\Client\Model\CancerStudy getStudyUsingGET($study_id)

Get a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga

try {
    $result = $apiInstance->getStudyUsingGET($study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_id** | **string**| Study ID e.g. acc_tcga |

### Return type

[**\Swagger\Client\Model\CancerStudy**](../Model/CancerStudy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagsForMultipleStudiesUsingPOST**
> \Swagger\Client\Model\CancerStudyTags[] getTagsForMultipleStudiesUsingPOST($study_ids)

Get the study tags by IDs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of Study IDs

try {
    $result = $apiInstance->getTagsForMultipleStudiesUsingPOST($study_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getTagsForMultipleStudiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_ids** | **string[]**| List of Study IDs |

### Return type

[**\Swagger\Client\Model\CancerStudyTags[]**](../Model/CancerStudyTags.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagsUsingGET**
> object getTagsUsingGET($study_id)

Get the tags of a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StudiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga

try {
    $result = $apiInstance->getTagsUsingGET($study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StudiesApi->getTagsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_id** | **string**| Study ID e.g. acc_tcga |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

