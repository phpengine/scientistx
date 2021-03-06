<?php
/**
 * GenericAssaysApi
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

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * GenericAssaysApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GenericAssaysApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation fetchGenericAssayDataInMolecularProfileUsingPOST
     *
     * fetch generic_assay_data in a molecular profile
     *
     * @param  \Swagger\Client\Model\GenericAssayFilter $generic_assay_data_filter List of Sample IDs/Sample List ID and Generic Assay IDs (required)
     * @param  string $molecular_profile_id Molecular Profile ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GenericAssayData[]
     */
    public function fetchGenericAssayDataInMolecularProfileUsingPOST($generic_assay_data_filter, $molecular_profile_id, $projection = 'SUMMARY')
    {
        list($response) = $this->fetchGenericAssayDataInMolecularProfileUsingPOSTWithHttpInfo($generic_assay_data_filter, $molecular_profile_id, $projection);
        return $response;
    }

    /**
     * Operation fetchGenericAssayDataInMolecularProfileUsingPOSTWithHttpInfo
     *
     * fetch generic_assay_data in a molecular profile
     *
     * @param  \Swagger\Client\Model\GenericAssayFilter $generic_assay_data_filter List of Sample IDs/Sample List ID and Generic Assay IDs (required)
     * @param  string $molecular_profile_id Molecular Profile ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GenericAssayData[], HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchGenericAssayDataInMolecularProfileUsingPOSTWithHttpInfo($generic_assay_data_filter, $molecular_profile_id, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\GenericAssayData[]';
        $request = $this->fetchGenericAssayDataInMolecularProfileUsingPOSTRequest($generic_assay_data_filter, $molecular_profile_id, $projection);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GenericAssayData[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchGenericAssayDataInMolecularProfileUsingPOSTAsync
     *
     * fetch generic_assay_data in a molecular profile
     *
     * @param  \Swagger\Client\Model\GenericAssayFilter $generic_assay_data_filter List of Sample IDs/Sample List ID and Generic Assay IDs (required)
     * @param  string $molecular_profile_id Molecular Profile ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchGenericAssayDataInMolecularProfileUsingPOSTAsync($generic_assay_data_filter, $molecular_profile_id, $projection = 'SUMMARY')
    {
        return $this->fetchGenericAssayDataInMolecularProfileUsingPOSTAsyncWithHttpInfo($generic_assay_data_filter, $molecular_profile_id, $projection)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchGenericAssayDataInMolecularProfileUsingPOSTAsyncWithHttpInfo
     *
     * fetch generic_assay_data in a molecular profile
     *
     * @param  \Swagger\Client\Model\GenericAssayFilter $generic_assay_data_filter List of Sample IDs/Sample List ID and Generic Assay IDs (required)
     * @param  string $molecular_profile_id Molecular Profile ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchGenericAssayDataInMolecularProfileUsingPOSTAsyncWithHttpInfo($generic_assay_data_filter, $molecular_profile_id, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\GenericAssayData[]';
        $request = $this->fetchGenericAssayDataInMolecularProfileUsingPOSTRequest($generic_assay_data_filter, $molecular_profile_id, $projection);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'fetchGenericAssayDataInMolecularProfileUsingPOST'
     *
     * @param  \Swagger\Client\Model\GenericAssayFilter $generic_assay_data_filter List of Sample IDs/Sample List ID and Generic Assay IDs (required)
     * @param  string $molecular_profile_id Molecular Profile ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchGenericAssayDataInMolecularProfileUsingPOSTRequest($generic_assay_data_filter, $molecular_profile_id, $projection = 'SUMMARY')
    {
        // verify the required parameter 'generic_assay_data_filter' is set
        if ($generic_assay_data_filter === null || (is_array($generic_assay_data_filter) && count($generic_assay_data_filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generic_assay_data_filter when calling fetchGenericAssayDataInMolecularProfileUsingPOST'
            );
        }
        // verify the required parameter 'molecular_profile_id' is set
        if ($molecular_profile_id === null || (is_array($molecular_profile_id) && count($molecular_profile_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $molecular_profile_id when calling fetchGenericAssayDataInMolecularProfileUsingPOST'
            );
        }

        $resourcePath = '/generic_assay_data/{molecularProfileId}/fetch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($projection !== null) {
            $queryParams['projection'] = ObjectSerializer::toQueryValue($projection);
        }

        // path params
        if ($molecular_profile_id !== null) {
            $resourcePath = str_replace(
                '{' . 'molecularProfileId' . '}',
                ObjectSerializer::toPathValue($molecular_profile_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($generic_assay_data_filter)) {
            $_tempBody = $generic_assay_data_filter;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST
     *
     * Fetch generic_assay_data
     *
     * @param  \Swagger\Client\Model\GenericAssayDataMultipleStudyFilter $generic_assay_data_multiple_study_filter List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Generic Assay IDs (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GenericAssayData[]
     */
    public function fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST($generic_assay_data_multiple_study_filter, $projection = 'SUMMARY')
    {
        list($response) = $this->fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTWithHttpInfo($generic_assay_data_multiple_study_filter, $projection);
        return $response;
    }

    /**
     * Operation fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTWithHttpInfo
     *
     * Fetch generic_assay_data
     *
     * @param  \Swagger\Client\Model\GenericAssayDataMultipleStudyFilter $generic_assay_data_multiple_study_filter List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Generic Assay IDs (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GenericAssayData[], HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTWithHttpInfo($generic_assay_data_multiple_study_filter, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\GenericAssayData[]';
        $request = $this->fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTRequest($generic_assay_data_multiple_study_filter, $projection);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GenericAssayData[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTAsync
     *
     * Fetch generic_assay_data
     *
     * @param  \Swagger\Client\Model\GenericAssayDataMultipleStudyFilter $generic_assay_data_multiple_study_filter List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Generic Assay IDs (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTAsync($generic_assay_data_multiple_study_filter, $projection = 'SUMMARY')
    {
        return $this->fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTAsyncWithHttpInfo($generic_assay_data_multiple_study_filter, $projection)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTAsyncWithHttpInfo
     *
     * Fetch generic_assay_data
     *
     * @param  \Swagger\Client\Model\GenericAssayDataMultipleStudyFilter $generic_assay_data_multiple_study_filter List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Generic Assay IDs (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTAsyncWithHttpInfo($generic_assay_data_multiple_study_filter, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\GenericAssayData[]';
        $request = $this->fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTRequest($generic_assay_data_multiple_study_filter, $projection);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST'
     *
     * @param  \Swagger\Client\Model\GenericAssayDataMultipleStudyFilter $generic_assay_data_multiple_study_filter List of Molecular Profile ID and Sample ID pairs or List of MolecularProfile IDs and Generic Assay IDs (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchGenericAssayDataInMultipleMolecularProfilesUsingPOSTRequest($generic_assay_data_multiple_study_filter, $projection = 'SUMMARY')
    {
        // verify the required parameter 'generic_assay_data_multiple_study_filter' is set
        if ($generic_assay_data_multiple_study_filter === null || (is_array($generic_assay_data_multiple_study_filter) && count($generic_assay_data_multiple_study_filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generic_assay_data_multiple_study_filter when calling fetchGenericAssayDataInMultipleMolecularProfilesUsingPOST'
            );
        }

        $resourcePath = '/generic_assay_data/fetch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($projection !== null) {
            $queryParams['projection'] = ObjectSerializer::toQueryValue($projection);
        }


        // body params
        $_tempBody = null;
        if (isset($generic_assay_data_multiple_study_filter)) {
            $_tempBody = $generic_assay_data_multiple_study_filter;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation fetchGenericAssayMetaDataUsingPOST
     *
     * Fetch meta data for generic-assay by ID
     *
     * @param  \Swagger\Client\Model\GenericAssayMetaFilter $generic_assay_meta_filter List of Molecular Profile ID or List of Stable ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\GenericAssayMeta[]
     */
    public function fetchGenericAssayMetaDataUsingPOST($generic_assay_meta_filter, $projection = 'SUMMARY')
    {
        list($response) = $this->fetchGenericAssayMetaDataUsingPOSTWithHttpInfo($generic_assay_meta_filter, $projection);
        return $response;
    }

    /**
     * Operation fetchGenericAssayMetaDataUsingPOSTWithHttpInfo
     *
     * Fetch meta data for generic-assay by ID
     *
     * @param  \Swagger\Client\Model\GenericAssayMetaFilter $generic_assay_meta_filter List of Molecular Profile ID or List of Stable ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\GenericAssayMeta[], HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchGenericAssayMetaDataUsingPOSTWithHttpInfo($generic_assay_meta_filter, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\GenericAssayMeta[]';
        $request = $this->fetchGenericAssayMetaDataUsingPOSTRequest($generic_assay_meta_filter, $projection);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\GenericAssayMeta[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchGenericAssayMetaDataUsingPOSTAsync
     *
     * Fetch meta data for generic-assay by ID
     *
     * @param  \Swagger\Client\Model\GenericAssayMetaFilter $generic_assay_meta_filter List of Molecular Profile ID or List of Stable ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchGenericAssayMetaDataUsingPOSTAsync($generic_assay_meta_filter, $projection = 'SUMMARY')
    {
        return $this->fetchGenericAssayMetaDataUsingPOSTAsyncWithHttpInfo($generic_assay_meta_filter, $projection)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchGenericAssayMetaDataUsingPOSTAsyncWithHttpInfo
     *
     * Fetch meta data for generic-assay by ID
     *
     * @param  \Swagger\Client\Model\GenericAssayMetaFilter $generic_assay_meta_filter List of Molecular Profile ID or List of Stable ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchGenericAssayMetaDataUsingPOSTAsyncWithHttpInfo($generic_assay_meta_filter, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\GenericAssayMeta[]';
        $request = $this->fetchGenericAssayMetaDataUsingPOSTRequest($generic_assay_meta_filter, $projection);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'fetchGenericAssayMetaDataUsingPOST'
     *
     * @param  \Swagger\Client\Model\GenericAssayMetaFilter $generic_assay_meta_filter List of Molecular Profile ID or List of Stable ID (required)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchGenericAssayMetaDataUsingPOSTRequest($generic_assay_meta_filter, $projection = 'SUMMARY')
    {
        // verify the required parameter 'generic_assay_meta_filter' is set
        if ($generic_assay_meta_filter === null || (is_array($generic_assay_meta_filter) && count($generic_assay_meta_filter) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $generic_assay_meta_filter when calling fetchGenericAssayMetaDataUsingPOST'
            );
        }

        $resourcePath = '/generic_assay_meta/fetch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($projection !== null) {
            $queryParams['projection'] = ObjectSerializer::toQueryValue($projection);
        }


        // body params
        $_tempBody = null;
        if (isset($generic_assay_meta_filter)) {
            $_tempBody = $generic_assay_meta_filter;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
