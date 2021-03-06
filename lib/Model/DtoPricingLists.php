<?php
/**
 * DtoPricingLists
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
 * DtoPricingLists Class Doc Comment
 *
 * @category Class
 * @description DTO trieda pre cenníky
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DtoPricingLists implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DtoPricingLists';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'stock_item_id_record' => 'int',
        'stock_item_ns_number' => 'string',
        'partner_id_record' => 'int',
        'partner_ns_number' => 'string',
        'partner_reg' => 'string',
        'price' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'stock_item_id_record' => 'int64',
        'stock_item_ns_number' => null,
        'partner_id_record' => 'int64',
        'partner_ns_number' => null,
        'partner_reg' => null,
        'price' => 'double'
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
        'stock_item_id_record' => 'StockItem_IdRecord',
        'stock_item_ns_number' => 'StockItem_Ns_Number',
        'partner_id_record' => 'Partner_IdRecord',
        'partner_ns_number' => 'Partner_Ns_Number',
        'partner_reg' => 'Partner_Reg',
        'price' => 'Price'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stock_item_id_record' => 'setStockItemIdRecord',
        'stock_item_ns_number' => 'setStockItemNsNumber',
        'partner_id_record' => 'setPartnerIdRecord',
        'partner_ns_number' => 'setPartnerNsNumber',
        'partner_reg' => 'setPartnerReg',
        'price' => 'setPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stock_item_id_record' => 'getStockItemIdRecord',
        'stock_item_ns_number' => 'getStockItemNsNumber',
        'partner_id_record' => 'getPartnerIdRecord',
        'partner_ns_number' => 'getPartnerNsNumber',
        'partner_reg' => 'getPartnerReg',
        'price' => 'getPrice'
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
        $this->container['stock_item_id_record'] = $data['stock_item_id_record'] ?? null;
        $this->container['stock_item_ns_number'] = $data['stock_item_ns_number'] ?? null;
        $this->container['partner_id_record'] = $data['partner_id_record'] ?? null;
        $this->container['partner_ns_number'] = $data['partner_ns_number'] ?? null;
        $this->container['partner_reg'] = $data['partner_reg'] ?? null;
        $this->container['price'] = $data['price'] ?? null;
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
     * Gets stock_item_id_record
     *
     * @return int|null
     */
    public function getStockItemIdRecord()
    {
        return $this->container['stock_item_id_record'];
    }

    /**
     * Sets stock_item_id_record
     *
     * @param int|null $stock_item_id_record ID skladovej karty
     *
     * @return self
     */
    public function setStockItemIdRecord($stock_item_id_record)
    {
        $this->container['stock_item_id_record'] = $stock_item_id_record;

        return $this;
    }

    /**
     * Gets stock_item_ns_number
     *
     * @return string|null
     */
    public function getStockItemNsNumber()
    {
        return $this->container['stock_item_ns_number'];
    }

    /**
     * Sets stock_item_ns_number
     *
     * @param string|null $stock_item_ns_number Číslo skladovej karty
     *
     * @return self
     */
    public function setStockItemNsNumber($stock_item_ns_number)
    {
        $this->container['stock_item_ns_number'] = $stock_item_ns_number;

        return $this;
    }

    /**
     * Gets partner_id_record
     *
     * @return int|null
     */
    public function getPartnerIdRecord()
    {
        return $this->container['partner_id_record'];
    }

    /**
     * Sets partner_id_record
     *
     * @param int|null $partner_id_record ID partnera
     *
     * @return self
     */
    public function setPartnerIdRecord($partner_id_record)
    {
        $this->container['partner_id_record'] = $partner_id_record;

        return $this;
    }

    /**
     * Gets partner_ns_number
     *
     * @return string|null
     */
    public function getPartnerNsNumber()
    {
        return $this->container['partner_ns_number'];
    }

    /**
     * Sets partner_ns_number
     *
     * @param string|null $partner_ns_number Číslo partnera
     *
     * @return self
     */
    public function setPartnerNsNumber($partner_ns_number)
    {
        $this->container['partner_ns_number'] = $partner_ns_number;

        return $this;
    }

    /**
     * Gets partner_reg
     *
     * @return string|null
     */
    public function getPartnerReg()
    {
        return $this->container['partner_reg'];
    }

    /**
     * Sets partner_reg
     *
     * @param string|null $partner_reg IČO partnera
     *
     * @return self
     */
    public function setPartnerReg($partner_reg)
    {
        $this->container['partner_reg'] = $partner_reg;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double|null
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double|null $price Cena bez DPH
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

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


