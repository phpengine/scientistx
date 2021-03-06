<?php
/**
 * CopyNumberSegmentsApi
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
 * CopyNumberSegmentsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CopyNumberSegmentsApi
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
     * Operation fetchCopyNumberSegmentsUsingPOST
     *
     * Fetch copy number segments by sample ID
     *
     * @param  \Swagger\Client\Model\SampleIdentifier[] $sample_identifiers List of sample identifiers (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\CopyNumberSeg[]
     */
    public function fetchCopyNumberSegmentsUsingPOST($sample_identifiers, $chromosome = null, $projection = 'SUMMARY')
    {
        list($response) = $this->fetchCopyNumberSegmentsUsingPOSTWithHttpInfo($sample_identifiers, $chromosome, $projection);
        return $response;
    }

    /**
     * Operation fetchCopyNumberSegmentsUsingPOSTWithHttpInfo
     *
     * Fetch copy number segments by sample ID
     *
     * @param  \Swagger\Client\Model\SampleIdentifier[] $sample_identifiers List of sample identifiers (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\CopyNumberSeg[], HTTP status code, HTTP response headers (array of strings)
     */
    public function fetchCopyNumberSegmentsUsingPOSTWithHttpInfo($sample_identifiers, $chromosome = null, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\CopyNumberSeg[]';
        $request = $this->fetchCopyNumberSegmentsUsingPOSTRequest($sample_identifiers, $chromosome, $projection);

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
                        '\Swagger\Client\Model\CopyNumberSeg[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fetchCopyNumberSegmentsUsingPOSTAsync
     *
     * Fetch copy number segments by sample ID
     *
     * @param  \Swagger\Client\Model\SampleIdentifier[] $sample_identifiers List of sample identifiers (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchCopyNumberSegmentsUsingPOSTAsync($sample_identifiers, $chromosome = null, $projection = 'SUMMARY')
    {
        return $this->fetchCopyNumberSegmentsUsingPOSTAsyncWithHttpInfo($sample_identifiers, $chromosome, $projection)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fetchCopyNumberSegmentsUsingPOSTAsyncWithHttpInfo
     *
     * Fetch copy number segments by sample ID
     *
     * @param  \Swagger\Client\Model\SampleIdentifier[] $sample_identifiers List of sample identifiers (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fetchCopyNumberSegmentsUsingPOSTAsyncWithHttpInfo($sample_identifiers, $chromosome = null, $projection = 'SUMMARY')
    {
        $returnType = '\Swagger\Client\Model\CopyNumberSeg[]';
        $request = $this->fetchCopyNumberSegmentsUsingPOSTRequest($sample_identifiers, $chromosome, $projection);

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
     * Create request for operation 'fetchCopyNumberSegmentsUsingPOST'
     *
     * @param  \Swagger\Client\Model\SampleIdentifier[] $sample_identifiers List of sample identifiers (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fetchCopyNumberSegmentsUsingPOSTRequest($sample_identifiers, $chromosome = null, $projection = 'SUMMARY')
    {
        // verify the required parameter 'sample_identifiers' is set
        if ($sample_identifiers === null || (is_array($sample_identifiers) && count($sample_identifiers) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sample_identifiers when calling fetchCopyNumberSegmentsUsingPOST'
            );
        }

        $resourcePath = '/copy-number-segments/fetch';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($chromosome !== null) {
            $queryParams['chromosome'] = ObjectSerializer::toQueryValue($chromosome);
        }
        // query params
        if ($projection !== null) {
            $queryParams['projection'] = ObjectSerializer::toQueryValue($projection);
        }


        // body params
        $_tempBody = null;
        if (isset($sample_identifiers)) {
            $_tempBody = $sample_identifiers;
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
     * Operation getCopyNumberSegmentsInSampleInStudyUsingGET
     *
     * Get copy number segments in a sample in a study
     *
     * @param  string $sample_id Sample ID e.g. TCGA-OR-A5J2-01 (required)
     * @param  string $study_id Study ID e.g. acc_tcga (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $direction Direction of the sort (optional, default to ASC)
     * @param  int $page_number Page number of the result list (optional, default to 0)
     * @param  int $page_size Page size of the result list (optional, default to 20000)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     * @param  string $sort_by Name of the property that the result list is sorted by (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\CopyNumberSeg[]
     */
    public function getCopyNumberSegmentsInSampleInStudyUsingGET($sample_id, $study_id, $chromosome = null, $direction = 'ASC', $page_number = '0', $page_size = '20000', $projection = 'SUMMARY', $sort_by = null)
    {
        list($response) = $this->getCopyNumberSegmentsInSampleInStudyUsingGETWithHttpInfo($sample_id, $study_id, $chromosome, $direction, $page_number, $page_size, $projection, $sort_by);
        return $response;
    }

    /**
     * Operation getCopyNumberSegmentsInSampleInStudyUsingGETWithHttpInfo
     *
     * Get copy number segments in a sample in a study
     *
     * @param  string $sample_id Sample ID e.g. TCGA-OR-A5J2-01 (required)
     * @param  string $study_id Study ID e.g. acc_tcga (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $direction Direction of the sort (optional, default to ASC)
     * @param  int $page_number Page number of the result list (optional, default to 0)
     * @param  int $page_size Page size of the result list (optional, default to 20000)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     * @param  string $sort_by Name of the property that the result list is sorted by (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\CopyNumberSeg[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getCopyNumberSegmentsInSampleInStudyUsingGETWithHttpInfo($sample_id, $study_id, $chromosome = null, $direction = 'ASC', $page_number = '0', $page_size = '20000', $projection = 'SUMMARY', $sort_by = null)
    {
        $returnType = '\Swagger\Client\Model\CopyNumberSeg[]';
        $request = $this->getCopyNumberSegmentsInSampleInStudyUsingGETRequest($sample_id, $study_id, $chromosome, $direction, $page_number, $page_size, $projection, $sort_by);

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
                        '\Swagger\Client\Model\CopyNumberSeg[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCopyNumberSegmentsInSampleInStudyUsingGETAsync
     *
     * Get copy number segments in a sample in a study
     *
     * @param  string $sample_id Sample ID e.g. TCGA-OR-A5J2-01 (required)
     * @param  string $study_id Study ID e.g. acc_tcga (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $direction Direction of the sort (optional, default to ASC)
     * @param  int $page_number Page number of the result list (optional, default to 0)
     * @param  int $page_size Page size of the result list (optional, default to 20000)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     * @param  string $sort_by Name of the property that the result list is sorted by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCopyNumberSegmentsInSampleInStudyUsingGETAsync($sample_id, $study_id, $chromosome = null, $direction = 'ASC', $page_number = '0', $page_size = '20000', $projection = 'SUMMARY', $sort_by = null)
    {
        return $this->getCopyNumberSegmentsInSampleInStudyUsingGETAsyncWithHttpInfo($sample_id, $study_id, $chromosome, $direction, $page_number, $page_size, $projection, $sort_by)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCopyNumberSegmentsInSampleInStudyUsingGETAsyncWithHttpInfo
     *
     * Get copy number segments in a sample in a study
     *
     * @param  string $sample_id Sample ID e.g. TCGA-OR-A5J2-01 (required)
     * @param  string $study_id Study ID e.g. acc_tcga (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $direction Direction of the sort (optional, default to ASC)
     * @param  int $page_number Page number of the result list (optional, default to 0)
     * @param  int $page_size Page size of the result list (optional, default to 20000)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     * @param  string $sort_by Name of the property that the result list is sorted by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCopyNumberSegmentsInSampleInStudyUsingGETAsyncWithHttpInfo($sample_id, $study_id, $chromosome = null, $direction = 'ASC', $page_number = '0', $page_size = '20000', $projection = 'SUMMARY', $sort_by = null)
    {
        $returnType = '\Swagger\Client\Model\CopyNumberSeg[]';
        $request = $this->getCopyNumberSegmentsInSampleInStudyUsingGETRequest($sample_id, $study_id, $chromosome, $direction, $page_number, $page_size, $projection, $sort_by);

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
     * Create request for operation 'getCopyNumberSegmentsInSampleInStudyUsingGET'
     *
     * @param  string $sample_id Sample ID e.g. TCGA-OR-A5J2-01 (required)
     * @param  string $study_id Study ID e.g. acc_tcga (required)
     * @param  string $chromosome Chromosome (optional)
     * @param  string $direction Direction of the sort (optional, default to ASC)
     * @param  int $page_number Page number of the result list (optional, default to 0)
     * @param  int $page_size Page size of the result list (optional, default to 20000)
     * @param  string $projection Level of detail of the response (optional, default to SUMMARY)
     * @param  string $sort_by Name of the property that the result list is sorted by (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCopyNumberSegmentsInSampleInStudyUsingGETRequest($sample_id, $study_id, $chromosome = null, $direction = 'ASC', $page_number = '0', $page_size = '20000', $projection = 'SUMMARY', $sort_by = null)
    {
        // verify the required parameter 'sample_id' is set
        if ($sample_id === null || (is_array($sample_id) && count($sample_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sample_id when calling getCopyNumberSegmentsInSampleInStudyUsingGET'
            );
        }
        // verify the required parameter 'study_id' is set
        if ($study_id === null || (is_array($study_id) && count($study_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $study_id when calling getCopyNumberSegmentsInSampleInStudyUsingGET'
            );
        }
        if ($page_number !== null && $page_number < 0) {
            throw new \InvalidArgumentException('invalid value for "$page_number" when calling CopyNumberSegmentsApi.getCopyNumberSegmentsInSampleInStudyUsingGET, must be bigger than or equal to 0.');
        }

        if ($page_size !== null && $page_size > 20000) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling CopyNumberSegmentsApi.getCopyNumberSegmentsInSampleInStudyUsingGET, must be smaller than or equal to 20000.');
        }
        if ($page_size !== null && $page_size < 1) {
            throw new \InvalidArgumentException('invalid value for "$page_size" when calling CopyNumberSegmentsApi.getCopyNumberSegmentsInSampleInStudyUsingGET, must be bigger than or equal to 1.');
        }


        $resourcePath = '/studies/{studyId}/samples/{sampleId}/copy-number-segments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($chromosome !== null) {
            $queryParams['chromosome'] = ObjectSerializer::toQueryValue($chromosome);
        }
        // query params
        if ($direction !== null) {
            $queryParams['direction'] = ObjectSerializer::toQueryValue($direction);
        }
        // query params
        if ($page_number !== null) {
            $queryParams['pageNumber'] = ObjectSerializer::toQueryValue($page_number);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = ObjectSerializer::toQueryValue($page_size);
        }
        // query params
        if ($projection !== null) {
            $queryParams['projection'] = ObjectSerializer::toQueryValue($projection);
        }
        // query params
        if ($sort_by !== null) {
            $queryParams['sortBy'] = ObjectSerializer::toQueryValue($sort_by);
        }

        // path params
        if ($sample_id !== null) {
            $resourcePath = str_replace(
                '{' . 'sampleId' . '}',
                ObjectSerializer::toPathValue($sample_id),
                $resourcePath
            );
        }
        // path params
        if ($study_id !== null) {
            $resourcePath = str_replace(
                '{' . 'studyId' . '}',
                ObjectSerializer::toPathValue($study_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
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
            'GET',
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
