# Swagger\Client\ClinicalDataApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchAllClinicalDataInStudyUsingPOST**](ClinicalDataApi.md#fetchAllClinicalDataInStudyUsingPOST) | **POST** /studies/{studyId}/clinical-data/fetch | Fetch clinical data by patient IDs or sample IDs (specific study)
[**fetchClinicalDataUsingPOST**](ClinicalDataApi.md#fetchClinicalDataUsingPOST) | **POST** /clinical-data/fetch | Fetch clinical data by patient IDs or sample IDs (all studies)
[**getAllClinicalDataInStudyUsingGET**](ClinicalDataApi.md#getAllClinicalDataInStudyUsingGET) | **GET** /studies/{studyId}/clinical-data | Get all clinical data in a study
[**getAllClinicalDataOfPatientInStudyUsingGET**](ClinicalDataApi.md#getAllClinicalDataOfPatientInStudyUsingGET) | **GET** /studies/{studyId}/patients/{patientId}/clinical-data | Get all clinical data of a patient in a study
[**getAllClinicalDataOfSampleInStudyUsingGET**](ClinicalDataApi.md#getAllClinicalDataOfSampleInStudyUsingGET) | **GET** /studies/{studyId}/samples/{sampleId}/clinical-data | Get all clinical data of a sample in a study


# **fetchAllClinicalDataInStudyUsingPOST**
> \Swagger\Client\Model\ClinicalData[] fetchAllClinicalDataInStudyUsingPOST($clinical_data_single_study_filter, $study_id, $clinical_data_type, $projection)

Fetch clinical data by patient IDs or sample IDs (specific study)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clinical_data_single_study_filter = new \Swagger\Client\Model\ClinicalDataSingleStudyFilter(); // \Swagger\Client\Model\ClinicalDataSingleStudyFilter | List of patient or sample IDs and attribute IDs
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga
$clinical_data_type = "SAMPLE"; // string | Type of the clinical data
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchAllClinicalDataInStudyUsingPOST($clinical_data_single_study_filter, $study_id, $clinical_data_type, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalDataApi->fetchAllClinicalDataInStudyUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clinical_data_single_study_filter** | [**\Swagger\Client\Model\ClinicalDataSingleStudyFilter**](../Model/ClinicalDataSingleStudyFilter.md)| List of patient or sample IDs and attribute IDs |
 **study_id** | **string**| Study ID e.g. acc_tcga |
 **clinical_data_type** | **string**| Type of the clinical data | [optional] [default to SAMPLE]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\ClinicalData[]**](../Model/ClinicalData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchClinicalDataUsingPOST**
> \Swagger\Client\Model\ClinicalData[] fetchClinicalDataUsingPOST($clinical_data_multi_study_filter, $clinical_data_type, $projection)

Fetch clinical data by patient IDs or sample IDs (all studies)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$clinical_data_multi_study_filter = new \Swagger\Client\Model\ClinicalDataMultiStudyFilter(); // \Swagger\Client\Model\ClinicalDataMultiStudyFilter | List of patient or sample identifiers and attribute IDs
$clinical_data_type = "SAMPLE"; // string | Type of the clinical data
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchClinicalDataUsingPOST($clinical_data_multi_study_filter, $clinical_data_type, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalDataApi->fetchClinicalDataUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **clinical_data_multi_study_filter** | [**\Swagger\Client\Model\ClinicalDataMultiStudyFilter**](../Model/ClinicalDataMultiStudyFilter.md)| List of patient or sample identifiers and attribute IDs |
 **clinical_data_type** | **string**| Type of the clinical data | [optional] [default to SAMPLE]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\ClinicalData[]**](../Model/ClinicalData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllClinicalDataInStudyUsingGET**
> \Swagger\Client\Model\ClinicalData[] getAllClinicalDataInStudyUsingGET($study_id, $attribute_id, $clinical_data_type, $direction, $page_number, $page_size, $projection, $sort_by)

Get all clinical data in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga
$attribute_id = "attribute_id_example"; // string | Attribute ID e.g. CANCER_TYPE
$clinical_data_type = "SAMPLE"; // string | Type of the clinical data
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllClinicalDataInStudyUsingGET($study_id, $attribute_id, $clinical_data_type, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalDataApi->getAllClinicalDataInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_id** | **string**| Study ID e.g. acc_tcga |
 **attribute_id** | **string**| Attribute ID e.g. CANCER_TYPE | [optional]
 **clinical_data_type** | **string**| Type of the clinical data | [optional] [default to SAMPLE]
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\ClinicalData[]**](../Model/ClinicalData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllClinicalDataOfPatientInStudyUsingGET**
> \Swagger\Client\Model\ClinicalData[] getAllClinicalDataOfPatientInStudyUsingGET($patient_id, $study_id, $attribute_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all clinical data of a patient in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$patient_id = "patient_id_example"; // string | Patient ID e.g. TCGA-OR-A5J2
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga
$attribute_id = "attribute_id_example"; // string | Attribute ID e.g. AGE
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllClinicalDataOfPatientInStudyUsingGET($patient_id, $study_id, $attribute_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalDataApi->getAllClinicalDataOfPatientInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patient_id** | **string**| Patient ID e.g. TCGA-OR-A5J2 |
 **study_id** | **string**| Study ID e.g. acc_tcga |
 **attribute_id** | **string**| Attribute ID e.g. AGE | [optional]
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\ClinicalData[]**](../Model/ClinicalData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllClinicalDataOfSampleInStudyUsingGET**
> \Swagger\Client\Model\ClinicalData[] getAllClinicalDataOfSampleInStudyUsingGET($sample_id, $study_id, $attribute_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all clinical data of a sample in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ClinicalDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sample_id = "sample_id_example"; // string | Sample ID e.g. TCGA-OR-A5J2-01
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga
$attribute_id = "attribute_id_example"; // string | Attribute ID e.g. CANCER_TYPE
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllClinicalDataOfSampleInStudyUsingGET($sample_id, $study_id, $attribute_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClinicalDataApi->getAllClinicalDataOfSampleInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sample_id** | **string**| Sample ID e.g. TCGA-OR-A5J2-01 |
 **study_id** | **string**| Study ID e.g. acc_tcga |
 **attribute_id** | **string**| Attribute ID e.g. CANCER_TYPE | [optional]
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\ClinicalData[]**](../Model/ClinicalData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

