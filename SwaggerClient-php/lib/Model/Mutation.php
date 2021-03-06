<?php
/**
 * Mutation
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
 * Mutation Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Mutation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Mutation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allele_specific_copy_number' => '\Swagger\Client\Model\AlleleSpecificCopyNumber',
        'amino_acid_change' => 'string',
        'center' => 'string',
        'chr' => 'string',
        'driver_filter' => 'string',
        'driver_filter_annotation' => 'string',
        'driver_tiers_filter' => 'string',
        'driver_tiers_filter_annotation' => 'string',
        'end_position' => 'int',
        'entrez_gene_id' => 'int',
        'fis_value' => 'float',
        'functional_impact_score' => 'string',
        'gene' => '\Swagger\Client\Model\Gene',
        'keyword' => 'string',
        'link_msa' => 'string',
        'link_pdb' => 'string',
        'link_xvar' => 'string',
        'molecular_profile_id' => 'string',
        'mutation_status' => 'string',
        'mutation_type' => 'string',
        'namespace_columns' => 'map[string,object]',
        'ncbi_build' => 'string',
        'normal_alt_count' => 'int',
        'normal_ref_count' => 'int',
        'patient_id' => 'string',
        'protein_change' => 'string',
        'protein_pos_end' => 'int',
        'protein_pos_start' => 'int',
        'reference_allele' => 'string',
        'refseq_mrna_id' => 'string',
        'sample_id' => 'string',
        'start_position' => 'int',
        'study_id' => 'string',
        'tumor_alt_count' => 'int',
        'tumor_ref_count' => 'int',
        'unique_patient_key' => 'string',
        'unique_sample_key' => 'string',
        'validation_status' => 'string',
        'variant_allele' => 'string',
        'variant_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allele_specific_copy_number' => null,
        'amino_acid_change' => null,
        'center' => null,
        'chr' => null,
        'driver_filter' => null,
        'driver_filter_annotation' => null,
        'driver_tiers_filter' => null,
        'driver_tiers_filter_annotation' => null,
        'end_position' => 'int64',
        'entrez_gene_id' => 'int32',
        'fis_value' => null,
        'functional_impact_score' => null,
        'gene' => null,
        'keyword' => null,
        'link_msa' => null,
        'link_pdb' => null,
        'link_xvar' => null,
        'molecular_profile_id' => null,
        'mutation_status' => null,
        'mutation_type' => null,
        'namespace_columns' => null,
        'ncbi_build' => null,
        'normal_alt_count' => 'int32',
        'normal_ref_count' => 'int32',
        'patient_id' => null,
        'protein_change' => null,
        'protein_pos_end' => 'int32',
        'protein_pos_start' => 'int32',
        'reference_allele' => null,
        'refseq_mrna_id' => null,
        'sample_id' => null,
        'start_position' => 'int64',
        'study_id' => null,
        'tumor_alt_count' => 'int32',
        'tumor_ref_count' => 'int32',
        'unique_patient_key' => null,
        'unique_sample_key' => null,
        'validation_status' => null,
        'variant_allele' => null,
        'variant_type' => null
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
        'allele_specific_copy_number' => 'alleleSpecificCopyNumber',
        'amino_acid_change' => 'aminoAcidChange',
        'center' => 'center',
        'chr' => 'chr',
        'driver_filter' => 'driverFilter',
        'driver_filter_annotation' => 'driverFilterAnnotation',
        'driver_tiers_filter' => 'driverTiersFilter',
        'driver_tiers_filter_annotation' => 'driverTiersFilterAnnotation',
        'end_position' => 'endPosition',
        'entrez_gene_id' => 'entrezGeneId',
        'fis_value' => 'fisValue',
        'functional_impact_score' => 'functionalImpactScore',
        'gene' => 'gene',
        'keyword' => 'keyword',
        'link_msa' => 'linkMsa',
        'link_pdb' => 'linkPdb',
        'link_xvar' => 'linkXvar',
        'molecular_profile_id' => 'molecularProfileId',
        'mutation_status' => 'mutationStatus',
        'mutation_type' => 'mutationType',
        'namespace_columns' => 'namespaceColumns',
        'ncbi_build' => 'ncbiBuild',
        'normal_alt_count' => 'normalAltCount',
        'normal_ref_count' => 'normalRefCount',
        'patient_id' => 'patientId',
        'protein_change' => 'proteinChange',
        'protein_pos_end' => 'proteinPosEnd',
        'protein_pos_start' => 'proteinPosStart',
        'reference_allele' => 'referenceAllele',
        'refseq_mrna_id' => 'refseqMrnaId',
        'sample_id' => 'sampleId',
        'start_position' => 'startPosition',
        'study_id' => 'studyId',
        'tumor_alt_count' => 'tumorAltCount',
        'tumor_ref_count' => 'tumorRefCount',
        'unique_patient_key' => 'uniquePatientKey',
        'unique_sample_key' => 'uniqueSampleKey',
        'validation_status' => 'validationStatus',
        'variant_allele' => 'variantAllele',
        'variant_type' => 'variantType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allele_specific_copy_number' => 'setAlleleSpecificCopyNumber',
        'amino_acid_change' => 'setAminoAcidChange',
        'center' => 'setCenter',
        'chr' => 'setChr',
        'driver_filter' => 'setDriverFilter',
        'driver_filter_annotation' => 'setDriverFilterAnnotation',
        'driver_tiers_filter' => 'setDriverTiersFilter',
        'driver_tiers_filter_annotation' => 'setDriverTiersFilterAnnotation',
        'end_position' => 'setEndPosition',
        'entrez_gene_id' => 'setEntrezGeneId',
        'fis_value' => 'setFisValue',
        'functional_impact_score' => 'setFunctionalImpactScore',
        'gene' => 'setGene',
        'keyword' => 'setKeyword',
        'link_msa' => 'setLinkMsa',
        'link_pdb' => 'setLinkPdb',
        'link_xvar' => 'setLinkXvar',
        'molecular_profile_id' => 'setMolecularProfileId',
        'mutation_status' => 'setMutationStatus',
        'mutation_type' => 'setMutationType',
        'namespace_columns' => 'setNamespaceColumns',
        'ncbi_build' => 'setNcbiBuild',
        'normal_alt_count' => 'setNormalAltCount',
        'normal_ref_count' => 'setNormalRefCount',
        'patient_id' => 'setPatientId',
        'protein_change' => 'setProteinChange',
        'protein_pos_end' => 'setProteinPosEnd',
        'protein_pos_start' => 'setProteinPosStart',
        'reference_allele' => 'setReferenceAllele',
        'refseq_mrna_id' => 'setRefseqMrnaId',
        'sample_id' => 'setSampleId',
        'start_position' => 'setStartPosition',
        'study_id' => 'setStudyId',
        'tumor_alt_count' => 'setTumorAltCount',
        'tumor_ref_count' => 'setTumorRefCount',
        'unique_patient_key' => 'setUniquePatientKey',
        'unique_sample_key' => 'setUniqueSampleKey',
        'validation_status' => 'setValidationStatus',
        'variant_allele' => 'setVariantAllele',
        'variant_type' => 'setVariantType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allele_specific_copy_number' => 'getAlleleSpecificCopyNumber',
        'amino_acid_change' => 'getAminoAcidChange',
        'center' => 'getCenter',
        'chr' => 'getChr',
        'driver_filter' => 'getDriverFilter',
        'driver_filter_annotation' => 'getDriverFilterAnnotation',
        'driver_tiers_filter' => 'getDriverTiersFilter',
        'driver_tiers_filter_annotation' => 'getDriverTiersFilterAnnotation',
        'end_position' => 'getEndPosition',
        'entrez_gene_id' => 'getEntrezGeneId',
        'fis_value' => 'getFisValue',
        'functional_impact_score' => 'getFunctionalImpactScore',
        'gene' => 'getGene',
        'keyword' => 'getKeyword',
        'link_msa' => 'getLinkMsa',
        'link_pdb' => 'getLinkPdb',
        'link_xvar' => 'getLinkXvar',
        'molecular_profile_id' => 'getMolecularProfileId',
        'mutation_status' => 'getMutationStatus',
        'mutation_type' => 'getMutationType',
        'namespace_columns' => 'getNamespaceColumns',
        'ncbi_build' => 'getNcbiBuild',
        'normal_alt_count' => 'getNormalAltCount',
        'normal_ref_count' => 'getNormalRefCount',
        'patient_id' => 'getPatientId',
        'protein_change' => 'getProteinChange',
        'protein_pos_end' => 'getProteinPosEnd',
        'protein_pos_start' => 'getProteinPosStart',
        'reference_allele' => 'getReferenceAllele',
        'refseq_mrna_id' => 'getRefseqMrnaId',
        'sample_id' => 'getSampleId',
        'start_position' => 'getStartPosition',
        'study_id' => 'getStudyId',
        'tumor_alt_count' => 'getTumorAltCount',
        'tumor_ref_count' => 'getTumorRefCount',
        'unique_patient_key' => 'getUniquePatientKey',
        'unique_sample_key' => 'getUniqueSampleKey',
        'validation_status' => 'getValidationStatus',
        'variant_allele' => 'getVariantAllele',
        'variant_type' => 'getVariantType'
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
        $this->container['allele_specific_copy_number'] = isset($data['allele_specific_copy_number']) ? $data['allele_specific_copy_number'] : null;
        $this->container['amino_acid_change'] = isset($data['amino_acid_change']) ? $data['amino_acid_change'] : null;
        $this->container['center'] = isset($data['center']) ? $data['center'] : null;
        $this->container['chr'] = isset($data['chr']) ? $data['chr'] : null;
        $this->container['driver_filter'] = isset($data['driver_filter']) ? $data['driver_filter'] : null;
        $this->container['driver_filter_annotation'] = isset($data['driver_filter_annotation']) ? $data['driver_filter_annotation'] : null;
        $this->container['driver_tiers_filter'] = isset($data['driver_tiers_filter']) ? $data['driver_tiers_filter'] : null;
        $this->container['driver_tiers_filter_annotation'] = isset($data['driver_tiers_filter_annotation']) ? $data['driver_tiers_filter_annotation'] : null;
        $this->container['end_position'] = isset($data['end_position']) ? $data['end_position'] : null;
        $this->container['entrez_gene_id'] = isset($data['entrez_gene_id']) ? $data['entrez_gene_id'] : null;
        $this->container['fis_value'] = isset($data['fis_value']) ? $data['fis_value'] : null;
        $this->container['functional_impact_score'] = isset($data['functional_impact_score']) ? $data['functional_impact_score'] : null;
        $this->container['gene'] = isset($data['gene']) ? $data['gene'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['link_msa'] = isset($data['link_msa']) ? $data['link_msa'] : null;
        $this->container['link_pdb'] = isset($data['link_pdb']) ? $data['link_pdb'] : null;
        $this->container['link_xvar'] = isset($data['link_xvar']) ? $data['link_xvar'] : null;
        $this->container['molecular_profile_id'] = isset($data['molecular_profile_id']) ? $data['molecular_profile_id'] : null;
        $this->container['mutation_status'] = isset($data['mutation_status']) ? $data['mutation_status'] : null;
        $this->container['mutation_type'] = isset($data['mutation_type']) ? $data['mutation_type'] : null;
        $this->container['namespace_columns'] = isset($data['namespace_columns']) ? $data['namespace_columns'] : null;
        $this->container['ncbi_build'] = isset($data['ncbi_build']) ? $data['ncbi_build'] : null;
        $this->container['normal_alt_count'] = isset($data['normal_alt_count']) ? $data['normal_alt_count'] : null;
        $this->container['normal_ref_count'] = isset($data['normal_ref_count']) ? $data['normal_ref_count'] : null;
        $this->container['patient_id'] = isset($data['patient_id']) ? $data['patient_id'] : null;
        $this->container['protein_change'] = isset($data['protein_change']) ? $data['protein_change'] : null;
        $this->container['protein_pos_end'] = isset($data['protein_pos_end']) ? $data['protein_pos_end'] : null;
        $this->container['protein_pos_start'] = isset($data['protein_pos_start']) ? $data['protein_pos_start'] : null;
        $this->container['reference_allele'] = isset($data['reference_allele']) ? $data['reference_allele'] : null;
        $this->container['refseq_mrna_id'] = isset($data['refseq_mrna_id']) ? $data['refseq_mrna_id'] : null;
        $this->container['sample_id'] = isset($data['sample_id']) ? $data['sample_id'] : null;
        $this->container['start_position'] = isset($data['start_position']) ? $data['start_position'] : null;
        $this->container['study_id'] = isset($data['study_id']) ? $data['study_id'] : null;
        $this->container['tumor_alt_count'] = isset($data['tumor_alt_count']) ? $data['tumor_alt_count'] : null;
        $this->container['tumor_ref_count'] = isset($data['tumor_ref_count']) ? $data['tumor_ref_count'] : null;
        $this->container['unique_patient_key'] = isset($data['unique_patient_key']) ? $data['unique_patient_key'] : null;
        $this->container['unique_sample_key'] = isset($data['unique_sample_key']) ? $data['unique_sample_key'] : null;
        $this->container['validation_status'] = isset($data['validation_status']) ? $data['validation_status'] : null;
        $this->container['variant_allele'] = isset($data['variant_allele']) ? $data['variant_allele'] : null;
        $this->container['variant_type'] = isset($data['variant_type']) ? $data['variant_type'] : null;
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
        if ($this->container['molecular_profile_id'] === null) {
            $invalidProperties[] = "'molecular_profile_id' can't be null";
        }
        if ($this->container['patient_id'] === null) {
            $invalidProperties[] = "'patient_id' can't be null";
        }
        if ($this->container['sample_id'] === null) {
            $invalidProperties[] = "'sample_id' can't be null";
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
     * Gets allele_specific_copy_number
     *
     * @return \Swagger\Client\Model\AlleleSpecificCopyNumber
     */
    public function getAlleleSpecificCopyNumber()
    {
        return $this->container['allele_specific_copy_number'];
    }

    /**
     * Sets allele_specific_copy_number
     *
     * @param \Swagger\Client\Model\AlleleSpecificCopyNumber $allele_specific_copy_number allele_specific_copy_number
     *
     * @return $this
     */
    public function setAlleleSpecificCopyNumber($allele_specific_copy_number)
    {
        $this->container['allele_specific_copy_number'] = $allele_specific_copy_number;

        return $this;
    }

    /**
     * Gets amino_acid_change
     *
     * @return string
     */
    public function getAminoAcidChange()
    {
        return $this->container['amino_acid_change'];
    }

    /**
     * Sets amino_acid_change
     *
     * @param string $amino_acid_change amino_acid_change
     *
     * @return $this
     */
    public function setAminoAcidChange($amino_acid_change)
    {
        $this->container['amino_acid_change'] = $amino_acid_change;

        return $this;
    }

    /**
     * Gets center
     *
     * @return string
     */
    public function getCenter()
    {
        return $this->container['center'];
    }

    /**
     * Sets center
     *
     * @param string $center center
     *
     * @return $this
     */
    public function setCenter($center)
    {
        $this->container['center'] = $center;

        return $this;
    }

    /**
     * Gets chr
     *
     * @return string
     */
    public function getChr()
    {
        return $this->container['chr'];
    }

    /**
     * Sets chr
     *
     * @param string $chr chr
     *
     * @return $this
     */
    public function setChr($chr)
    {
        $this->container['chr'] = $chr;

        return $this;
    }

    /**
     * Gets driver_filter
     *
     * @return string
     */
    public function getDriverFilter()
    {
        return $this->container['driver_filter'];
    }

    /**
     * Sets driver_filter
     *
     * @param string $driver_filter driver_filter
     *
     * @return $this
     */
    public function setDriverFilter($driver_filter)
    {
        $this->container['driver_filter'] = $driver_filter;

        return $this;
    }

    /**
     * Gets driver_filter_annotation
     *
     * @return string
     */
    public function getDriverFilterAnnotation()
    {
        return $this->container['driver_filter_annotation'];
    }

    /**
     * Sets driver_filter_annotation
     *
     * @param string $driver_filter_annotation driver_filter_annotation
     *
     * @return $this
     */
    public function setDriverFilterAnnotation($driver_filter_annotation)
    {
        $this->container['driver_filter_annotation'] = $driver_filter_annotation;

        return $this;
    }

    /**
     * Gets driver_tiers_filter
     *
     * @return string
     */
    public function getDriverTiersFilter()
    {
        return $this->container['driver_tiers_filter'];
    }

    /**
     * Sets driver_tiers_filter
     *
     * @param string $driver_tiers_filter driver_tiers_filter
     *
     * @return $this
     */
    public function setDriverTiersFilter($driver_tiers_filter)
    {
        $this->container['driver_tiers_filter'] = $driver_tiers_filter;

        return $this;
    }

    /**
     * Gets driver_tiers_filter_annotation
     *
     * @return string
     */
    public function getDriverTiersFilterAnnotation()
    {
        return $this->container['driver_tiers_filter_annotation'];
    }

    /**
     * Sets driver_tiers_filter_annotation
     *
     * @param string $driver_tiers_filter_annotation driver_tiers_filter_annotation
     *
     * @return $this
     */
    public function setDriverTiersFilterAnnotation($driver_tiers_filter_annotation)
    {
        $this->container['driver_tiers_filter_annotation'] = $driver_tiers_filter_annotation;

        return $this;
    }

    /**
     * Gets end_position
     *
     * @return int
     */
    public function getEndPosition()
    {
        return $this->container['end_position'];
    }

    /**
     * Sets end_position
     *
     * @param int $end_position end_position
     *
     * @return $this
     */
    public function setEndPosition($end_position)
    {
        $this->container['end_position'] = $end_position;

        return $this;
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
     * Gets fis_value
     *
     * @return float
     */
    public function getFisValue()
    {
        return $this->container['fis_value'];
    }

    /**
     * Sets fis_value
     *
     * @param float $fis_value fis_value
     *
     * @return $this
     */
    public function setFisValue($fis_value)
    {
        $this->container['fis_value'] = $fis_value;

        return $this;
    }

    /**
     * Gets functional_impact_score
     *
     * @return string
     */
    public function getFunctionalImpactScore()
    {
        return $this->container['functional_impact_score'];
    }

    /**
     * Sets functional_impact_score
     *
     * @param string $functional_impact_score functional_impact_score
     *
     * @return $this
     */
    public function setFunctionalImpactScore($functional_impact_score)
    {
        $this->container['functional_impact_score'] = $functional_impact_score;

        return $this;
    }

    /**
     * Gets gene
     *
     * @return \Swagger\Client\Model\Gene
     */
    public function getGene()
    {
        return $this->container['gene'];
    }

    /**
     * Sets gene
     *
     * @param \Swagger\Client\Model\Gene $gene gene
     *
     * @return $this
     */
    public function setGene($gene)
    {
        $this->container['gene'] = $gene;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return string
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string $keyword keyword
     *
     * @return $this
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets link_msa
     *
     * @return string
     */
    public function getLinkMsa()
    {
        return $this->container['link_msa'];
    }

    /**
     * Sets link_msa
     *
     * @param string $link_msa link_msa
     *
     * @return $this
     */
    public function setLinkMsa($link_msa)
    {
        $this->container['link_msa'] = $link_msa;

        return $this;
    }

    /**
     * Gets link_pdb
     *
     * @return string
     */
    public function getLinkPdb()
    {
        return $this->container['link_pdb'];
    }

    /**
     * Sets link_pdb
     *
     * @param string $link_pdb link_pdb
     *
     * @return $this
     */
    public function setLinkPdb($link_pdb)
    {
        $this->container['link_pdb'] = $link_pdb;

        return $this;
    }

    /**
     * Gets link_xvar
     *
     * @return string
     */
    public function getLinkXvar()
    {
        return $this->container['link_xvar'];
    }

    /**
     * Sets link_xvar
     *
     * @param string $link_xvar link_xvar
     *
     * @return $this
     */
    public function setLinkXvar($link_xvar)
    {
        $this->container['link_xvar'] = $link_xvar;

        return $this;
    }

    /**
     * Gets molecular_profile_id
     *
     * @return string
     */
    public function getMolecularProfileId()
    {
        return $this->container['molecular_profile_id'];
    }

    /**
     * Sets molecular_profile_id
     *
     * @param string $molecular_profile_id molecular_profile_id
     *
     * @return $this
     */
    public function setMolecularProfileId($molecular_profile_id)
    {
        $this->container['molecular_profile_id'] = $molecular_profile_id;

        return $this;
    }

    /**
     * Gets mutation_status
     *
     * @return string
     */
    public function getMutationStatus()
    {
        return $this->container['mutation_status'];
    }

    /**
     * Sets mutation_status
     *
     * @param string $mutation_status mutation_status
     *
     * @return $this
     */
    public function setMutationStatus($mutation_status)
    {
        $this->container['mutation_status'] = $mutation_status;

        return $this;
    }

    /**
     * Gets mutation_type
     *
     * @return string
     */
    public function getMutationType()
    {
        return $this->container['mutation_type'];
    }

    /**
     * Sets mutation_type
     *
     * @param string $mutation_type mutation_type
     *
     * @return $this
     */
    public function setMutationType($mutation_type)
    {
        $this->container['mutation_type'] = $mutation_type;

        return $this;
    }

    /**
     * Gets namespace_columns
     *
     * @return map[string,object]
     */
    public function getNamespaceColumns()
    {
        return $this->container['namespace_columns'];
    }

    /**
     * Sets namespace_columns
     *
     * @param map[string,object] $namespace_columns namespace_columns
     *
     * @return $this
     */
    public function setNamespaceColumns($namespace_columns)
    {
        $this->container['namespace_columns'] = $namespace_columns;

        return $this;
    }

    /**
     * Gets ncbi_build
     *
     * @return string
     */
    public function getNcbiBuild()
    {
        return $this->container['ncbi_build'];
    }

    /**
     * Sets ncbi_build
     *
     * @param string $ncbi_build ncbi_build
     *
     * @return $this
     */
    public function setNcbiBuild($ncbi_build)
    {
        $this->container['ncbi_build'] = $ncbi_build;

        return $this;
    }

    /**
     * Gets normal_alt_count
     *
     * @return int
     */
    public function getNormalAltCount()
    {
        return $this->container['normal_alt_count'];
    }

    /**
     * Sets normal_alt_count
     *
     * @param int $normal_alt_count normal_alt_count
     *
     * @return $this
     */
    public function setNormalAltCount($normal_alt_count)
    {
        $this->container['normal_alt_count'] = $normal_alt_count;

        return $this;
    }

    /**
     * Gets normal_ref_count
     *
     * @return int
     */
    public function getNormalRefCount()
    {
        return $this->container['normal_ref_count'];
    }

    /**
     * Sets normal_ref_count
     *
     * @param int $normal_ref_count normal_ref_count
     *
     * @return $this
     */
    public function setNormalRefCount($normal_ref_count)
    {
        $this->container['normal_ref_count'] = $normal_ref_count;

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
     * Gets protein_change
     *
     * @return string
     */
    public function getProteinChange()
    {
        return $this->container['protein_change'];
    }

    /**
     * Sets protein_change
     *
     * @param string $protein_change protein_change
     *
     * @return $this
     */
    public function setProteinChange($protein_change)
    {
        $this->container['protein_change'] = $protein_change;

        return $this;
    }

    /**
     * Gets protein_pos_end
     *
     * @return int
     */
    public function getProteinPosEnd()
    {
        return $this->container['protein_pos_end'];
    }

    /**
     * Sets protein_pos_end
     *
     * @param int $protein_pos_end protein_pos_end
     *
     * @return $this
     */
    public function setProteinPosEnd($protein_pos_end)
    {
        $this->container['protein_pos_end'] = $protein_pos_end;

        return $this;
    }

    /**
     * Gets protein_pos_start
     *
     * @return int
     */
    public function getProteinPosStart()
    {
        return $this->container['protein_pos_start'];
    }

    /**
     * Sets protein_pos_start
     *
     * @param int $protein_pos_start protein_pos_start
     *
     * @return $this
     */
    public function setProteinPosStart($protein_pos_start)
    {
        $this->container['protein_pos_start'] = $protein_pos_start;

        return $this;
    }

    /**
     * Gets reference_allele
     *
     * @return string
     */
    public function getReferenceAllele()
    {
        return $this->container['reference_allele'];
    }

    /**
     * Sets reference_allele
     *
     * @param string $reference_allele reference_allele
     *
     * @return $this
     */
    public function setReferenceAllele($reference_allele)
    {
        $this->container['reference_allele'] = $reference_allele;

        return $this;
    }

    /**
     * Gets refseq_mrna_id
     *
     * @return string
     */
    public function getRefseqMrnaId()
    {
        return $this->container['refseq_mrna_id'];
    }

    /**
     * Sets refseq_mrna_id
     *
     * @param string $refseq_mrna_id refseq_mrna_id
     *
     * @return $this
     */
    public function setRefseqMrnaId($refseq_mrna_id)
    {
        $this->container['refseq_mrna_id'] = $refseq_mrna_id;

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
     * Gets start_position
     *
     * @return int
     */
    public function getStartPosition()
    {
        return $this->container['start_position'];
    }

    /**
     * Sets start_position
     *
     * @param int $start_position start_position
     *
     * @return $this
     */
    public function setStartPosition($start_position)
    {
        $this->container['start_position'] = $start_position;

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
     * Gets tumor_alt_count
     *
     * @return int
     */
    public function getTumorAltCount()
    {
        return $this->container['tumor_alt_count'];
    }

    /**
     * Sets tumor_alt_count
     *
     * @param int $tumor_alt_count tumor_alt_count
     *
     * @return $this
     */
    public function setTumorAltCount($tumor_alt_count)
    {
        $this->container['tumor_alt_count'] = $tumor_alt_count;

        return $this;
    }

    /**
     * Gets tumor_ref_count
     *
     * @return int
     */
    public function getTumorRefCount()
    {
        return $this->container['tumor_ref_count'];
    }

    /**
     * Sets tumor_ref_count
     *
     * @param int $tumor_ref_count tumor_ref_count
     *
     * @return $this
     */
    public function setTumorRefCount($tumor_ref_count)
    {
        $this->container['tumor_ref_count'] = $tumor_ref_count;

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
     * Gets validation_status
     *
     * @return string
     */
    public function getValidationStatus()
    {
        return $this->container['validation_status'];
    }

    /**
     * Sets validation_status
     *
     * @param string $validation_status validation_status
     *
     * @return $this
     */
    public function setValidationStatus($validation_status)
    {
        $this->container['validation_status'] = $validation_status;

        return $this;
    }

    /**
     * Gets variant_allele
     *
     * @return string
     */
    public function getVariantAllele()
    {
        return $this->container['variant_allele'];
    }

    /**
     * Sets variant_allele
     *
     * @param string $variant_allele variant_allele
     *
     * @return $this
     */
    public function setVariantAllele($variant_allele)
    {
        $this->container['variant_allele'] = $variant_allele;

        return $this;
    }

    /**
     * Gets variant_type
     *
     * @return string
     */
    public function getVariantType()
    {
        return $this->container['variant_type'];
    }

    /**
     * Sets variant_type
     *
     * @param string $variant_type variant_type
     *
     * @return $this
     */
    public function setVariantType($variant_type)
    {
        $this->container['variant_type'] = $variant_type;

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


