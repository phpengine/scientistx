<?php
/**
 * Gene
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * cBioPortal web Public API [Beta]
 *
 * A web service for supplying JSON formatted data to cBioPortal clients. Please note that this API is currently in beta and subject to change.
 *
 * OpenAPI spec version: 1.0
 * Contact: cbioportal@googlegroups.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.25
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
 * Gene Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Gene implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Gene';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entrez_gene_id' => 'int',
        'genetic_entity_id' => 'int',
        'hugo_gene_symbol' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entrez_gene_id' => 'int32',
        'genetic_entity_id' => 'int32',
        'hugo_gene_symbol' => null,
        'type' => null
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
        'entrez_gene_id' => 'entrezGeneId',
        'genetic_entity_id' => 'geneticEntityId',
        'hugo_gene_symbol' => 'hugoGeneSymbol',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entrez_gene_id' => 'setEntrezGeneId',
        'genetic_entity_id' => 'setGeneticEntityId',
        'hugo_gene_symbol' => 'setHugoGeneSymbol',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entrez_gene_id' => 'getEntrezGeneId',
        'genetic_entity_id' => 'getGeneticEntityId',
        'hugo_gene_symbol' => 'getHugoGeneSymbol',
        'type' => 'getType'
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
        $this->container['entrez_gene_id'] = isset($data['entrez_gene_id']) ? $data['entrez_gene_id'] : null;
        $this->container['genetic_entity_id'] = isset($data['genetic_entity_id']) ? $data['genetic_entity_id'] : null;
        $this->container['hugo_gene_symbol'] = isset($data['hugo_gene_symbol']) ? $data['hugo_gene_symbol'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['entrez_gene_id'] === null) {
            $invalidProperties[] = "'entrez_gene_id' can't be null";
        }
        if ($this->container['genetic_entity_id'] === null) {
            $invalidProperties[] = "'genetic_entity_id' can't be null";
        }
        if ($this->container['hugo_gene_symbol'] === null) {
            $invalidProperties[] = "'hugo_gene_symbol' can't be null";
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
     * Gets entrez_gene_id
     *
     * @return int
     */
    public function getEntrezGeneId()
    {
        return $this->container['entrez_gene_id'];
    }

    /**
     * Sets entrez_gene_id
     *
     * @param int $entrez_gene_id entrez_gene_id
     *
     * @return $this
     */
    public function setEntrezGeneId($entrez_gene_id)
    {
        $this->container['entrez_gene_id'] = $entrez_gene_id;

        return $this;
    }

    /**
     * Gets genetic_entity_id
     *
     * @return int
     */
    public function getGeneticEntityId()
    {
        return $this->container['genetic_entity_id'];
    }

    /**
     * Sets genetic_entity_id
     *
     * @param int $genetic_entity_id genetic_entity_id
     *
     * @return $this
     */
    public function setGeneticEntityId($genetic_entity_id)
    {
        $this->container['genetic_entity_id'] = $genetic_entity_id;

        return $this;
    }

    /**
     * Gets hugo_gene_symbol
     *
     * @return string
     */
    public function getHugoGeneSymbol()
    {
        return $this->container['hugo_gene_symbol'];
    }

    /**
     * Sets hugo_gene_symbol
     *
     * @param string $hugo_gene_symbol hugo_gene_symbol
     *
     * @return $this
     */
    public function setHugoGeneSymbol($hugo_gene_symbol)
    {
        $this->container['hugo_gene_symbol'] = $hugo_gene_symbol;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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

