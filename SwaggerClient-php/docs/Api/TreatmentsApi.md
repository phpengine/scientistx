# Swagger\Client\TreatmentsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllPatientTreatmentsUsingPOST**](TreatmentsApi.md#getAllPatientTreatmentsUsingPOST) | **POST** /treatments/patient | Get all patient level treatments
[**getAllSampleTreatmentsUsingPOST**](TreatmentsApi.md#getAllSampleTreatmentsUsingPOST) | **POST** /treatments/sample | Get all sample level treatments
[**getContainsSampleTreatmentDataUsingPOST**](TreatmentsApi.md#getContainsSampleTreatmentDataUsingPOST) | **POST** /treatments/display-sample | Should sample level treatments be displayed
[**getContainsTreatmentDataUsingPOST**](TreatmentsApi.md#getContainsTreatmentDataUsingPOST) | **POST** /treatments/display-patient | Should patient level treatments be displayed


# **getAllPatientTreatmentsUsingPOST**
> \Swagger\Client\Model\PatientTreatmentRow[] getAllPatientTreatmentsUsingPOST($study_view_filter, $tier)

Get all patient level treatments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TreatmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_view_filter = new \Swagger\Client\Model\StudyViewFilter(); // \Swagger\Client\Model\StudyViewFilter | Study view filter
$tier = "Treatment"; // string | tier

try {
    $result = $apiInstance->getAllPatientTreatmentsUsingPOST($study_view_filter, $tier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreatmentsApi->getAllPatientTreatmentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_view_filter** | [**\Swagger\Client\Model\StudyViewFilter**](../Model/StudyViewFilter.md)| Study view filter |
 **tier** | **string**| tier | [optional] [default to Treatment]

### Return type

[**\Swagger\Client\Model\PatientTreatmentRow[]**](../Model/PatientTreatmentRow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSampleTreatmentsUsingPOST**
> \Swagger\Client\Model\SampleTreatmentRow[] getAllSampleTreatmentsUsingPOST($study_view_filter, $tier)

Get all sample level treatments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TreatmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_view_filter = new \Swagger\Client\Model\StudyViewFilter(); // \Swagger\Client\Model\StudyViewFilter | Study view filter
$tier = "Treatment"; // string | tier

try {
    $result = $apiInstance->getAllSampleTreatmentsUsingPOST($study_view_filter, $tier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreatmentsApi->getAllSampleTreatmentsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_view_filter** | [**\Swagger\Client\Model\StudyViewFilter**](../Model/StudyViewFilter.md)| Study view filter |
 **tier** | **string**| tier | [optional] [default to Treatment]

### Return type

[**\Swagger\Client\Model\SampleTreatmentRow[]**](../Model/SampleTreatmentRow.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContainsSampleTreatmentDataUsingPOST**
> bool getContainsSampleTreatmentDataUsingPOST($study_ids, $tier)

Should sample level treatments be displayed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TreatmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of Study IDs
$tier = "Treatment"; // string | tier

try {
    $result = $apiInstance->getContainsSampleTreatmentDataUsingPOST($study_ids, $tier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreatmentsApi->getContainsSampleTreatmentDataUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_ids** | **string[]**| List of Study IDs |
 **tier** | **string**| tier | [optional] [default to Treatment]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContainsTreatmentDataUsingPOST**
> bool getContainsTreatmentDataUsingPOST($study_ids, $tier)

Should patient level treatments be displayed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\TreatmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$study_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of Study IDs
$tier = "Treatment"; // string | tier

try {
    $result = $apiInstance->getContainsTreatmentDataUsingPOST($study_ids, $tier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TreatmentsApi->getContainsTreatmentDataUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **study_ids** | **string[]**| List of Study IDs |
 **tier** | **string**| tier | [optional] [default to Treatment]

### Return type

**bool**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

