# OpenAPI\Client\DocumentsApi

All URIs are relative to http://195.146.148.139/ONIX_API.

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsAddOrEditDocument()**](DocumentsApi.md#documentsAddOrEditDocument) | **POST** /api/v1/documents/{documentTypeId} | Pridá jeden doklad, do konkrétnej evidencie dokladov určenej podľa parametra documentTypeId. Dáta dokladu sa nachádzajú v \&quot;body\&quot; requestu.  V prípade, že pridávaný doklad už existuje vykoná sa akcia edit a prebehne aktualizácia údajov na hlavičke dokladu.   V prípade, že budú v dotaze odoslané aj položky tak všetky pôvodné sú zmazané a nahradené novými.
[**documentsAddOrEditDocuments()**](DocumentsApi.md#documentsAddOrEditDocuments) | **POST** /api/v1/documents/{documentTypeId}/list | Pridá viacero dokladov, do konkrétnej evidencie dokladov určenej podľa parametra documentTypeId. Dáta dokladov sa nachádzajú v \&quot;body\&quot; requestu.
[**documentsDeleteDocuments()**](DocumentsApi.md#documentsDeleteDocuments) | **DELETE** /api/v1/documents/{documentTypeId}/{nsNumber}/{nsCode}/{nsEvidCode} | Vymaže doklad. Doklad je určený na základe čísla, kódu číselného radu a kódu evidencie.
[**documentsGetDocuments()**](DocumentsApi.md#documentsGetDocuments) | **GET** /api/v1/documents/{documentTypeId} | Vracia zoznam všetkých dokumentov, z konkrétnej evidencie. Evidencia je určená na základe parametra documentTypeId.


## `documentsAddOrEditDocument()`

```php
documentsAddOrEditDocument($document_type_id, $database_path, $document): \OpenAPI\Client\Model\Result
```

Pridá jeden doklad, do konkrétnej evidencie dokladov určenej podľa parametra documentTypeId. Dáta dokladu sa nachádzajú v \"body\" requestu.  V prípade, že pridávaný doklad už existuje vykoná sa akcia edit a prebehne aktualizácia údajov na hlavičke dokladu.   V prípade, že budú v dotaze odoslané aj položky tak všetky pôvodné sú zmazané a nahradené novými.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_id = 56; // int | ID typu dokladu (evidencie) v obchodnom cykle.
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$document = new \OpenAPI\Client\Model\DtoDocumentPost(); // \OpenAPI\Client\Model\DtoDocumentPost | Dáta dokladu.

try {
    $result = $apiInstance->documentsAddOrEditDocument($document_type_id, $database_path, $document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsAddOrEditDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **int**| ID typu dokladu (evidencie) v obchodnom cykle. |
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **document** | [**\OpenAPI\Client\Model\DtoDocumentPost**](../Model/DtoDocumentPost.md)| Dáta dokladu. |

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

## `documentsAddOrEditDocuments()`

```php
documentsAddOrEditDocuments($document_type_id, $database_path, $documents): \OpenAPI\Client\Model\Result[]
```

Pridá viacero dokladov, do konkrétnej evidencie dokladov určenej podľa parametra documentTypeId. Dáta dokladov sa nachádzajú v \"body\" requestu.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_id = 56; // int | ID typu dokladu (evidencie) v obchodnom cykle.
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$documents = array(new \OpenAPI\Client\Model\DtoDocumentPost()); // \OpenAPI\Client\Model\DtoDocumentPost[] | Dáta dokladov.

try {
    $result = $apiInstance->documentsAddOrEditDocuments($document_type_id, $database_path, $documents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsAddOrEditDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **int**| ID typu dokladu (evidencie) v obchodnom cykle. |
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **documents** | [**\OpenAPI\Client\Model\DtoDocumentPost[]**](../Model/DtoDocumentPost.md)| Dáta dokladov. |

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

## `documentsDeleteDocuments()`

```php
documentsDeleteDocuments($document_type_id, $ns_number, $ns_code, $ns_evid_code, $database_path): \OpenAPI\Client\Model\Result
```

Vymaže doklad. Doklad je určený na základe čísla, kódu číselného radu a kódu evidencie.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_id = 56; // int | ID typu dokladu (evidencie) v obchodnom cykle.
$ns_number = 'ns_number_example'; // string | Číslo dokladu.
$ns_code = 'ns_code_example'; // string | Kód číselného radu.
$ns_evid_code = 'ns_evid_code_example'; // string | Kód evidencie.
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.

try {
    $result = $apiInstance->documentsDeleteDocuments($document_type_id, $ns_number, $ns_code, $ns_evid_code, $database_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsDeleteDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **int**| ID typu dokladu (evidencie) v obchodnom cykle. |
 **ns_number** | **string**| Číslo dokladu. |
 **ns_code** | **string**| Kód číselného radu. |
 **ns_evid_code** | **string**| Kód evidencie. |
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsGetDocuments()`

```php
documentsGetDocuments($document_type_id, $database_path, $tables, $partner_name, $ns_number, $select): \OpenAPI\Client\Model\DtoDocumentGet[]
```

Vracia zoznam všetkých dokumentov, z konkrétnej evidencie. Evidencia je určená na základe parametra documentTypeId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: Authorization
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type_id = 56; // int | ID typu dokladu (evidencie) v obchodnom cykle.
$database_path = 'database_path_example'; // string | Cesta ku zdrojovej ONIX databáze.
$tables = array('tables_example'); // string[] | Zoznam podtabuliek dokladu<br>ALL - všetky podtabuľky<br>DOCITEMS - položky<br>ENCLOSURES - prílohy
$partner_name = KROS a.s.; // string | Filter: Názov partnera   Ako filter je možné použiť, ktorékoľvek pole z modelu.
$ns_number = 220191825; // string | Filter: Číslo dokladu   Ako filter je možné použiť, ktorékoľvek pole z modelu.
$select = NazovPola1,NazovPodtabulky.NazovPola1; // string | Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola.

try {
    $result = $apiInstance->documentsGetDocuments($document_type_id, $database_path, $tables, $partner_name, $ns_number, $select);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->documentsGetDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type_id** | **int**| ID typu dokladu (evidencie) v obchodnom cykle. |
 **database_path** | **string**| Cesta ku zdrojovej ONIX databáze. |
 **tables** | [**string[]**](../Model/string.md)| Zoznam podtabuliek dokladu&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;DOCITEMS - položky&lt;br&gt;ENCLOSURES - prílohy | [optional]
 **partner_name** | **string**| Filter: Názov partnera   Ako filter je možné použiť, ktorékoľvek pole z modelu. | [optional]
 **ns_number** | **string**| Filter: Číslo dokladu   Ako filter je možné použiť, ktorékoľvek pole z modelu. | [optional]
 **select** | **string**| Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. | [optional]

### Return type

[**\OpenAPI\Client\Model\DtoDocumentGet[]**](../Model/DtoDocumentGet.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`, `application/xml`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
