<?php
/**
 * DtoStocks
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
 * DtoStocks Class Doc Comment
 *
 * @category Class
 * @description DTO trieda pre sklad.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DtoStocks implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DtoStocks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_record' => 'int',
        'name' => 'string',
        'code' => 'string',
        'date_changed' => '\DateTime',
        'stock_type' => 'int',
        'valuation_type' => 'int',
        'inactive' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id_record' => 'int64',
        'name' => null,
        'code' => null,
        'date_changed' => 'date-time',
        'stock_type' => 'int32',
        'valuation_type' => 'int32',
        'inactive' => 'int32'
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
        'id_record' => 'IdRecord',
        'name' => 'Name',
        'code' => 'Code',
        'date_changed' => 'Date_Changed',
        'stock_type' => 'Stock_Type',
        'valuation_type' => 'Valuation_Type',
        'inactive' => 'Inactive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_record' => 'setIdRecord',
        'name' => 'setName',
        'code' => 'setCode',
        'date_changed' => 'setDateChanged',
        'stock_type' => 'setStockType',
        'valuation_type' => 'setValuationType',
        'inactive' => 'setInactive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_record' => 'getIdRecord',
        'name' => 'getName',
        'code' => 'getCode',
        'date_changed' => 'getDateChanged',
        'stock_type' => 'getStockType',
        'valuation_type' => 'getValuationType',
        'inactive' => 'getInactive'
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

    const STOCK_TYPE_0 = 0;
    const STOCK_TYPE_1 = 1;
    const STOCK_TYPE_2 = 2;
    const STOCK_TYPE_3 = 3;
    const STOCK_TYPE_4 = 4;
    const STOCK_TYPE_5 = 5;
    const STOCK_TYPE_6 = 6;
    const VALUATION_TYPE_0 = 0;
    const VALUATION_TYPE_1 = 1;
    const VALUATION_TYPE_2 = 2;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStockTypeAllowableValues()
    {
        return [
            self::STOCK_TYPE_0,
            self::STOCK_TYPE_1,
            self::STOCK_TYPE_2,
            self::STOCK_TYPE_3,
            self::STOCK_TYPE_4,
            self::STOCK_TYPE_5,
            self::STOCK_TYPE_6,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getValuationTypeAllowableValues()
    {
        return [
            self::VALUATION_TYPE_0,
            self::VALUATION_TYPE_1,
            self::VALUATION_TYPE_2,
        ];
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
        $this->container['id_record'] = $data['id_record'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['code'] = $data['code'] ?? null;
        $this->container['date_changed'] = $data['date_changed'] ?? null;
        $this->container['stock_type'] = $data['stock_type'] ?? null;
        $this->container['valuation_type'] = $data['valuation_type'] ?? null;
        $this->container['inactive'] = $data['inactive'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStockTypeAllowableValues();
        if (!is_null($this->container['stock_type']) && !in_array($this->container['stock_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'stock_type', must be one of '%s'",
                $this->container['stock_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getValuationTypeAllowableValues();
        if (!is_null($this->container['valuation_type']) && !in_array($this->container['valuation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'valuation_type', must be one of '%s'",
                $this->container['valuation_type'],
                implode("', '", $allowedValues)
            );
        }

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
     * Gets id_record
     *
     * @return int|null
     */
    public function getIdRecord()
    {
        return $this->container['id_record'];
    }

    /**
     * Sets id_record
     *
     * @param int|null $id_record ID záznamu
     *
     * @return self
     */
    public function setIdRecord($id_record)
    {
        $this->container['id_record'] = $id_record;

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
     * @param string|null $name Názov skladu.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Kód skladu.
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets date_changed
     *
     * @return \DateTime|null
     */
    public function getDateChanged()
    {
        return $this->container['date_changed'];
    }

    /**
     * Sets date_changed
     *
     * @param \DateTime|null $date_changed História - dátum zmeny skladu.
     *
     * @return self
     */
    public function setDateChanged($date_changed)
    {
        $this->container['date_changed'] = $date_changed;

        return $this;
    }

    /**
     * Gets stock_type
     *
     * @return int|null
     */
    public function getStockType()
    {
        return $this->container['stock_type'];
    }

    /**
     * Sets stock_type
     *
     * @param int|null $stock_type Typ skladu.   0 - Nedefinovaný,   1 - Tovarový,   2 - Materiálový,   3 - Dopravný,   4 - Colný,   5 - Konsignačný,   6 - Skupina skladov.
     *
     * @return self
     */
    public function setStockType($stock_type)
    {
        $allowedValues = $this->getStockTypeAllowableValues();
        if (!is_null($stock_type) && !in_array($stock_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'stock_type', must be one of '%s'",
                    $stock_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['stock_type'] = $stock_type;

        return $this;
    }

    /**
     * Gets valuation_type
     *
     * @return int|null
     */
    public function getValuationType()
    {
        return $this->container['valuation_type'];
    }

    /**
     * Sets valuation_type
     *
     * @param int|null $valuation_type Spôsob (legislatívneho) oceňovania skladových zásob.  0 - Nedefinovaný,   1 - Vážený aritmetický priemer,   2 - FIFO.
     *
     * @return self
     */
    public function setValuationType($valuation_type)
    {
        $allowedValues = $this->getValuationTypeAllowableValues();
        if (!is_null($valuation_type) && !in_array($valuation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'valuation_type', must be one of '%s'",
                    $valuation_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['valuation_type'] = $valuation_type;

        return $this;
    }

    /**
     * Gets inactive
     *
     * @return int|null
     */
    public function getInactive()
    {
        return $this->container['inactive'];
    }

    /**
     * Sets inactive
     *
     * @param int|null $inactive Aktívnosť skladu.  -1 - Neaktívny,  0 - Aktívny.
     *
     * @return self
     */
    public function setInactive($inactive)
    {
        $this->container['inactive'] = $inactive;

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


