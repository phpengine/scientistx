# Swagger\Client\DiscreteCopyNumberAlterationsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchDiscreteCopyNumbersInMolecularProfileUsingPOST**](DiscreteCopyNumberAlterationsApi.md#fetchDiscreteCopyNumbersInMolecularProfileUsingPOST) | **POST** /molecular-profiles/{molecularProfileId}/discrete-copy-number/fetch | Fetch discrete copy number alterations in a molecular profile by sample ID
[**getDiscreteCopyNumbersInMolecularProfileUsingGET**](DiscreteCopyNumberAlterationsApi.md#getDiscreteCopyNumbersInMolecularProfileUsingGET) | **GET** /molecular-profiles/{molecularProfileId}/discrete-copy-number | Get discrete copy number alterations in a molecular profile


# **fetchDiscreteCopyNumbersInMolecularProfileUsingPOST**
> \Swagger\Client\Model\DiscreteCopyNumberData[] fetchDiscreteCopyNumbersInMolecularProfileUsingPOST($discrete_copy_number_filter, $molecular_profile_id, $discrete_copy_number_event_type, $projection)

Fetch discrete copy number alterations in a molecular profile by sample ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiscreteCopyNumberAlterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$discrete_copy_number_filter = new \Swagger\Client\Model\DiscreteCopyNumberFilter(); // \Swagger\Client\Model\DiscreteCopyNumberFilter | List of Sample IDs/Sample List ID and Entrez Gene IDs
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. acc_tcga_gistic
$discrete_copy_number_event_type = "HOMDEL_AND_AMP"; // string | Type of the copy number event
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchDiscreteCopyNumbersInMolecularProfileUsingPOST($discrete_copy_number_filter, $molecular_profile_id, $discrete_copy_number_event_type, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscreteCopyNumberAlterationsApi->fetchDiscreteCopyNumbersInMolecularProfileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **discrete_copy_number_filter** | [**\Swagger\Client\Model\DiscreteCopyNumberFilter**](../Model/DiscreteCopyNumberFilter.md)| List of Sample IDs/Sample List ID and Entrez Gene IDs |
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. acc_tcga_gistic |
 **discrete_copy_number_event_type** | **string**| Type of the copy number event | [optional] [default to HOMDEL_AND_AMP]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\DiscreteCopyNumberData[]**](../Model/DiscreteCopyNumberData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDiscreteCopyNumbersInMolecularProfileUsingGET**
> \Swagger\Client\Model\DiscreteCopyNumberData[] getDiscreteCopyNumbersInMolecularProfileUsingGET($molecular_profile_id, $sample_list_id, $discrete_copy_number_event_type, $projection)

Get discrete copy number alterations in a molecular profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DiscreteCopyNumberAlterationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. acc_tcga_gistic
$sample_list_id = "sample_list_id_example"; // string | Sample List ID e.g. acc_tcga_all
$discrete_copy_number_event_type = "HOMDEL_AND_AMP"; // string | Type of the copy number event
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->getDiscreteCopyNumbersInMolecularProfileUsingGET($molecular_profile_id, $sample_list_id, $discrete_copy_number_event_type, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscreteCopyNumberAlterationsApi->getDiscreteCopyNumbersInMolecularProfileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. acc_tcga_gistic |
 **sample_list_id** | **string**| Sample List ID e.g. acc_tcga_all |
 **discrete_copy_number_event_type** | **string**| Type of the copy number event | [optional] [default to HOMDEL_AND_AMP]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\DiscreteCopyNumberData[]**](../Model/DiscreteCopyNumberData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

