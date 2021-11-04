# OpenAPI\Client\PricingListsApi

All URIs are relative to http://195.146.148.139/ONIX_API.

Method | HTTP request | Description
------------- | ------------- | -------------
[**pricingListsGetPartnersPricingLists()**](PricingListsApi.md#pricingListsGetPartnersPricingLists) | **GET** /api/v1/pricinglists/partnerprices | Vracia zoznam všetkých individuálnych cien partnerov.
[**pricingListsGetPartnersSIGroupPricingLists()**](PricingListsApi.md#pricingListsGetPartnersSIGroupPricingLists) | **GET** /api/v1/pricinglists/partnerstockitemgroupprices | Vracia zoznam všetkých individuálnych cien partnerov za skupinu kariet.


## `pricingListsGetPartnersPricingLists()`

```php
pricingListsGetPartnersPricingLists($database_path, $select): \OpenAPI\Client\Model\DtoPricingLists[]
```

Vracia zoznam všetkých individuálnych cien partnerov.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PricingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->pricingListsGetPartnersPricingLists($database_path, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingListsApi->pricingListsGetPartnersPricingLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoPricingLists[]**](../Model/DtoPricingLists.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pricingListsGetPartnersSIGroupPricingLists()`

```php
pricingListsGetPartnersSIGroupPricingLists($database_path, $select): \OpenAPI\Client\Model\DtoPartnerSIGroupPricingLists[]
```

Vracia zoznam všetkých individuálnych cien partnerov za skupinu kariet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PricingListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->pricingListsGetPartnersSIGroupPricingLists($database_path, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PricingListsApi->pricingListsGetPartnersSIGroupPricingLists: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoPartnerSIGroupPricingLists[]**](../Model/DtoPartnerSIGroupPricingLists.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
