# Swagger\Client\SamplesApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchSamplesUsingPOST**](SamplesApi.md#fetchSamplesUsingPOST) | **POST** /samples/fetch | Fetch samples by ID
[**getAllSamplesInStudyUsingGET**](SamplesApi.md#getAllSamplesInStudyUsingGET) | **GET** /studies/{studyId}/samples | Get all samples in a study
[**getAllSamplesOfPatientInStudyUsingGET**](SamplesApi.md#getAllSamplesOfPatientInStudyUsingGET) | **GET** /studies/{studyId}/patients/{patientId}/samples | Get all samples of a patient in a study
[**getSampleInStudyUsingGET**](SamplesApi.md#getSampleInStudyUsingGET) | **GET** /studies/{studyId}/samples/{sampleId} | Get a sample in a study
[**getSamplesByKeywordUsingGET**](SamplesApi.md#getSamplesByKeywordUsingGET) | **GET** /samples | Get all samples matching keyword


# **fetchSamplesUsingPOST**
> \Swagger\Client\Model\Sample[] fetchSamplesUsingPOST($sample_filter, $projection)

Fetch samples by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_filter = new \Swagger\Client\Model\SampleFilter(); // \Swagger\Client\Model\SampleFilter | List of sample identifiers
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchSamplesUsingPOST($sample_filter, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SamplesApi->fetchSamplesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_filter** | [**\Swagger\Client\Model\SampleFilter**](../Model/SampleFilter.md)| List of sample identifiers |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\Sample[]**](../Model/Sample.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSamplesInStudyUsingGET**
> \Swagger\Client\Model\Sample[] getAllSamplesInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all samples in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SamplesApi(
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
    $result = $apiInstance->getAllSamplesInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SamplesApi->getAllSamplesInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Sample[]**](../Model/Sample.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSamplesOfPatientInStudyUsingGET**
> \Swagger\Client\Model\Sample[] getAllSamplesOfPatientInStudyUsingGET($patient_id, $study_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all samples of a patient in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$patient_id = "patient_id_example"; // string | Patient ID e.g. TCGA-OR-A5J2
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllSamplesOfPatientInStudyUsingGET($patient_id, $study_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SamplesApi->getAllSamplesOfPatientInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patient_id** | **string**| Patient ID e.g. TCGA-OR-A5J2 |
 **study_id** | **string**| Study ID e.g. acc_tcga |
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\Sample[]**](../Model/Sample.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSampleInStudyUsingGET**
> \Swagger\Client\Model\Sample getSampleInStudyUsingGET($sample_id, $study_id)

Get a sample in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_id = "sample_id_example"; // string | Sample ID e.g. TCGA-OR-A5J2-01
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga

try {
    $result = $apiInstance->getSampleInStudyUsingGET($sample_id, $study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SamplesApi->getSampleInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_id** | **string**| Sample ID e.g. TCGA-OR-A5J2-01 |
 **study_id** | **string**| Study ID e.g. acc_tcga |

### Return type

[**\Swagger\Client\Model\Sample**](../Model/Sample.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSamplesByKeywordUsingGET**
> \Swagger\Client\Model\Sample[] getSamplesByKeywordUsingGET($direction, $keyword, $page_number, $page_size, $projection, $sort_by)

Get all samples matching keyword

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SamplesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$direction = "ASC"; // string | Direction of the sort
$keyword = "keyword_example"; // string | Search keyword that applies to the study ID
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getSamplesByKeywordUsingGET($direction, $keyword, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SamplesApi->getSamplesByKeywordUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **keyword** | **string**| Search keyword that applies to the study ID | [optional]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\Sample[]**](../Model/Sample.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

