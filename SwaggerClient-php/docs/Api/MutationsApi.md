# Swagger\Client\MutationsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchMutationsInMolecularProfileUsingPOST**](MutationsApi.md#fetchMutationsInMolecularProfileUsingPOST) | **POST** /molecular-profiles/{molecularProfileId}/mutations/fetch | Fetch mutations in a molecular profile
[**fetchMutationsInMultipleMolecularProfilesUsingPOST**](MutationsApi.md#fetchMutationsInMultipleMolecularProfilesUsingPOST) | **POST** /mutations/fetch | Fetch mutations in multiple molecular profiles by sample IDs
[**getMutationsInMolecularProfileBySampleListIdUsingGET**](MutationsApi.md#getMutationsInMolecularProfileBySampleListIdUsingGET) | **GET** /molecular-profiles/{molecularProfileId}/mutations | Get mutations in a molecular profile by Sample List ID


# **fetchMutationsInMolecularProfileUsingPOST**
> \Swagger\Client\Model\Mutation[] fetchMutationsInMolecularProfileUsingPOST($molecular_profile_id, $mutation_filter, $direction, $page_number, $page_size, $projection, $sort_by)

Fetch mutations in a molecular profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MutationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. acc_tcga_mutations
$mutation_filter = new \Swagger\Client\Model\MutationFilter(); // \Swagger\Client\Model\MutationFilter | List of Sample IDs/Sample List ID and Entrez Gene IDs
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->fetchMutationsInMolecularProfileUsingPOST($molecular_profile_id, $mutation_filter, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutationsApi->fetchMutationsInMolecularProfileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. acc_tcga_mutations |
 **mutation_filter** | [**\Swagger\Client\Model\MutationFilter**](../Model/MutationFilter.md)| List of Sample IDs/Sample List ID and Entrez Gene IDs |
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\Mutation[]**](../Model/Mutation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchMutationsInMultipleMolecularProfilesUsingPOST**
> \Swagger\Client\Model\Mutation[] fetchMutationsInMultipleMolecularProfilesUsingPOST($mutation_multiple_study_filter, $direction, $page_number, $page_size, $projection, $sort_by)

Fetch mutations in multiple molecular profiles by sample IDs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MutationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mutation_multiple_study_filter = new \Swagger\Client\Model\MutationMultipleStudyFilter(); // \Swagger\Client\Model\MutationMultipleStudyFilter | List of Molecular Profile IDs or List of Molecular Profile ID / Sample ID pairs, and List of Entrez Gene IDs
$direction = "ASC"; // string | Direction of the sort
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->fetchMutationsInMultipleMolecularProfilesUsingPOST($mutation_multiple_study_filter, $direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutationsApi->fetchMutationsInMultipleMolecularProfilesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mutation_multiple_study_filter** | [**\Swagger\Client\Model\MutationMultipleStudyFilter**](../Model/MutationMultipleStudyFilter.md)| List of Molecular Profile IDs or List of Molecular Profile ID / Sample ID pairs, and List of Entrez Gene IDs |
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\Mutation[]**](../Model/Mutation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMutationsInMolecularProfileBySampleListIdUsingGET**
> \Swagger\Client\Model\Mutation[] getMutationsInMolecularProfileBySampleListIdUsingGET($molecular_profile_id, $sample_list_id, $direction, $entrez_gene_id, $page_number, $page_size, $projection, $sort_by)

Get mutations in a molecular profile by Sample List ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\MutationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. acc_tcga_mutations
$sample_list_id = "sample_list_id_example"; // string | Sample List ID e.g. acc_tcga_all
$direction = "ASC"; // string | Direction of the sort
$entrez_gene_id = 56; // int | Entrez Gene ID
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getMutationsInMolecularProfileBySampleListIdUsingGET($molecular_profile_id, $sample_list_id, $direction, $entrez_gene_id, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MutationsApi->getMutationsInMolecularProfileBySampleListIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. acc_tcga_mutations |
 **sample_list_id** | **string**| Sample List ID e.g. acc_tcga_all |
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **entrez_gene_id** | **int**| Entrez Gene ID | [optional]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\Mutation[]**](../Model/Mutation.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

