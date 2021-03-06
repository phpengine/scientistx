<?php
/**
 * AlterationFilter
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
 * AlterationFilter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AlterationFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AlterationFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'copy_number_alteration_event_types' => 'map[string,bool]',
        'include_driver' => 'bool',
        'include_germline' => 'bool',
        'include_somatic' => 'bool',
        'include_unknown_oncogenicity' => 'bool',
        'include_unknown_status' => 'bool',
        'include_unknown_tier' => 'bool',
        'include_vus' => 'bool',
        'mutation_event_types' => 'map[string,bool]',
        'structural_variants' => 'bool',
        'tiers_boolean_map' => 'map[string,bool]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'copy_number_alteration_event_types' => null,
        'include_driver' => null,
        'include_germline' => null,
        'include_somatic' => null,
        'include_unknown_oncogenicity' => null,
        'include_unknown_status' => null,
        'include_unknown_tier' => null,
        'include_vus' => null,
        'mutation_event_types' => null,
        'structural_variants' => null,
        'tiers_boolean_map' => null
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
        'copy_number_alteration_event_types' => 'copyNumberAlterationEventTypes',
        'include_driver' => 'includeDriver',
        'include_germline' => 'includeGermline',
        'include_somatic' => 'includeSomatic',
        'include_unknown_oncogenicity' => 'includeUnknownOncogenicity',
        'include_unknown_status' => 'includeUnknownStatus',
        'include_unknown_tier' => 'includeUnknownTier',
        'include_vus' => 'includeVUS',
        'mutation_event_types' => 'mutationEventTypes',
        'structural_variants' => 'structuralVariants',
        'tiers_boolean_map' => 'tiersBooleanMap'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'copy_number_alteration_event_types' => 'setCopyNumberAlterationEventTypes',
        'include_driver' => 'setIncludeDriver',
        'include_germline' => 'setIncludeGermline',
        'include_somatic' => 'setIncludeSomatic',
        'include_unknown_oncogenicity' => 'setIncludeUnknownOncogenicity',
        'include_unknown_status' => 'setIncludeUnknownStatus',
        'include_unknown_tier' => 'setIncludeUnknownTier',
        'include_vus' => 'setIncludeVus',
        'mutation_event_types' => 'setMutationEventTypes',
        'structural_variants' => 'setStructuralVariants',
        'tiers_boolean_map' => 'setTiersBooleanMap'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'copy_number_alteration_event_types' => 'getCopyNumberAlterationEventTypes',
        'include_driver' => 'getIncludeDriver',
        'include_germline' => 'getIncludeGermline',
        'include_somatic' => 'getIncludeSomatic',
        'include_unknown_oncogenicity' => 'getIncludeUnknownOncogenicity',
        'include_unknown_status' => 'getIncludeUnknownStatus',
        'include_unknown_tier' => 'getIncludeUnknownTier',
        'include_vus' => 'getIncludeVus',
        'mutation_event_types' => 'getMutationEventTypes',
        'structural_variants' => 'getStructuralVariants',
        'tiers_boolean_map' => 'getTiersBooleanMap'
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
        $this->container['copy_number_alteration_event_types'] = isset($data['copy_number_alteration_event_types']) ? $data['copy_number_alteration_event_types'] : null;
        $this->container['include_driver'] = isset($data['include_driver']) ? $data['include_driver'] : null;
        $this->container['include_germline'] = isset($data['include_germline']) ? $data['include_germline'] : null;
        $this->container['include_somatic'] = isset($data['include_somatic']) ? $data['include_somatic'] : null;
        $this->container['include_unknown_oncogenicity'] = isset($data['include_unknown_oncogenicity']) ? $data['include_unknown_oncogenicity'] : null;
        $this->container['include_unknown_status'] = isset($data['include_unknown_status']) ? $data['include_unknown_status'] : null;
        $this->container['include_unknown_tier'] = isset($data['include_unknown_tier']) ? $data['include_unknown_tier'] : null;
        $this->container['include_vus'] = isset($data['include_vus']) ? $data['include_vus'] : null;
        $this->container['mutation_event_types'] = isset($data['mutation_event_types']) ? $data['mutation_event_types'] : null;
        $this->container['structural_variants'] = isset($data['structural_variants']) ? $data['structural_variants'] : null;
        $this->container['tiers_boolean_map'] = isset($data['tiers_boolean_map']) ? $data['tiers_boolean_map'] : null;
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
     * Gets copy_number_alteration_event_types
     *
     * @return map[string,bool]
     */
    public function getCopyNumberAlterationEventTypes()
    {
        return $this->container['copy_number_alteration_event_types'];
    }

    /**
     * Sets copy_number_alteration_event_types
     *
     * @param map[string,bool] $copy_number_alteration_event_types copy_number_alteration_event_types
     *
     * @return $this
     */
    public function setCopyNumberAlterationEventTypes($copy_number_alteration_event_types)
    {
        $this->container['copy_number_alteration_event_types'] = $copy_number_alteration_event_types;

        return $this;
    }

    /**
     * Gets include_driver
     *
     * @return bool
     */
    public function getIncludeDriver()
    {
        return $this->container['include_driver'];
    }

    /**
     * Sets include_driver
     *
     * @param bool $include_driver include_driver
     *
     * @return $this
     */
    public function setIncludeDriver($include_driver)
    {
        $this->container['include_driver'] = $include_driver;

        return $this;
    }

    /**
     * Gets include_germline
     *
     * @return bool
     */
    public function getIncludeGermline()
    {
        return $this->container['include_germline'];
    }

    /**
     * Sets include_germline
     *
     * @param bool $include_germline include_germline
     *
     * @return $this
     */
    public function setIncludeGermline($include_germline)
    {
        $this->container['include_germline'] = $include_germline;

        return $this;
    }

    /**
     * Gets include_somatic
     *
     * @return bool
     */
    public function getIncludeSomatic()
    {
        return $this->container['include_somatic'];
    }

    /**
     * Sets include_somatic
     *
     * @param bool $include_somatic include_somatic
     *
     * @return $this
     */
    public function setIncludeSomatic($include_somatic)
    {
        $this->container['include_somatic'] = $include_somatic;

        return $this;
    }

    /**
     * Gets include_unknown_oncogenicity
     *
     * @return bool
     */
    public function getIncludeUnknownOncogenicity()
    {
        return $this->container['include_unknown_oncogenicity'];
    }

    /**
     * Sets include_unknown_oncogenicity
     *
     * @param bool $include_unknown_oncogenicity include_unknown_oncogenicity
     *
     * @return $this
     */
    public function setIncludeUnknownOncogenicity($include_unknown_oncogenicity)
    {
        $this->container['include_unknown_oncogenicity'] = $include_unknown_oncogenicity;

        return $this;
    }

    /**
     * Gets include_unknown_status
     *
     * @return bool
     */
    public function getIncludeUnknownStatus()
    {
        return $this->container['include_unknown_status'];
    }

    /**
     * Sets include_unknown_status
     *
     * @param bool $include_unknown_status include_unknown_status
     *
     * @return $this
     */
    public function setIncludeUnknownStatus($include_unknown_status)
    {
        $this->container['include_unknown_status'] = $include_unknown_status;

        return $this;
    }

    /**
     * Gets include_unknown_tier
     *
     * @return bool
     */
    public function getIncludeUnknownTier()
    {
        return $this->container['include_unknown_tier'];
    }

    /**
     * Sets include_unknown_tier
     *
     * @param bool $include_unknown_tier include_unknown_tier
     *
     * @return $this
     */
    public function setIncludeUnknownTier($include_unknown_tier)
    {
        $this->container['include_unknown_tier'] = $include_unknown_tier;

        return $this;
    }

    /**
     * Gets include_vus
     *
     * @return bool
     */
    public function getIncludeVus()
    {
        return $this->container['include_vus'];
    }

    /**
     * Sets include_vus
     *
     * @param bool $include_vus include_vus
     *
     * @return $this
     */
    public function setIncludeVus($include_vus)
    {
        $this->container['include_vus'] = $include_vus;

        return $this;
    }

    /**
     * Gets mutation_event_types
     *
     * @return map[string,bool]
     */
    public function getMutationEventTypes()
    {
        return $this->container['mutation_event_types'];
    }

    /**
     * Sets mutation_event_types
     *
     * @param map[string,bool] $mutation_event_types mutation_event_types
     *
     * @return $this
     */
    public function setMutationEventTypes($mutation_event_types)
    {
        $this->container['mutation_event_types'] = $mutation_event_types;

        return $this;
    }

    /**
     * Gets structural_variants
     *
     * @return bool
     */
    public function getStructuralVariants()
    {
        return $this->container['structural_variants'];
    }

    /**
     * Sets structural_variants
     *
     * @param bool $structural_variants structural_variants
     *
     * @return $this
     */
    public function setStructuralVariants($structural_variants)
    {
        $this->container['structural_variants'] = $structural_variants;

        return $this;
    }

    /**
     * Gets tiers_boolean_map
     *
     * @return map[string,bool]
     */
    public function getTiersBooleanMap()
    {
        return $this->container['tiers_boolean_map'];
    }

    /**
     * Sets tiers_boolean_map
     *
     * @param map[string,bool] $tiers_boolean_map tiers_boolean_map
     *
     * @return $this
     */
    public function setTiersBooleanMap($tiers_boolean_map)
    {
        $this->container['tiers_boolean_map'] = $tiers_boolean_map;

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


