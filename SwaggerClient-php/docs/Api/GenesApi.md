# Swagger\Client\GenesApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchGenesUsingPOST**](GenesApi.md#fetchGenesUsingPOST) | **POST** /genes/fetch | Fetch genes by ID
[**getAliasesOfGeneUsingGET**](GenesApi.md#getAliasesOfGeneUsingGET) | **GET** /genes/{geneId}/aliases | Get aliases of a gene
[**getAllGenesUsingGET**](GenesApi.md#getAllGenesUsingGET) | **GET** /genes | Get all genes
[**getGeneUsingGET**](GenesApi.md#getGeneUsingGET) | **GET** /genes/{geneId} | Get a gene


# **fetchGenesUsingPOST**
> \Swagger\Client\Model\Gene[] fetchGenesUsingPOST($gene_ids, $gene_id_type, $projection)

Fetch genes by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gene_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of Entrez Gene IDs or Hugo Gene Symbols
$gene_id_type = "ENTREZ_GENE_ID"; // string | Type of gene ID
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchGenesUsingPOST($gene_ids, $gene_id_type, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesApi->fetchGenesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gene_ids** | **string[]**| List of Entrez Gene IDs or Hugo Gene Symbols |
 **gene_id_type** | **string**| Type of gene ID | [optional] [default to ENTREZ_GENE_ID]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\Gene[]**](../Model/Gene.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAliasesOfGeneUsingGET**
> string[] getAliasesOfGeneUsingGET($gene_id)

Get aliases of a gene

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gene_id = "gene_id_example"; // string | Entrez Gene ID or Hugo Gene Symbol e.g. 1 or A1BG

try {
    $result = $apiInstance->getAliasesOfGeneUsingGET($gene_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesApi->getAliasesOfGeneUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gene_id** | **string**| Entrez Gene ID or Hugo Gene Symbol e.g. 1 or A1BG |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllGenesUsingGET**
> \Swagger\Client\Model\Gene[] getAllGenesUsingGET($alias, $direction, $keyword, $page_number, $page_size, $projection, $sort_by)

Get all genes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$alias = "alias_example"; // string | Alias of the gene
$direction = "ASC"; // string | Direction of the sort
$keyword = "keyword_example"; // string | Search keyword that applies to hugo gene symbol of the genes
$page_number = 0; // int | Page number of the result list
$page_size = 10000000; // int | Page size of the result list
$projection = "SUMMARY"; // string | Level of detail of the response
$sort_by = "sort_by_example"; // string | Name of the property that the result list is sorted by

try {
    $result = $apiInstance->getAllGenesUsingGET($alias, $direction, $keyword, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesApi->getAllGenesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **alias** | **string**| Alias of the gene | [optional]
 **direction** | **string**| Direction of the sort | [optional] [default to ASC]
 **keyword** | **string**| Search keyword that applies to hugo gene symbol of the genes | [optional]
 **page_number** | **int**| Page number of the result list | [optional] [default to 0]
 **page_size** | **int**| Page size of the result list | [optional] [default to 10000000]
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]
 **sort_by** | **string**| Name of the property that the result list is sorted by | [optional]

### Return type

[**\Swagger\Client\Model\Gene[]**](../Model/Gene.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGeneUsingGET**
> \Swagger\Client\Model\Gene getGeneUsingGET($gene_id)

Get a gene

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gene_id = "gene_id_example"; // string | Entrez Gene ID or Hugo Gene Symbol e.g. 1 or A1BG

try {
    $result = $apiInstance->getGeneUsingGET($gene_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenesApi->getGeneUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gene_id** | **string**| Entrez Gene ID or Hugo Gene Symbol e.g. 1 or A1BG |

### Return type

[**\Swagger\Client\Model\Gene**](../Model/Gene.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

