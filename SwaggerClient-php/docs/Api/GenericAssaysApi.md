# Swagger\Client\GenericAssaysApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchGenericAssayDataInMolecularProfileUsingPOST**](GenericAssaysApi.md#fetchGenericAssayDataInMolecularProfileUsingPOST) | **POST** /generic_assay_data/{molecularProfileId}/fetch | fetch generic_assay_data in a molecular profile
[**fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST**](GenericAssaysApi.md#fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST) | **POST** /generic_assay_data/fetch | Fetch generic_assay_data
[**fetchGenericAssayMetaDataUsingPOST**](GenericAssaysApi.md#fetchGenericAssayMetaDataUsingPOST) | **POST** /generic_assay_meta/fetch | Fetch meta data for generic-assay by ID


# **fetchGenericAssayDataInMolecularProfileUsingPOST**
> \Swagger\Client\Model\GenericAssayData[] fetchGenericAssayDataInMolecularProfileUsingPOST($generic_assay_data_filter, $molecular_profile_id, $projection)

fetch generic_assay_data in a molecular profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenericAssaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generic_assay_data_filter = new \Swagger\Client\Model\GenericAssayFilter(); // \Swagger\Client\Model\GenericAssayFilter | List of Sample IDs/Sample List ID and Generic Assay IDs
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchGenericAssayDataInMolecularProfileUsingPOST($generic_assay_data_filter, $molecular_profile_id, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenericAssaysApi->fetchGenericAssayDataInMolecularProfileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generic_assay_data_filter** | [**\Swagger\Client\Model\GenericAssayFilter**](../Model/GenericAssayFilter.md)| List of Sample IDs/Sample List ID and Generic Assay IDs |
 **molecular_profile_id** | **string**| Molecular Profile ID |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\GenericAssayData[]**](../Model/GenericAssayData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST**
> \Swagger\Client\Model\GenericAssayData[] fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST($generic_assay_data_multiple_study_filter, $projection)

Fetch generic_assay_data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenericAssaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generic_assay_data_multiple_study_filter = new \Swagger\Client\Model\GenericAssayDataMultipleStudyFilter(); // \Swagger\Client\Model\GenericAssayDataMultipleStudyFilter | List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Generic Assay IDs
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST($generic_assay_data_multiple_study_filter, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenericAssaysApi->fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generic_assay_data_multiple_study_filter** | [**\Swagger\Client\Model\GenericAssayDataMultipleStudyFilter**](../Model/GenericAssayDataMultipleStudyFilter.md)| List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Generic Assay IDs |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\GenericAssayData[]**](../Model/GenericAssayData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchGenericAssayMetaDataUsingPOST**
> \Swagger\Client\Model\GenericAssayMeta[] fetchGenericAssayMetaDataUsingPOST($generic_assay_meta_filter, $projection)

Fetch meta data for generic-assay by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenericAssaysApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$generic_assay_meta_filter = new \Swagger\Client\Model\GenericAssayMetaFilter(); // \Swagger\Client\Model\GenericAssayMetaFilter | List of Molecular Profile ID or List of Stable ID
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchGenericAssayMetaDataUsingPOST($generic_assay_meta_filter, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenericAssaysApi->fetchGenericAssayMetaDataUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **generic_assay_meta_filter** | [**\Swagger\Client\Model\GenericAssayMetaFilter**](../Model/GenericAssayMetaFilter.md)| List of Molecular Profile ID or List of Stable ID |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\GenericAssayMeta[]**](../Model/GenericAssayMeta.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

