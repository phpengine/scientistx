# Swagger\Client\StructuralVariantsApi

All URIs are relative to *https://www.cbioportal.org/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fetchStructuralVariantsUsingPOST**](StructuralVariantsApi.md#fetchStructuralVariantsUsingPOST) | **POST** /structural-variant/fetch | Fetch structural variants for entrezGeneIds and molecularProfileIds or sampleMolecularIdentifiers


# **fetchStructuralVariantsUsingPOST**
> \Swagger\Client\Model\StructuralVariant[] fetchStructuralVariantsUsingPOST($structural_variant_filter, $entrez_gene_ids, $molecular_profile_ids, $sample_molecular_identifiers_0_molecular_profile_id, $sample_molecular_identifiers_0_sample_id)

Fetch structural variants for entrezGeneIds and molecularProfileIds or sampleMolecularIdentifiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\StructuralVariantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$structural_variant_filter = new \Swagger\Client\Model\StructuralVariantFilter(); // \Swagger\Client\Model\StructuralVariantFilter | List of entrezGeneIds and molecularProfileIds or sampleMolecularIdentifiers
$entrez_gene_ids = array(56); // int[] | 
$molecular_profile_ids = array("molecular_profile_ids_example"); // string[] | 
$sample_molecular_identifiers_0_molecular_profile_id = "sample_molecular_identifiers_0_molecular_profile_id_example"; // string | 
$sample_molecular_identifiers_0_sample_id = "sample_molecular_identifiers_0_sample_id_example"; // string | 

try {
    $result = $apiInstance->fetchStructuralVariantsUsingPOST($structural_variant_filter, $entrez_gene_ids, $molecular_profile_ids, $sample_molecular_identifiers_0_molecular_profile_id, $sample_molecular_identifiers_0_sample_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StructuralVariantsApi->fetchStructuralVariantsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **structural_variant_filter** | [**\Swagger\Client\Model\StructuralVariantFilter**](../Model/StructuralVariantFilter.md)| List of entrezGeneIds and molecularProfileIds or sampleMolecularIdentifiers |
 **entrez_gene_ids** | [**int[]**](../Model/int.md)|  | [optional]
 **molecular_profile_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **sample_molecular_identifiers_0_molecular_profile_id** | **string**|  | [optional]
 **sample_molecular_identifiers_0_sample_id** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\StructuralVariant[]**](../Model/StructuralVariant.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

