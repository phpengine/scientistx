# Swagger\Client\CopyNumberSegmentsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchCopyNumberSegmentsUsingPOST**](CopyNumberSegmentsApi.md#fetchCopyNumberSegmentsUsingPOST) | **POST** /copy-number-segments/fetch | Fetch copy number segments by sample ID
[**getCopyNumberSegmentsInSampleInStudyUsingGET**](CopyNumberSegmentsApi.md#getCopyNumberSegmentsInSampleInStudyUsingGET) | **GET** /studies/{studyId}/samples/{sampleId}/copy-number-segments | Get copy number segments in a sample in a study


# **fetchCopyNumberSegmentsUsingPOST**
> \Swagger\Client\Model\CopyNumberSeg[] fetchCopyNumberSegmentsUsingPOST($sample_identifiers, $chromosome, $projection)

Fetch copy number segments by sample ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CopyNumberSegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_identifiers = array(new \Swagger\Client\Model\SampleIdentifier()); // \Swagger\Client\Model\SampleIdentifier[] | List of sample identifiers
$chromosome = "chromosome_example"; // string | Chromosome
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchCopyNumberSegmentsUsingPOST($sample_identifiers, $chromosome, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CopyNumberSegmentsApi->fetchCopyNumberSegmentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_identifiers** | [**\Swagger\Client\Model\SampleIdentifier[]**](../Model/SampleIdentifier.md)| List of sample identifiers |
 **chromosome** | **string**| Chromosome | [optional]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\CopyNumberSeg[]**](../Model/CopyNumberSeg.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCopyNumberSegmentsInSampleInStudyUsingGET**
> \Swagger\Client\Model\CopyNumberSeg[] getCopyNumberSegmentsInSampleInStudyUsingGET($sample_id, $study_id, $chromosome, $direction, $page_number, $page_size, $projection, $sort_by)

Get copy number segments in a sample in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CopyNumberSegmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_id = "sample_id_example"; // string | Sample ID e.g. TCGA-OR-A5J2-01
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga
$chromosome = "chromosome_example"; // string | Chromosome
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 20000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getCopyNumberSegmentsInSampleInStudyUsingGET($sample_id, $study_id, $chromosome, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CopyNumberSegmentsApi->getCopyNumberSegmentsInSampleInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_id** | **string**| Sample ID e.g. TCGA-OR-A5J2-01 |
 **study_id** | **string**| Study ID e.g. acc_tcga |
 **chromosome** | **string**| Chromosome | [optional]
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 20000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\CopyNumberSeg[]**](../Model/CopyNumberSeg.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

