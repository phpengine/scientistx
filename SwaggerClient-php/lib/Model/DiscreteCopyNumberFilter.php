<?php
/**
 * DiscreteCopyNumberFilter
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
 * DiscreteCopyNumberFilter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscreteCopyNumberFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DiscreteCopyNumberFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'entrez_gene_ids' => 'int[]',
        'sample_ids' => 'string[]',
        'sample_list_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'entrez_gene_ids' => 'int32',
        'sample_ids' => null,
        'sample_list_id' => null
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
        'entrez_gene_ids' => 'entrezGeneIds',
        'sample_ids' => 'sampleIds',
        'sample_list_id' => 'sampleListId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entrez_gene_ids' => 'setEntrezGeneIds',
        'sample_ids' => 'setSampleIds',
        'sample_list_id' => 'setSampleListId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entrez_gene_ids' => 'getEntrezGeneIds',
        'sample_ids' => 'getSampleIds',
        'sample_list_id' => 'getSampleListId'
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
        $this->container['entrez_gene_ids'] = isset($data['entrez_gene_ids']) ? $data['entrez_gene_ids'] : null;
        $this->container['sample_ids'] = isset($data['sample_ids']) ? $data['sample_ids'] : null;
        $this->container['sample_list_id'] = isset($data['sample_list_id']) ? $data['sample_list_id'] : null;
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
     * Gets entrez_gene_ids
     *
     * @return int[]
     */
    public function getEntrezGeneIds()
    {
        return $this->container['entrez_gene_ids'];
    }

    /**
     * Sets entrez_gene_ids
     *
     * @param int[] $entrez_gene_ids entrez_gene_ids
     *
     * @return $this
     */
    public function setEntrezGeneIds($entrez_gene_ids)
    {
        $this->container['entrez_gene_ids'] = $entrez_gene_ids;

        return $this;
    }

    /**
     * Gets sample_ids
     *
     * @return string[]
     */
    public function getSampleIds()
    {
        return $this->container['sample_ids'];
    }

    /**
     * Sets sample_ids
     *
     * @param string[] $sample_ids sample_ids
     *
     * @return $this
     */
    public function setSampleIds($sample_ids)
    {
        $this->container['sample_ids'] = $sample_ids;

        return $this;
    }

    /**
     * Gets sample_list_id
     *
     * @return string
     */
    public function getSampleListId()
    {
        return $this->container['sample_list_id'];
    }

    /**
     * Sets sample_list_id
     *
     * @param string $sample_list_id sample_list_id
     *
     * @return $this
     */
    public function setSampleListId($sample_list_id)
    {
        $this->container['sample_list_id'] = $sample_list_id;

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


