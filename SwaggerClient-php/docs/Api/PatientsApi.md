# Swagger\Client\PatientsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchPatientsUsingPOST**](PatientsApi.md#fetchPatientsUsingPOST) | **POST** /patients/fetch | fetchPatients
[**getAllPatientsInStudyUsingGET**](PatientsApi.md#getAllPatientsInStudyUsingGET) | **GET** /studies/{studyId}/patients | Get all patients in a study
[**getAllPatientsUsingGET**](PatientsApi.md#getAllPatientsUsingGET) | **GET** /patients | Get all patients
[**getPatientInStudyUsingGET**](PatientsApi.md#getPatientInStudyUsingGET) | **GET** /studies/{studyId}/patients/{patientId} | Get a patient in a study


# **fetchPatientsUsingPOST**
> \Swagger\Client\Model\Patient[] fetchPatientsUsingPOST($patient_filter, $projection)

fetchPatients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$patient_filter = new \Swagger\Client\Model\PatientFilter(); // \Swagger\Client\Model\PatientFilter | List of patient identifiers
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchPatientsUsingPOST($patient_filter, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->fetchPatientsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patient_filter** | [**\Swagger\Client\Model\PatientFilter**](../Model/PatientFilter.md)| List of patient identifiers |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\Patient[]**](../Model/Patient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPatientsInStudyUsingGET**
> \Swagger\Client\Model\Patient[] getAllPatientsInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all patients in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PatientsApi(
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
    $result = $apiInstance->getAllPatientsInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->getAllPatientsInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\Patient[]**](../Model/Patient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPatientsUsingGET**
> \Swagger\Client\Model\Patient[] getAllPatientsUsingGET($direction, $keyword, $page_number, $page_size, $projection, $sort_by)

Get all patients

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$direction = "ASC"; // string | Direction of the sort
$keyword = "keyword_example"; // string | Search keyword that applies to ID of the patients
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllPatientsUsingGET($direction, $keyword, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->getAllPatientsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **keyword** | **string**| Search keyword that applies to ID of the patients | [optional]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\Patient[]**](../Model/Patient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPatientInStudyUsingGET**
> \Swagger\Client\Model\Patient getPatientInStudyUsingGET($patient_id, $study_id)

Get a patient in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\PatientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$patient_id = "patient_id_example"; // string | Patient ID e.g. TCGA-OR-A5J2
$study_id = "study_id_example"; // string | Study ID e.g. acc_tcga

try {
    $result = $apiInstance->getPatientInStudyUsingGET($patient_id, $study_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PatientsApi->getPatientInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **patient_id** | **string**| Patient ID e.g. TCGA-OR-A5J2 |
 **study_id** | **string**| Study ID e.g. acc_tcga |

### Return type

[**\Swagger\Client\Model\Patient**](../Model/Patient.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

