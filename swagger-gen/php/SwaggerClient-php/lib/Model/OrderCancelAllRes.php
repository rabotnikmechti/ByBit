<?php
/**
 * OrderCancelAllRes
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bybit API
 *
 * ## REST API for the Bybit Exchange.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@bybit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * OrderCancelAllRes Class Doc Comment
 *
 * @category Class
 * @description Cancel all active orders response
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderCancelAllRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderCancelAllRes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cl_ord_id' => 'string',
        'user_id' => 'float',
        'side' => 'string',
        'order_type' => 'string',
        'price' => 'string',
        'qty' => 'string',
        'time_in_force' => 'string',
        'create_type' => 'string',
        'order_status' => 'string',
        'leaves_qty' => 'float',
        'leaves_value' => 'float',
        'created_at' => 'string',
        'updated_at' => 'string',
        'cross_status' => 'string',
        'cross_seq' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cl_ord_id' => null,
        'user_id' => 'int32',
        'side' => null,
        'order_type' => null,
        'price' => null,
        'qty' => null,
        'time_in_force' => null,
        'create_type' => null,
        'order_status' => null,
        'leaves_qty' => 'int32',
        'leaves_value' => 'int32',
        'created_at' => null,
        'updated_at' => null,
        'cross_status' => null,
        'cross_seq' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'cl_ord_id' => 'clOrdID',
        'user_id' => 'user_id',
        'side' => 'side',
        'order_type' => 'order_type',
        'price' => 'price',
        'qty' => 'qty',
        'time_in_force' => 'time_in_force',
        'create_type' => 'create_type',
        'order_status' => 'order_status',
        'leaves_qty' => 'leaves_qty',
        'leaves_value' => 'leaves_value',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'cross_status' => 'cross_status',
        'cross_seq' => 'cross_seq'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cl_ord_id' => 'setClOrdId',
        'user_id' => 'setUserId',
        'side' => 'setSide',
        'order_type' => 'setOrderType',
        'price' => 'setPrice',
        'qty' => 'setQty',
        'time_in_force' => 'setTimeInForce',
        'create_type' => 'setCreateType',
        'order_status' => 'setOrderStatus',
        'leaves_qty' => 'setLeavesQty',
        'leaves_value' => 'setLeavesValue',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'cross_status' => 'setCrossStatus',
        'cross_seq' => 'setCrossSeq'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cl_ord_id' => 'getClOrdId',
        'user_id' => 'getUserId',
        'side' => 'getSide',
        'order_type' => 'getOrderType',
        'price' => 'getPrice',
        'qty' => 'getQty',
        'time_in_force' => 'getTimeInForce',
        'create_type' => 'getCreateType',
        'order_status' => 'getOrderStatus',
        'leaves_qty' => 'getLeavesQty',
        'leaves_value' => 'getLeavesValue',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'cross_status' => 'getCrossStatus',
        'cross_seq' => 'getCrossSeq'
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
        return self::$swaggerModelName;
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
        $this->container['cl_ord_id'] = isset($data['cl_ord_id']) ? $data['cl_ord_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['time_in_force'] = isset($data['time_in_force']) ? $data['time_in_force'] : null;
        $this->container['create_type'] = isset($data['create_type']) ? $data['create_type'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['leaves_qty'] = isset($data['leaves_qty']) ? $data['leaves_qty'] : null;
        $this->container['leaves_value'] = isset($data['leaves_value']) ? $data['leaves_value'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['cross_status'] = isset($data['cross_status']) ? $data['cross_status'] : null;
        $this->container['cross_seq'] = isset($data['cross_seq']) ? $data['cross_seq'] : null;
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
     * Gets cl_ord_id
     *
     * @return string
     */
    public function getClOrdId()
    {
        return $this->container['cl_ord_id'];
    }

    /**
     * Sets cl_ord_id
     *
     * @param string $cl_ord_id cl_ord_id
     *
     * @return $this
     */
    public function setClOrdId($cl_ord_id)
    {
        $this->container['cl_ord_id'] = $cl_ord_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return float
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param float $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string $side side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets order_type
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type
     *
     * @param string $order_type order_type
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return string
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param string $qty qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets time_in_force
     *
     * @return string
     */
    public function getTimeInForce()
    {
        return $this->container['time_in_force'];
    }

    /**
     * Sets time_in_force
     *
     * @param string $time_in_force time_in_force
     *
     * @return $this
     */
    public function setTimeInForce($time_in_force)
    {
        $this->container['time_in_force'] = $time_in_force;

        return $this;
    }

    /**
     * Gets create_type
     *
     * @return string
     */
    public function getCreateType()
    {
        return $this->container['create_type'];
    }

    /**
     * Sets create_type
     *
     * @param string $create_type create_type
     *
     * @return $this
     */
    public function setCreateType($create_type)
    {
        $this->container['create_type'] = $create_type;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status order_status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets leaves_qty
     *
     * @return float
     */
    public function getLeavesQty()
    {
        return $this->container['leaves_qty'];
    }

    /**
     * Sets leaves_qty
     *
     * @param float $leaves_qty leaves_qty
     *
     * @return $this
     */
    public function setLeavesQty($leaves_qty)
    {
        $this->container['leaves_qty'] = $leaves_qty;

        return $this;
    }

    /**
     * Gets leaves_value
     *
     * @return float
     */
    public function getLeavesValue()
    {
        return $this->container['leaves_value'];
    }

    /**
     * Sets leaves_value
     *
     * @param float $leaves_value leaves_value
     *
     * @return $this
     */
    public function setLeavesValue($leaves_value)
    {
        $this->container['leaves_value'] = $leaves_value;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets cross_status
     *
     * @return string
     */
    public function getCrossStatus()
    {
        return $this->container['cross_status'];
    }

    /**
     * Sets cross_status
     *
     * @param string $cross_status cross_status
     *
     * @return $this
     */
    public function setCrossStatus($cross_status)
    {
        $this->container['cross_status'] = $cross_status;

        return $this;
    }

    /**
     * Gets cross_seq
     *
     * @return float
     */
    public function getCrossSeq()
    {
        return $this->container['cross_seq'];
    }

    /**
     * Sets cross_seq
     *
     * @param float $cross_seq cross_seq
     *
     * @return $this
     */
    public function setCrossSeq($cross_seq)
    {
        $this->container['cross_seq'] = $cross_seq;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

