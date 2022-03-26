# Swagger\Client\ClinicalAttributesApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchClinicalAttributesUsingPOST**](ClinicalAttributesApi.md#fetchClinicalAttributesUsingPOST) | **POST** /clinical-attributes/fetch | Fetch clinical attributes
[**getAllClinicalAttributesInStudyUsingGET**](ClinicalAttributesApi.md#getAllClinicalAttributesInStudyUsingGET) | **GET** /studies/{studyId}/clinical-attributes | Get all clinical attributes in the specified study
[**getAllClinicalAttributesUsingGET**](ClinicalAttributesApi.md#getAllClinicalAttributesUsingGET) | **GET** /clinical-attributes | Get all clinical attributes
[**getClinicalAttributeInStudyUsingGET**](ClinicalAttributesApi.md#getClinicalAttributeInStudyUsingGET) | **GET** /studies/{studyId}/clinical-attributes/{clinicalAttributeId} | Get specified clinical attribute


# **fetchClinicalAttributesUsingPOST**
> \Swagger\Client\Model\ClinicalAttribute[] fetchClinicalAttributesUsingPOST($study_ids, $projection)

Fetch clinical attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of Study IDs
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchClinicalAttributesUsingPOST($study_ids, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalAttributesApi->fetchClinicalAttributesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_ids** | **string[]**| List of Study IDs |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\ClinicalAttribute[]**](../Model/ClinicalAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllClinicalAttributesInStudyUsingGET**
> \Swagger\Client\Model\ClinicalAttribute[] getAllClinicalAttributesInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all clinical attributes in the specified study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalAttributesApi(
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
    $result = $apiInstance->getAllClinicalAttributesInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalAttributesApi->getAllClinicalAttributesInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ClinicalAttribute[]**](../Model/ClinicalAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllClinicalAttributesUsingGET**
> \Swagger\Client\Model\ClinicalAttribute[] getAllClinicalAttributesUsingGET($direction, $page_number, $page_size, $projection, $sort_by)

Get all clinical attributes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalAttributesApi(
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
    $result = $apiInstance->getAllClinicalAttributesUsingGET($direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalAttributesApi->getAllClinicalAttributesUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ClinicalAttribute[]**](../Model/ClinicalAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClinicalAttributeInStudyUsingGET**
> \Swagger\Client\Model\ClinicalAttribute getClinicalAttributeInStudyUsingGET($clinical_attribute_id, $study_id)

Get specified clinical attribute

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalAttributesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clinical_attribute_id = "clinical_attribute_id_example"; // string | Clinical Attribute ID e.g. CANCER_TYPE
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga

try {
    $result = $apiInstance->getClinicalAttributeInStudyUsingGET($clinical_attribute_id, $study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalAttributesApi->getClinicalAttributeInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clinical_attribute_id** | **string**| Clinical Attribute ID e.g. CANCER_TYPE |
 **study_id** | **string**| Study ID e.g. acc_tcga |

### Return type

[**\Swagger\Client\Model\ClinicalAttribute**](../Model/ClinicalAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

