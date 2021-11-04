# # DtoPartnerAddress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_type** | **int** | Typ adresy.  Sídlo firmy alebo trvalé bydlisko &#x3D; 1  Prechodné bydlisko &#x3D; 2  Fakturačná adresa &#x3D; 3  Dodacia adresa &#x3D; 4  Kontaktná adresa &#x3D; 5  Korešpondenčná adresa &#x3D; 6  Iba trvalé bydlisko &#x3D; 7 | [optional]
**name** | **string** | Názov | [optional]
**street** | **string** | Ulica | [optional]
**postcode** | **string** | PSČ | [optional]
**city** | **string** | Mesto | [optional]
**is_postcard_address** | **int** | Korešpondenčná adresa.  Áno &#x3D; -1  Nie &#x3D; 0 | [optional]
**is_delivery_address** | **int** | Dodacia adresa.  Áno &#x3D; -1  Nie &#x3D; 0 | [optional]
**is_default_for_type** | **int** | Predvolené pre daný typ.  Áno &#x3D; -1  Nie &#x3D; 0 | [optional]
**street_no** | **string** | Číslo ulice | [optional]
**state** | **string** | Štát | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
