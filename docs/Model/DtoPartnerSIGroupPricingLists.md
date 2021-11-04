# # DtoPartnerSIGroupPricingLists

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stock_item_group_id_record** | **int** | ID skupiny skladovej karty | [optional]
**stock_item_group_ns_number** | **string** | Číslo skupiny skladovej karty | [optional]
**stock_item_group_tree_level** | **int** | Určuje prioritu cenníka (čím vyššie číslo, tým vyššiu prioritu má cenník) | [optional]
**partner_id_record** | **int** | Id partnera | [optional]
**partner_ns_number** | **string** | Číslo partnera | [optional]
**partner_reg** | **string** | IČO partnera | [optional]
**calculation_type** | **int** | Spôsob výpočtu ceny  1 - Fixná cena  2 - Manažérska cena + marža  3 - Skladová cena + marža  4 - Cena z iného cenníka - zľava | [optional]
**calculation_type_pricing_list_id_record** | **int** | Id cenníka | [optional]
**calculation_type_pricing_list_code** | **string** | Kód cenníka | [optional]
**calculation_type_percentage** | **double** | Zľava alebo marža (%) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
