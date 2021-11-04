# OpenAPI\Client\StockItemsApi

All URIs are relative to http://195.146.148.139/ONIX_API.

Method | HTTP request | Description
------------- | ------------- | -------------
[**stockItemsGetAllBalanceForBatchProperty()**](StockItemsApi.md#stockItemsGetAllBalanceForBatchProperty) | **GET** /api/v1/stockitems/propertyBalancesAll/{propertyNumber} | Vracia zostatky pre všetky skladové karty, na všetkých skladoch pre danú vlastnosť dávky.
[**stockItemsGetStockItemBalanceForBatchProperty()**](StockItemsApi.md#stockItemsGetStockItemBalanceForBatchProperty) | **GET** /api/v1/stockitems/propertyBalances/{stockItemId}/{stockId}/{propertyNumber} | Vracia zostatky skladovej karty, na konkrétnom sklade pre danú vlastnosť dávky.
[**stockItemsGetStockItems()**](StockItemsApi.md#stockItemsGetStockItems) | **GET** /api/v1/stockitems | Vracia zoznam všetkých skladových kariet.


## `stockItemsGetAllBalanceForBatchProperty()`

```php
stockItemsGetAllBalanceForBatchProperty($property_number, $database_path, $select): \OpenAPI\Client\Model\DtoStockItemPropBalance[]
```

Vracia zostatky pre všetky skladové karty, na všetkých skladoch pre danú vlastnosť dávky.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$property_number = 56; // int
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->stockItemsGetAllBalanceForBatchProperty($property_number, $database_path, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->stockItemsGetAllBalanceForBatchProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **property_number** | **int**|  |
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoStockItemPropBalance[]**](../Model/DtoStockItemPropBalance.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockItemsGetStockItemBalanceForBatchProperty()`

```php
stockItemsGetStockItemBalanceForBatchProperty($stock_item_id, $stock_id, $property_number, $database_path, $select): \OpenAPI\Client\Model\DtoStockItemPropBalance[]
```

Vracia zostatky skladovej karty, na konkrétnom sklade pre danú vlastnosť dávky.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stock_item_id = 56; // int
$stock_id = 56; // int
$property_number = 56; // int
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->stockItemsGetStockItemBalanceForBatchProperty($stock_item_id, $stock_id, $property_number, $database_path, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->stockItemsGetStockItemBalanceForBatchProperty: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stock_item_id** | **int**|  |
 **stock_id** | **int**|  |
 **property_number** | **int**|  |
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoStockItemPropBalance[]**](../Model/DtoStockItemPropBalance.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stockItemsGetStockItems()`

```php
stockItemsGetStockItems($database_path, $tables, $stock_code, $supplier_code, $select): \OpenAPI\Client\Model\DtoStockItems[]
```

Vracia zoznam všetkých skladových kariet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\StockItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$tables = array('tables_example'); // string[] | Zoznam podtabuliek skladovej karty<br>ALL - všetky podtabuľky<br>ACCESSORIES - príslušenstvo<br>ALTERNATIVES - alternatívy<br>ENCLOSURES - prílohy<br>GROUPS - skupiny<br>PARAMS - parametre<br>CODES - kódy
$stock_code = array('stock_code_example'); // string[] | Filter: Kód skladu   Ako filter je možné použiť, ktorékoľvek pole z modelu.
$supplier_code = array('supplier_code_example'); // string[] | Filter: Kód dodávateľa   Ako filter je možné použiť, ktorékoľvek pole z modelu.
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->stockItemsGetStockItems($database_path, $tables, $stock_code, $supplier_code, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockItemsApi->stockItemsGetStockItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **tables** | [**string[]**](../Model/string.md)| Zoznam podtabuliek skladovej karty&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;ACCESSORIES - príslušenstvo&lt;br&gt;ALTERNATIVES - alternatívy&lt;br&gt;ENCLOSURES - prílohy&lt;br&gt;GROUPS - skupiny&lt;br&gt;PARAMS - parametre&lt;br&gt;CODES - kódy | [optional]
 **stock_code** | [**string[]**](../Model/string.md)| Filter: Kód skladu   Ako filter je možné použiť, ktorékoľvek pole z modelu. | [optional]
 **supplier_code** | [**string[]**](../Model/string.md)| Filter: Kód dodávateľa   Ako filter je možné použiť, ktorékoľvek pole z modelu. | [optional]
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoStockItems[]**](../Model/DtoStockItems.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
