# Swagger\Client\MolecularDataApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchAllMolecularDataInMolecularProfileUsingPOST**](MolecularDataApi.md#fetchAllMolecularDataInMolecularProfileUsingPOST) | **POST** /molecular-profiles/{molecularProfileId}/molecular-data/fetch | Fetch molecular data in a molecular profile
[**fetchMolecularDataInMultipleMolecularProfilesUsingPOST**](MolecularDataApi.md#fetchMolecularDataInMultipleMolecularProfilesUsingPOST) | **POST** /molecular-data/fetch | Fetch molecular data
[**getAllMolecularDataInMolecularProfileUsingGET**](MolecularDataApi.md#getAllMolecularDataInMolecularProfileUsingGET) | **GET** /molecular-profiles/{molecularProfileId}/molecular-data | Get all molecular data in a molecular profile


# **fetchAllMolecularDataInMolecularProfileUsingPOST**
> \Swagger\Client\Model\NumericGeneMolecularData[] fetchAllMolecularDataInMolecularProfileUsingPOST($molecular_data_filter, $molecular_profile_id, $projection)

Fetch molecular data in a molecular profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MolecularDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$molecular_data_filter = new \Swagger\Client\Model\MolecularDataFilter(); // \Swagger\Client\Model\MolecularDataFilter | List of Sample IDs/Sample List ID and Entrez Gene IDs
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. acc_tcga_rna_seq_v2_mrna
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchAllMolecularDataInMolecularProfileUsingPOST($molecular_data_filter, $molecular_profile_id, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MolecularDataApi->fetchAllMolecularDataInMolecularProfileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **molecular_data_filter** | [**\Swagger\Client\Model\MolecularDataFilter**](../Model/MolecularDataFilter.md)| List of Sample IDs/Sample List ID and Entrez Gene IDs |
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. acc_tcga_rna_seq_v2_mrna |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\NumericGeneMolecularData[]**](../Model/NumericGeneMolecularData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchMolecularDataInMultipleMolecularProfilesUsingPOST**
> \Swagger\Client\Model\NumericGeneMolecularData[] fetchMolecularDataInMultipleMolecularProfilesUsingPOST($molecular_data_multiple_study_filter, $projection)

Fetch molecular data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MolecularDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$molecular_data_multiple_study_filter = new \Swagger\Client\Model\MolecularDataMultipleStudyFilter(); // \Swagger\Client\Model\MolecularDataMultipleStudyFilter | List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Entrez Gene IDs
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchMolecularDataInMultipleMolecularProfilesUsingPOST($molecular_data_multiple_study_filter, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MolecularDataApi->fetchMolecularDataInMultipleMolecularProfilesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **molecular_data_multiple_study_filter** | [**\Swagger\Client\Model\MolecularDataMultipleStudyFilter**](../Model/MolecularDataMultipleStudyFilter.md)| List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Entrez Gene IDs |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\NumericGeneMolecularData[]**](../Model/NumericGeneMolecularData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMolecularDataInMolecularProfileUsingGET**
> \Swagger\Client\Model\NumericGeneMolecularData[] getAllMolecularDataInMolecularProfileUsingGET($entrez_gene_id, $molecular_profile_id, $sample_list_id, $projection)

Get all molecular data in a molecular profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MolecularDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entrez_gene_id = 56; // int | Entrez Gene ID e.g. 1
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. acc_tcga_rna_seq_v2_mrna
$sample_list_id = "sample_list_id_example"; // string | Sample List ID e.g. acc_tcga_all
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->getAllMolecularDataInMolecularProfileUsingGET($entrez_gene_id, $molecular_profile_id, $sample_list_id, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MolecularDataApi->getAllMolecularDataInMolecularProfileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entrez_gene_id** | **int**| Entrez Gene ID e.g. 1 |
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. acc_tcga_rna_seq_v2_mrna |
 **sample_list_id** | **string**| Sample List ID e.g. acc_tcga_all |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\NumericGeneMolecularData[]**](../Model/NumericGeneMolecularData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

