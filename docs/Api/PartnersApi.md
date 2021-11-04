# OpenAPI\Client\PartnersApi

All URIs are relative to http://195.146.148.139/ONIX_API.

Method | HTTP request | Description
------------- | ------------- | -------------
[**partnersAddOrEditPartner()**](PartnersApi.md#partnersAddOrEditPartner) | **POST** /api/v1/partners | Pridá jedného partnera. Dáta partnera sa nachádzajú v \&quot;body\&quot; requestu.
[**partnersAddOrEditPartners()**](PartnersApi.md#partnersAddOrEditPartners) | **POST** /api/v1/partners/list | Pridá viacero partnerov. Dáta partnerov sa nachádzajú v \&quot;body\&quot; requestu.
[**partnersGetPartners()**](PartnersApi.md#partnersGetPartners) | **GET** /api/v1/partners | Vracia zoznam všetkých partnerov.


## `partnersAddOrEditPartner()`

```php
partnersAddOrEditPartner($database_path, $partner): \OpenAPI\Client\Model\Result
```

Pridá jedného partnera. Dáta partnera sa nachádzajú v \"body\" requestu.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$partner = new \OpenAPI\Client\Model\DtoPartnersPost(); // \OpenAPI\Client\Model\DtoPartnersPost | Dáta partnera.

try {
    $result = $apiInstance->partnersAddOrEditPartner($database_path, $partner);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersAddOrEditPartner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **partner** | [**\OpenAPI\Client\Model\DtoPartnersPost**](../Model/DtoPartnersPost.md)| Dáta partnera. |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnersAddOrEditPartners()`

```php
partnersAddOrEditPartners($database_path, $partners): \OpenAPI\Client\Model\Result[]
```

Pridá viacero partnerov. Dáta partnerov sa nachádzajú v \"body\" requestu.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$partners = array(new \OpenAPI\Client\Model\DtoPartnersPost()); // \OpenAPI\Client\Model\DtoPartnersPost[] | Dáta partnerov.

try {
    $result = $apiInstance->partnersAddOrEditPartners($database_path, $partners);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersAddOrEditPartners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **partners** | [**\OpenAPI\Client\Model\DtoPartnersPost[]**](../Model/DtoPartnersPost.md)| Dáta partnerov. |

### Return type

[**\OpenAPI\Client\Model\Result[]**](../Model/Result.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`, `text/json`, `application/xml`, `text/xml`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partnersGetPartners()`

```php
partnersGetPartners($database_path, $tables, $select): \OpenAPI\Client\Model\DtoPartnersGet[]
```

Vracia zoznam všetkých partnerov.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$tables = array('tables_example'); // string[] | Zoznam podtabuliek partnera<br>ALL - všetky podtabuľky<br>ADDRESSES - adresy<br>BANKACCOUNTS - bankové účty<br>CONTACTS - kontakty
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->partnersGetPartners($database_path, $tables, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartnersApi->partnersGetPartners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **tables** | [**string[]**](../Model/string.md)| Zoznam podtabuliek partnera&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;ADDRESSES - adresy&lt;br&gt;BANKACCOUNTS - bankové účty&lt;br&gt;CONTACTS - kontakty | [optional]
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoPartnersGet[]**](../Model/DtoPartnersGet.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
