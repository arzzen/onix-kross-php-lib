# # DtoInternalAccounting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_record** | **int** | ID záznamu | [optional]
**variant** | **int** | Variant interného rozúčtovania | [optional]
**id_parent** | **int** | IdRecord nadradenej hodnoty v strome | [optional]
**tree_parents** | **string** | Strom - Zoznam predchodcov | [optional]
**tree_level** | **int** | Strom - Úroveň | [optional]
**ordinal** | **int** | Poradové číslo | [optional]
**name** | **string** | Názov (stĺpec je možné použiť na filtrovanie) | [optional]
**is_breakdown** | **int** | Interné rozúčtovanie je rozpis (-1 znamená, že ide o rozpis, 0 znamená, že nejde o rozpis) | [optional]
**code** | **string** | Kód interného rozúčtovania (stĺpec je možné použiť na filtrovanie) | [optional]
**ns_code** | **string** | Kód číselného radu (stĺpec je možné použiť na filtrovanie) | [optional]
**ns_evid_code** | **string** | Kód evidencie (stĺpec je možné použiť na filtrovanie) | [optional]
**ns_number** | **string** | Číslo (stĺpec je možné použiť na filtrovanie) | [optional]
**custom_columns** | [**\OpenAPI\Client\Model\CustomField[]**](CustomField.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
