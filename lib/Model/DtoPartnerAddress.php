<?php
/**
 * DtoPartnerAddress
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ONIX API
 *
 * Dokumentácia ku Web API programu ONIX.  Pre testovanie s reálnymi dátami (dotazovanie servera) je potrebné zadať autorizačný token, ktorý Vám poskytla firma Kros a.s..  Pri každom dotaze je potrebné uviesť cestu ku databáze s dátami (taktiež poskytnutú firmou Kros a.s.).
 *
 * The version of the OpenAPI document: V1
 * Contact: servis.onix@kros.sk
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DtoPartnerAddress Class Doc Comment
 *
 * @category Class
 * @description Adresa parnera
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DtoPartnerAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DtoPartnerAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address_type' => 'int',
        'name' => 'string',
        'street' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'is_postcard_address' => 'int',
        'is_delivery_address' => 'int',
        'is_default_for_type' => 'int',
        'street_no' => 'string',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address_type' => 'int32',
        'name' => null,
        'street' => null,
        'postcode' => null,
        'city' => null,
        'is_postcard_address' => 'int32',
        'is_delivery_address' => 'int32',
        'is_default_for_type' => 'int32',
        'street_no' => null,
        'state' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_type' => 'Address_Type',
        'name' => 'Name',
        'street' => 'Street',
        'postcode' => 'Postcode',
        'city' => 'City',
        'is_postcard_address' => 'Is_Postcard_Address',
        'is_delivery_address' => 'Is_Delivery_Address',
        'is_default_for_type' => 'Is_Default_For_Type',
        'street_no' => 'Street_No',
        'state' => 'State'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_type' => 'setAddressType',
        'name' => 'setName',
        'street' => 'setStreet',
        'postcode' => 'setPostcode',
        'city' => 'setCity',
        'is_postcard_address' => 'setIsPostcardAddress',
        'is_delivery_address' => 'setIsDeliveryAddress',
        'is_default_for_type' => 'setIsDefaultForType',
        'street_no' => 'setStreetNo',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_type' => 'getAddressType',
        'name' => 'getName',
        'street' => 'getStreet',
        'postcode' => 'getPostcode',
        'city' => 'getCity',
        'is_postcard_address' => 'getIsPostcardAddress',
        'is_delivery_address' => 'getIsDeliveryAddress',
        'is_default_for_type' => 'getIsDefaultForType',
        'street_no' => 'getStreetNo',
        'state' => 'getState'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address_type'] = $data['address_type'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['street'] = $data['street'] ?? null;
        $this->container['postcode'] = $data['postcode'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['is_postcard_address'] = $data['is_postcard_address'] ?? null;
        $this->container['is_delivery_address'] = $data['is_delivery_address'] ?? null;
        $this->container['is_default_for_type'] = $data['is_default_for_type'] ?? null;
        $this->container['street_no'] = $data['street_no'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets address_type
     *
     * @return int|null
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param int|null $address_type Typ adresy.  Sídlo firmy alebo trvalé bydlisko = 1  Prechodné bydlisko = 2  Fakturačná adresa = 3  Dodacia adresa = 4  Kontaktná adresa = 5  Korešpondenčná adresa = 6  Iba trvalé bydlisko = 7
     *
     * @return self
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Názov
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string|null $street Ulica
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string|null
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string|null $postcode PSČ
     *
     * @return self
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Mesto
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets is_postcard_address
     *
     * @return int|null
     */
    public function getIsPostcardAddress()
    {
        return $this->container['is_postcard_address'];
    }

    /**
     * Sets is_postcard_address
     *
     * @param int|null $is_postcard_address Korešpondenčná adresa.  Áno = -1  Nie = 0
     *
     * @return self
     */
    public function setIsPostcardAddress($is_postcard_address)
    {
        $this->container['is_postcard_address'] = $is_postcard_address;

        return $this;
    }

    /**
     * Gets is_delivery_address
     *
     * @return int|null
     */
    public function getIsDeliveryAddress()
    {
        return $this->container['is_delivery_address'];
    }

    /**
     * Sets is_delivery_address
     *
     * @param int|null $is_delivery_address Dodacia adresa.  Áno = -1  Nie = 0
     *
     * @return self
     */
    public function setIsDeliveryAddress($is_delivery_address)
    {
        $this->container['is_delivery_address'] = $is_delivery_address;

        return $this;
    }

    /**
     * Gets is_default_for_type
     *
     * @return int|null
     */
    public function getIsDefaultForType()
    {
        return $this->container['is_default_for_type'];
    }

    /**
     * Sets is_default_for_type
     *
     * @param int|null $is_default_for_type Predvolené pre daný typ.  Áno = -1  Nie = 0
     *
     * @return self
     */
    public function setIsDefaultForType($is_default_for_type)
    {
        $this->container['is_default_for_type'] = $is_default_for_type;

        return $this;
    }

    /**
     * Gets street_no
     *
     * @return string|null
     */
    public function getStreetNo()
    {
        return $this->container['street_no'];
    }

    /**
     * Sets street_no
     *
     * @param string|null $street_no Číslo ulice
     *
     * @return self
     */
    public function setStreetNo($street_no)
    {
        $this->container['street_no'] = $street_no;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Štát
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


