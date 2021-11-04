# OpenAPIClient-php

Dokumentácia ku Web API programu ONIX.
Pre testovanie s reálnymi dátami (dotazovanie servera) je potrebné zadať autorizačný token, ktorý Vám poskytla firma Kros a.s..
Pri každom dotaze je potrebné uviesť cestu ku databáze s dátami (taktiež poskytnutú firmou Kros a.s.).

For more information, please visit [http://onix.kros.sk/pluginy/web-api-dokumentacia/](http://onix.kros.sk/pluginy/web-api-dokumentacia/).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://195.146.148.139/ONIX_API*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DocumentsApi* | [**documentsAddOrEditDocument**](docs/Api/DocumentsApi.md#documentsaddoreditdocument) | **POST** /api/v1/documents/{documentTypeId} | Pridá jeden doklad, do konkrétnej evidencie dokladov určenej podľa parametra documentTypeId. Dáta dokladu sa nachádzajú v \&quot;body\&quot; requestu.  V prípade, že pridávaný doklad už existuje vykoná sa akcia edit a prebehne aktualizácia údajov na hlavičke dokladu.   V prípade, že budú v dotaze odoslané aj položky tak všetky pôvodné sú zmazané a nahradené novými.
*DocumentsApi* | [**documentsAddOrEditDocuments**](docs/Api/DocumentsApi.md#documentsaddoreditdocuments) | **POST** /api/v1/documents/{documentTypeId}/list | Pridá viacero dokladov, do konkrétnej evidencie dokladov určenej podľa parametra documentTypeId. Dáta dokladov sa nachádzajú v \&quot;body\&quot; requestu.
*DocumentsApi* | [**documentsDeleteDocuments**](docs/Api/DocumentsApi.md#documentsdeletedocuments) | **DELETE** /api/v1/documents/{documentTypeId}/{nsNumber}/{nsCode}/{nsEvidCode} | Vymaže doklad. Doklad je určený na základe čísla, kódu číselného radu a kódu evidencie.
*DocumentsApi* | [**documentsGetDocuments**](docs/Api/DocumentsApi.md#documentsgetdocuments) | **GET** /api/v1/documents/{documentTypeId} | Vracia zoznam všetkých dokumentov, z konkrétnej evidencie. Evidencia je určená na základe parametra documentTypeId.
*EnclosuresApi* | [**enclosuresGetEnclosure**](docs/Api/EnclosuresApi.md#enclosuresgetenclosure) | **GET** /api/v1/enclosures | Vracia prílohu podľa zadaného IdRecord.
*InternalAccountingApi* | [**internalAccountingGetIA**](docs/Api/InternalAccountingApi.md#internalaccountinggetia) | **GET** /api/v1/internalaccounting/{variant} | Zoznam hodnôt interného rozúčtovania
*PartnersApi* | [**partnersAddOrEditPartner**](docs/Api/PartnersApi.md#partnersaddoreditpartner) | **POST** /api/v1/partners | Pridá jedného partnera. Dáta partnera sa nachádzajú v \&quot;body\&quot; requestu.
*PartnersApi* | [**partnersAddOrEditPartners**](docs/Api/PartnersApi.md#partnersaddoreditpartners) | **POST** /api/v1/partners/list | Pridá viacero partnerov. Dáta partnerov sa nachádzajú v \&quot;body\&quot; requestu.
*PartnersApi* | [**partnersGetPartners**](docs/Api/PartnersApi.md#partnersgetpartners) | **GET** /api/v1/partners | Vracia zoznam všetkých partnerov.
*PricingListsApi* | [**pricingListsGetPartnersPricingLists**](docs/Api/PricingListsApi.md#pricinglistsgetpartnerspricinglists) | **GET** /api/v1/pricinglists/partnerprices | Vracia zoznam všetkých individuálnych cien partnerov.
*PricingListsApi* | [**pricingListsGetPartnersSIGroupPricingLists**](docs/Api/PricingListsApi.md#pricinglistsgetpartnerssigrouppricinglists) | **GET** /api/v1/pricinglists/partnerstockitemgroupprices | Vracia zoznam všetkých individuálnych cien partnerov za skupinu kariet.
*StockItemsApi* | [**stockItemsGetAllBalanceForBatchProperty**](docs/Api/StockItemsApi.md#stockitemsgetallbalanceforbatchproperty) | **GET** /api/v1/stockitems/propertyBalancesAll/{propertyNumber} | Vracia zostatky pre všetky skladové karty, na všetkých skladoch pre danú vlastnosť dávky.
*StockItemsApi* | [**stockItemsGetStockItemBalanceForBatchProperty**](docs/Api/StockItemsApi.md#stockitemsgetstockitembalanceforbatchproperty) | **GET** /api/v1/stockitems/propertyBalances/{stockItemId}/{stockId}/{propertyNumber} | Vracia zostatky skladovej karty, na konkrétnom sklade pre danú vlastnosť dávky.
*StockItemsApi* | [**stockItemsGetStockItems**](docs/Api/StockItemsApi.md#stockitemsgetstockitems) | **GET** /api/v1/stockitems | Vracia zoznam všetkých skladových kariet.
*StocksApi* | [**stocksGetStocks**](docs/Api/StocksApi.md#stocksgetstocks) | **GET** /api/v1/stocks | Vracia zoznam všetkých skladov.

## Models

- [CustomField](docs/Model/CustomField.md)
- [DtoDocumentEnclosure](docs/Model/DtoDocumentEnclosure.md)
- [DtoDocumentGet](docs/Model/DtoDocumentGet.md)
- [DtoDocumentItemGet](docs/Model/DtoDocumentItemGet.md)
- [DtoDocumentItemPost](docs/Model/DtoDocumentItemPost.md)
- [DtoDocumentPost](docs/Model/DtoDocumentPost.md)
- [DtoEnclosureData](docs/Model/DtoEnclosureData.md)
- [DtoInternalAccounting](docs/Model/DtoInternalAccounting.md)
- [DtoPartnerAddress](docs/Model/DtoPartnerAddress.md)
- [DtoPartnerBankAccount](docs/Model/DtoPartnerBankAccount.md)
- [DtoPartnerContact](docs/Model/DtoPartnerContact.md)
- [DtoPartnerContactData](docs/Model/DtoPartnerContactData.md)
- [DtoPartnerSIGroupPricingLists](docs/Model/DtoPartnerSIGroupPricingLists.md)
- [DtoPartnersGet](docs/Model/DtoPartnersGet.md)
- [DtoPartnersPost](docs/Model/DtoPartnersPost.md)
- [DtoPricingLists](docs/Model/DtoPricingLists.md)
- [DtoStockItemAndServiceAccessory](docs/Model/DtoStockItemAndServiceAccessory.md)
- [DtoStockItemAndServiceAlternative](docs/Model/DtoStockItemAndServiceAlternative.md)
- [DtoStockItemBalance](docs/Model/DtoStockItemBalance.md)
- [DtoStockItemCode](docs/Model/DtoStockItemCode.md)
- [DtoStockItemEnclosure](docs/Model/DtoStockItemEnclosure.md)
- [DtoStockItemGroup](docs/Model/DtoStockItemGroup.md)
- [DtoStockItemParam](docs/Model/DtoStockItemParam.md)
- [DtoStockItemPropBalance](docs/Model/DtoStockItemPropBalance.md)
- [DtoStockItems](docs/Model/DtoStockItems.md)
- [DtoStocks](docs/Model/DtoStocks.md)
- [Message](docs/Model/Message.md)
- [Result](docs/Model/Result.md)

## Authorization

### Authorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

servis.onix@kros.sk

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `V1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
