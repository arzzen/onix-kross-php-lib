# # DtoStocks

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_record** | **int** | ID záznamu | [optional]
**name** | **string** | Názov skladu. | [optional]
**code** | **string** | Kód skladu. | [optional]
**date_changed** | **\DateTime** | História - dátum zmeny skladu. | [optional]
**stock_type** | **int** | Typ skladu.   0 - Nedefinovaný,   1 - Tovarový,   2 - Materiálový,   3 - Dopravný,   4 - Colný,   5 - Konsignačný,   6 - Skupina skladov. | [optional]
**valuation_type** | **int** | Spôsob (legislatívneho) oceňovania skladových zásob.  0 - Nedefinovaný,   1 - Vážený aritmetický priemer,   2 - FIFO. | [optional]
**inactive** | **int** | Aktívnosť skladu.  -1 - Neaktívny,  0 - Aktívny. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
