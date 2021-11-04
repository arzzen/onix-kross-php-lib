# # DtoPartnersGet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id_record** | **int** | ID záznamu | [optional]
**addresses** | [**\OpenAPI\Client\Model\DtoPartnerAddress[]**](DtoPartnerAddress.md) | Zoznam adries partnera. | [optional] [readonly]
**bank_accounts** | [**\OpenAPI\Client\Model\DtoPartnerBankAccount[]**](DtoPartnerBankAccount.md) | Zoznam bankových účtov partnera. | [optional] [readonly]
**contacts** | [**\OpenAPI\Client\Model\DtoPartnerContact[]**](DtoPartnerContact.md) | Zoznam kontaktov partnera. | [optional] [readonly]
**name** | **string** | Názov partnera. | [optional]
**description** | **string** | Poznámka. | [optional]
**ns_number** | **string** | Číslo partnera. | [optional]
**reg** | **string** | IČO. | [optional]
**tax** | **string** | DIČ. | [optional]
**date_changed** | **\DateTime** | História - dátum zmeny partnera. | [optional]
**maturity_sendedinvoices** | **int** | Splatnosť odoslaných dokladov. | [optional]
**maturity_receivedinvoices** | **int** | Splatnosť prijatých dokladov. | [optional]
**center** | **string** | Stredisko. | [optional]
**department** | **string** | Prevádzka. | [optional]
**transport_type** | **string** | Spôsob dopravy. | [optional]
**payment_type** | **string** | Forma úhrady. | [optional]
**guid_ext** | **string** | Klúč záznamu v externom SW. | [optional]
**credit_settings** | **int** | Nastavenie fakturačného kreditu.  0 - Vypnuté,  1 - Povoliť - iba upozornenie,  2 - Zakázať - tvrdá validácia. | [optional]
**credit_value** | **double** | Suma fakturačného kreditu. | [optional]
**credit_unpayer** | **int** | Zakázať fakturáciu, ak je neplatič.  -1 - Zakázať,  0 - Povoliť. | [optional]
**partner_type** | **int** | Typ partnera na doklade.  Občan &#x3D; -2  Podnikateľ - fyzická osoba &#x3D; 1  Podnikateľ - právnická osoba &#x3D; 2  Ostatné &#x3D; 0 | [optional]
**vat_no** | **string** | IČ DPH. | [optional]
**custom_columns** | [**\OpenAPI\Client\Model\CustomField[]**](CustomField.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
