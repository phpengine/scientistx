# Swagger\Client\GenePanelsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchGenePanelDataInMultipleMolecularProfilesUsingPOST**](GenePanelsApi.md#fetchGenePanelDataInMultipleMolecularProfilesUsingPOST) | **POST** /gene-panel-data/fetch | Fetch gene panel data
[**fetchGenePanelsUsingPOST**](GenePanelsApi.md#fetchGenePanelsUsingPOST) | **POST** /gene-panels/fetch | Get gene panel
[**getAllGenePanelsUsingGET**](GenePanelsApi.md#getAllGenePanelsUsingGET) | **GET** /gene-panels | Get all gene panels
[**getGenePanelDataUsingPOST**](GenePanelsApi.md#getGenePanelDataUsingPOST) | **POST** /molecular-profiles/{molecularProfileId}/gene-panel-data/fetch | Get gene panel data
[**getGenePanelUsingGET**](GenePanelsApi.md#getGenePanelUsingGET) | **GET** /gene-panels/{genePanelId} | Get gene panel


# **fetchGenePanelDataInMultipleMolecularProfilesUsingPOST**
> \Swagger\Client\Model\GenePanelData[] fetchGenePanelDataInMultipleMolecularProfilesUsingPOST($gene_panel_data_multiple_study_filter)

Fetch gene panel data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenePanelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gene_panel_data_multiple_study_filter = new \Swagger\Client\Model\GenePanelDataMultipleStudyFilter(); // \Swagger\Client\Model\GenePanelDataMultipleStudyFilter | Gene panel data filter object

try {
    $result = $apiInstance->fetchGenePanelDataInMultipleMolecularProfilesUsingPOST($gene_panel_data_multiple_study_filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenePanelsApi->fetchGenePanelDataInMultipleMolecularProfilesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gene_panel_data_multiple_study_filter** | [**\Swagger\Client\Model\GenePanelDataMultipleStudyFilter**](../Model/GenePanelDataMultipleStudyFilter.md)| Gene panel data filter object |

### Return type

[**\Swagger\Client\Model\GenePanelData[]**](../Model/GenePanelData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fetchGenePanelsUsingPOST**
> \Swagger\Client\Model\GenePanel[] fetchGenePanelsUsingPOST($gene_panel_ids, $projection)

Get gene panel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenePanelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gene_panel_ids = array(new \Swagger\Client\Model\string[]()); // string[] | List of Gene Panel IDs
$projection = "SUMMARY"; // string | Level of detail of the response

try {
    $result = $apiInstance->fetchGenePanelsUsingPOST($gene_panel_ids, $projection);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenePanelsApi->fetchGenePanelsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gene_panel_ids** | **string[]**| List of Gene Panel IDs |
 **projection** | **string**| Level of detail of the response | [optional] [default to SUMMARY]

### Return type

[**\Swagger\Client\Model\GenePanel[]**](../Model/GenePanel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllGenePanelsUsingGET**
> \Swagger\Client\Model\GenePanel[] getAllGenePanelsUsingGET($direction, $page_number, $page_size, $projection, $sort_by)

Get all gene panels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenePanelsApi(
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
    $result = $apiInstance->getAllGenePanelsUsingGET($direction, $page_number, $page_size, $projection, $sort_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenePanelsApi->getAllGenePanelsUsingGET: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\GenePanel[]**](../Model/GenePanel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGenePanelDataUsingPOST**
> \Swagger\Client\Model\GenePanelData[] getGenePanelDataUsingPOST($gene_panel_data_filter, $molecular_profile_id)

Get gene panel data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenePanelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gene_panel_data_filter = new \Swagger\Client\Model\GenePanelDataFilter(); // \Swagger\Client\Model\GenePanelDataFilter | List of Sample IDs/Sample List ID and Entrez Gene IDs
$molecular_profile_id = "molecular_profile_id_example"; // string | Molecular Profile ID e.g. nsclc_unito_2016_mutations

try {
    $result = $apiInstance->getGenePanelDataUsingPOST($gene_panel_data_filter, $molecular_profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenePanelsApi->getGenePanelDataUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gene_panel_data_filter** | [**\Swagger\Client\Model\GenePanelDataFilter**](../Model/GenePanelDataFilter.md)| List of Sample IDs/Sample List ID and Entrez Gene IDs |
 **molecular_profile_id** | **string**| Molecular Profile ID e.g. nsclc_unito_2016_mutations |

### Return type

[**\Swagger\Client\Model\GenePanelData[]**](../Model/GenePanelData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGenePanelUsingGET**
> \Swagger\Client\Model\GenePanel getGenePanelUsingGET($gene_panel_id)

Get gene panel

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\GenePanelsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$gene_panel_id = "gene_panel_id_example"; // string | Gene Panel ID e.g. NSCLC_UNITO_2016_PANEL

try {
    $result = $apiInstance->getGenePanelUsingGET($gene_panel_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GenePanelsApi->getGenePanelUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gene_panel_id** | **string**| Gene Panel ID e.g. NSCLC_UNITO_2016_PANEL |

### Return type

[**\Swagger\Client\Model\GenePanel**](../Model/GenePanel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

