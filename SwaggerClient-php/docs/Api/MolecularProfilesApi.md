# Swagger\Client\MolecularProfilesApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchMolecularProfilesUsingPOST**](MolecularProfilesApi.md#fetchMolecularProfilesUsingPOST) | **POST** /molecular-profiles/fetch | Fetch molecular profiles
[**getAllMolecularProfilesInStudyUsingGET**](MolecularProfilesApi.md#getAllMolecularProfilesInStudyUsingGET) | **GET** /studies/{studyId}/molecular-profiles | Get all molecular profiles in a study
[**getAllMolecularProfilesUsingGET**](MolecularProfilesApi.md#getAllMolecularProfilesUsingGET) | **GET** /molecular-profiles | Get all molecular profiles
[**getMolecularProfileUsingGET**](MolecularProfilesApi.md#getMolecularProfileUsingGET) | **GET** /molecular-profiles/{molecularProfileId} | Get molecular profile


# **fetchMolecularProfilesUsingPOST**
> \Swagger\Client\Model\MolecularProfile[] fetchMolecularProfilesUsingPOST($molecular_profile_filter, $projection)

Fetch molecular profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MolecularProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$molecular_profile_filter = new \Swagger\Client\Model\MolecularProfileFilter(); // \Swagger\Client\Model\MolecularProfileFilter | List of Molecular Profile IDs or List of Study IDs
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchMolecularProfilesUsingPOST($molecular_profile_filter, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MolecularProfilesApi->fetchMolecularProfilesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **molecular_profile_filter** | [**\Swagger\Client\Model\MolecularProfileFilter**](../Model/MolecularProfileFilter.md)| List of Molecular Profile IDs or List of Study IDs |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\MolecularProfile[]**](../Model/MolecularProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMolecularProfilesInStudyUsingGET**
> \Swagger\Client\Model\MolecularProfile[] getAllMolecularProfilesInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by)

Get all molecular profiles in a study

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MolecularProfilesApi(
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
    $result = $apiInstance->getAllMolecularProfilesInStudyUsingGET($study_id, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MolecularProfilesApi->getAllMolecularProfilesInStudyUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\MolecularProfile[]**](../Model/MolecularProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMolecularProfilesUsingGET**
> \Swagger\Client\Model\MolecularProfile[] getAllMolecularProfilesUsingGET($direction, $page_number, $page_size, $projection, $sort_by)

Get all molecular profiles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MolecularProfilesApi(
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
    $result = $apiInstance->getAllMolecularProfilesUsingGET($direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MolecularProfilesApi->getAllMolecularProfilesUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\MolecularProfile[]**](../Model/MolecularProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMolecularProfileUsingGET**
> \Swagger\Client\Model\MolecularProfile getMolecularProfileUsingGET($molecular_profile_id)

Get molecular profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MolecularProfilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. acc_tcga_mutations

try {
    $result = $apiInstance->getMolecularProfileUsingGET($molecular_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MolecularProfilesApi->getMolecularProfileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. acc_tcga_mutations |

### Return type

[**\Swagger\Client\Model\MolecularProfile**](../Model/MolecularProfile.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

