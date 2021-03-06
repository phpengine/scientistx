<?php
/**
 * Sample
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
 * Sample Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sample implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Sample';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'copy_number_segment_present' => 'bool',
        'patient_id' => 'string',
        'profiled_for_fusions' => 'bool',
        'sample_id' => 'string',
        'sample_type' => 'string',
        'sequenced' => 'bool',
        'study_id' => 'string',
        'unique_patient_key' => 'string',
        'unique_sample_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'copy_number_segment_present' => null,
        'patient_id' => null,
        'profiled_for_fusions' => null,
        'sample_id' => null,
        'sample_type' => null,
        'sequenced' => null,
        'study_id' => null,
        'unique_patient_key' => null,
        'unique_sample_key' => null
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
        'copy_number_segment_present' => 'copyNumberSegmentPresent',
        'patient_id' => 'patientId',
        'profiled_for_fusions' => 'profiledForFusions',
        'sample_id' => 'sampleId',
        'sample_type' => 'sampleType',
        'sequenced' => 'sequenced',
        'study_id' => 'studyId',
        'unique_patient_key' => 'uniquePatientKey',
        'unique_sample_key' => 'uniqueSampleKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'copy_number_segment_present' => 'setCopyNumberSegmentPresent',
        'patient_id' => 'setPatientId',
        'profiled_for_fusions' => 'setProfiledForFusions',
        'sample_id' => 'setSampleId',
        'sample_type' => 'setSampleType',
        'sequenced' => 'setSequenced',
        'study_id' => 'setStudyId',
        'unique_patient_key' => 'setUniquePatientKey',
        'unique_sample_key' => 'setUniqueSampleKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'copy_number_segment_present' => 'getCopyNumberSegmentPresent',
        'patient_id' => 'getPatientId',
        'profiled_for_fusions' => 'getProfiledForFusions',
        'sample_id' => 'getSampleId',
        'sample_type' => 'getSampleType',
        'sequenced' => 'getSequenced',
        'study_id' => 'getStudyId',
        'unique_patient_key' => 'getUniquePatientKey',
        'unique_sample_key' => 'getUniqueSampleKey'
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

    const SAMPLE_TYPE_PRIMARY_SOLID_TUMOR = 'Primary Solid Tumor';
    const SAMPLE_TYPE_RECURRENT_SOLID_TUMOR = 'Recurrent Solid Tumor';
    const SAMPLE_TYPE_PRIMARY_BLOOD_TUMOR = 'Primary Blood Tumor';
    const SAMPLE_TYPE_RECURRENT_BLOOD_TUMOR = 'Recurrent Blood Tumor';
    const SAMPLE_TYPE_METASTATIC = 'Metastatic';
    const SAMPLE_TYPE_BLOOD_DERIVED_NORMAL = 'Blood Derived Normal';
    const SAMPLE_TYPE_SOLID_TISSUES_NORMAL = 'Solid Tissues Normal';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSampleTypeAllowableValues()
    {
        return [
            self::SAMPLE_TYPE_PRIMARY_SOLID_TUMOR,
            self::SAMPLE_TYPE_RECURRENT_SOLID_TUMOR,
            self::SAMPLE_TYPE_PRIMARY_BLOOD_TUMOR,
            self::SAMPLE_TYPE_RECURRENT_BLOOD_TUMOR,
            self::SAMPLE_TYPE_METASTATIC,
            self::SAMPLE_TYPE_BLOOD_DERIVED_NORMAL,
            self::SAMPLE_TYPE_SOLID_TISSUES_NORMAL,
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
        $this->container['copy_number_segment_present'] = isset($data['copy_number_segment_present']) ? $data['copy_number_segment_present'] : null;
        $this->container['patient_id'] = isset($data['patient_id']) ? $data['patient_id'] : null;
        $this->container['profiled_for_fusions'] = isset($data['profiled_for_fusions']) ? $data['profiled_for_fusions'] : null;
        $this->container['sample_id'] = isset($data['sample_id']) ? $data['sample_id'] : null;
        $this->container['sample_type'] = isset($data['sample_type']) ? $data['sample_type'] : null;
        $this->container['sequenced'] = isset($data['sequenced']) ? $data['sequenced'] : null;
        $this->container['study_id'] = isset($data['study_id']) ? $data['study_id'] : null;
        $this->container['unique_patient_key'] = isset($data['unique_patient_key']) ? $data['unique_patient_key'] : null;
        $this->container['unique_sample_key'] = isset($data['unique_sample_key']) ? $data['unique_sample_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['patient_id'] === null) {
            $invalidProperties[] = "'patient_id' can't be null";
        }
        if ($this->container['sample_id'] === null) {
            $invalidProperties[] = "'sample_id' can't be null";
        }
        $allowedValues = $this->getSampleTypeAllowableValues();
        if (!is_null($this->container['sample_type']) && !in_array($this->container['sample_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sample_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['study_id'] === null) {
            $invalidProperties[] = "'study_id' can't be null";
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
     * Gets copy_number_segment_present
     *
     * @return bool
     */
    public function getCopyNumberSegmentPresent()
    {
        return $this->container['copy_number_segment_present'];
    }

    /**
     * Sets copy_number_segment_present
     *
     * @param bool $copy_number_segment_present copy_number_segment_present
     *
     * @return $this
     */
    public function setCopyNumberSegmentPresent($copy_number_segment_present)
    {
        $this->container['copy_number_segment_present'] = $copy_number_segment_present;

        return $this;
    }

    /**
     * Gets patient_id
     *
     * @return string
     */
    public function getPatientId()
    {
        return $this->container['patient_id'];
    }

    /**
     * Sets patient_id
     *
     * @param string $patient_id patient_id
     *
     * @return $this
     */
    public function setPatientId($patient_id)
    {
        $this->container['patient_id'] = $patient_id;

        return $this;
    }

    /**
     * Gets profiled_for_fusions
     *
     * @return bool
     */
    public function getProfiledForFusions()
    {
        return $this->container['profiled_for_fusions'];
    }

    /**
     * Sets profiled_for_fusions
     *
     * @param bool $profiled_for_fusions profiled_for_fusions
     *
     * @return $this
     */
    public function setProfiledForFusions($profiled_for_fusions)
    {
        $this->container['profiled_for_fusions'] = $profiled_for_fusions;

        return $this;
    }

    /**
     * Gets sample_id
     *
     * @return string
     */
    public function getSampleId()
    {
        return $this->container['sample_id'];
    }

    /**
     * Sets sample_id
     *
     * @param string $sample_id sample_id
     *
     * @return $this
     */
    public function setSampleId($sample_id)
    {
        $this->container['sample_id'] = $sample_id;

        return $this;
    }

    /**
     * Gets sample_type
     *
     * @return string
     */
    public function getSampleType()
    {
        return $this->container['sample_type'];
    }

    /**
     * Sets sample_type
     *
     * @param string $sample_type sample_type
     *
     * @return $this
     */
    public function setSampleType($sample_type)
    {
        $allowedValues = $this->getSampleTypeAllowableValues();
        if (!is_null($sample_type) && !in_array($sample_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sample_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sample_type'] = $sample_type;

        return $this;
    }

    /**
     * Gets sequenced
     *
     * @return bool
     */
    public function getSequenced()
    {
        return $this->container['sequenced'];
    }

    /**
     * Sets sequenced
     *
     * @param bool $sequenced sequenced
     *
     * @return $this
     */
    public function setSequenced($sequenced)
    {
        $this->container['sequenced'] = $sequenced;

        return $this;
    }

    /**
     * Gets study_id
     *
     * @return string
     */
    public function getStudyId()
    {
        return $this->container['study_id'];
    }

    /**
     * Sets study_id
     *
     * @param string $study_id study_id
     *
     * @return $this
     */
    public function setStudyId($study_id)
    {
        $this->container['study_id'] = $study_id;

        return $this;
    }

    /**
     * Gets unique_patient_key
     *
     * @return string
     */
    public function getUniquePatientKey()
    {
        return $this->container['unique_patient_key'];
    }

    /**
     * Sets unique_patient_key
     *
     * @param string $unique_patient_key unique_patient_key
     *
     * @return $this
     */
    public function setUniquePatientKey($unique_patient_key)
    {
        $this->container['unique_patient_key'] = $unique_patient_key;

        return $this;
    }

    /**
     * Gets unique_sample_key
     *
     * @return string
     */
    public function getUniqueSampleKey()
    {
        return $this->container['unique_sample_key'];
    }

    /**
     * Sets unique_sample_key
     *
     * @param string $unique_sample_key unique_sample_key
     *
     * @return $this
     */
    public function setUniqueSampleKey($unique_sample_key)
    {
        $this->container['unique_sample_key'] = $unique_sample_key;

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


