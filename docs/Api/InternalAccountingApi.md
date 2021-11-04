# OpenAPI\Client\InternalAccountingApi

All URIs are relative to http://195.146.148.139/ONIX_API.

Method | HTTP request | Description
------------- | ------------- | -------------
[**internalAccountingGetIA()**](InternalAccountingApi.md#internalAccountingGetIA) | **GET** /api/v1/internalaccounting/{variant} | Zoznam hodnôt interného rozúčtovania


## `internalAccountingGetIA()`

```php
internalAccountingGetIA($variant, $database_path, $select): \OpenAPI\Client\Model\DtoInternalAccounting[]
```

Zoznam hodnôt interného rozúčtovania

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\InternalAccountingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$variant = 56; // int | Typ interného rozúčtovania.(V rozmedzí 1 až 6)
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->internalAccountingGetIA($variant, $database_path, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InternalAccountingApi->internalAccountingGetIA: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **variant** | **int**| Typ interného rozúčtovania.(V rozmedzí 1 až 6) |
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoInternalAccounting[]**](../Model/DtoInternalAccounting.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
