<?php
/**
 * AiproductdataenhancerFillProductDataCheckResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  GeminiCommerce\AiProductDataEnhancer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * aiproductdataenhancer/service.proto
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: version not set
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace GeminiCommerce\AiProductDataEnhancer\Model;

use \ArrayAccess;
use \GeminiCommerce\AiProductDataEnhancer\ObjectSerializer;

/**
 * AiproductdataenhancerFillProductDataCheckResponse Class Doc Comment
 *
 * @category Class
 * @package  GeminiCommerce\AiProductDataEnhancer
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AiproductdataenhancerFillProductDataCheckResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    protected static $withAdditionalProperties = false;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'aiproductdataenhancerFillProductDataCheckResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_data_filled' => 'array<string,string>',
        'confidence_rate' => 'float',
        'completion_rate' => 'float',
        'status' => '\GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerJobStatus',
        'error' => '\GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerError'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_data_filled' => null,
        'confidence_rate' => 'float',
        'completion_rate' => 'float',
        'status' => null,
        'error' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product_data_filled' => false,
        'confidence_rate' => false,
        'completion_rate' => false,
        'status' => false,
        'error' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product_data_filled' => 'productDataFilled',
        'confidence_rate' => 'confidenceRate',
        'completion_rate' => 'completionRate',
        'status' => 'status',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_data_filled' => 'setProductDataFilled',
        'confidence_rate' => 'setConfidenceRate',
        'completion_rate' => 'setCompletionRate',
        'status' => 'setStatus',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_data_filled' => 'getProductDataFilled',
        'confidence_rate' => 'getConfidenceRate',
        'completion_rate' => 'getCompletionRate',
        'status' => 'getStatus',
        'error' => 'getError'
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
     * Associative array for storing additional properties
     *
     * @var mixed[]
     */
    protected $additionalProperties = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('product_data_filled', $data ?? [], null);
        $this->setIfExists('confidence_rate', $data ?? [], null);
        $this->setIfExists('completion_rate', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('error', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets product_data_filled
     *
     * @return array<string,string>|null
     */
    public function getProductDataFilled()
    {
        return $this->container['product_data_filled'];
    }

    /**
     * Sets product_data_filled
     *
     * @param array<string,string>|null $product_data_filled product_data_filled
     *
     * @return self
     */
    public function setProductDataFilled($product_data_filled)
    {
        if (is_null($product_data_filled)) {
            throw new \InvalidArgumentException('non-nullable product_data_filled cannot be null');
        }
        $this->container['product_data_filled'] = $product_data_filled;

        return $this;
    }

    /**
     * Gets confidence_rate
     *
     * @return float|null
     */
    public function getConfidenceRate()
    {
        return $this->container['confidence_rate'];
    }

    /**
     * Sets confidence_rate
     *
     * @param float|null $confidence_rate confidence_rate
     *
     * @return self
     */
    public function setConfidenceRate($confidence_rate)
    {
        if (is_null($confidence_rate)) {
            throw new \InvalidArgumentException('non-nullable confidence_rate cannot be null');
        }
        $this->container['confidence_rate'] = $confidence_rate;

        return $this;
    }

    /**
     * Gets completion_rate
     *
     * @return float|null
     */
    public function getCompletionRate()
    {
        return $this->container['completion_rate'];
    }

    /**
     * Sets completion_rate
     *
     * @param float|null $completion_rate completion_rate
     *
     * @return self
     */
    public function setCompletionRate($completion_rate)
    {
        if (is_null($completion_rate)) {
            throw new \InvalidArgumentException('non-nullable completion_rate cannot be null');
        }
        $this->container['completion_rate'] = $completion_rate;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerJobStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerJobStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerError|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerError|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        if (is_null($error)) {
            throw new \InvalidArgumentException('non-nullable error cannot be null');
        }
        $this->container['error'] = $error;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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

    public static function withAdditionalProperties(): bool
    {
        return self::$withAdditionalProperties;
    }


    public function setAdditionalProperty($name, $value)
    {
        throw new \InvalidArgumentException(
            sprintf(
                "This model cannot have additional properties"
            )
        );
    }

    public function getAdditionalProperty($name)
    {
        return $this->additionalProperties[$name];
    }

    public function hasAdditionalProperty($name): bool
    {
        return array_key_exists($name, $this->additionalProperties);
    }

    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
}


