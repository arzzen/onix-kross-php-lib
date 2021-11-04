# # Result

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**record_external_identificator** | **string** | Pomocné id importovaného záznamu. | [optional] [readonly]
**result** | **int** | Výsledok pridania záznamu  0 - Záznam bol pridaný  1 - Záznam bol pridaný s warningami  2 - Záznam bol pridaný s errormi  3 - Záznam nebol pridaný | [optional] [readonly]
**errors** | [**\OpenAPI\Client\Model\Message[]**](Message.md) | Zoznam chýb, kvôli ktorým sa nepodarilo uložiť/vymazať. | [optional] [readonly]
**warnings** | [**\OpenAPI\Client\Model\Message[]**](Message.md) | Zoznam upozornení.  Ak sa nepodarilo uložiť/vymazať, bude vždy prázdne. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
