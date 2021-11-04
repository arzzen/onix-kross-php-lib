<?php
/**
 * PartnersApi
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

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * PartnersApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PartnersApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation partnersAddOrEditPartner
     *
     * Pridá jedného partnera. Dáta partnera sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost $partner Dáta partnera. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Result
     */
    public function partnersAddOrEditPartner($database_path, $partner)
    {
        list($response) = $this->partnersAddOrEditPartnerWithHttpInfo($database_path, $partner);
        return $response;
    }

    /**
     * Operation partnersAddOrEditPartnerWithHttpInfo
     *
     * Pridá jedného partnera. Dáta partnera sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost $partner Dáta partnera. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Result, HTTP status code, HTTP response headers (array of strings)
     */
    public function partnersAddOrEditPartnerWithHttpInfo($database_path, $partner)
    {
        $request = $this->partnersAddOrEditPartnerRequest($database_path, $partner);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\Result' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Result', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\Result';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\OpenAPI\Client\Model\Result',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation partnersAddOrEditPartnerAsync
     *
     * Pridá jedného partnera. Dáta partnera sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost $partner Dáta partnera. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersAddOrEditPartnerAsync($database_path, $partner)
    {
        return $this->partnersAddOrEditPartnerAsyncWithHttpInfo($database_path, $partner)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation partnersAddOrEditPartnerAsyncWithHttpInfo
     *
     * Pridá jedného partnera. Dáta partnera sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost $partner Dáta partnera. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersAddOrEditPartnerAsyncWithHttpInfo($database_path, $partner)
    {
        $returnType = '\OpenAPI\Client\Model\Result';
        $request = $this->partnersAddOrEditPartnerRequest($database_path, $partner);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'partnersAddOrEditPartner'
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost $partner Dáta partnera. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function partnersAddOrEditPartnerRequest($database_path, $partner)
    {
        // verify the required parameter 'database_path' is set
        if ($database_path === null || (is_array($database_path) && count($database_path) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $database_path when calling partnersAddOrEditPartner'
            );
        }
        // verify the required parameter 'partner' is set
        if ($partner === null || (is_array($partner) && count($partner) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $partner when calling partnersAddOrEditPartner'
            );
        }

        $resourcePath = '/api/v1/partners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($database_path !== null) {
            $headerParams['DatabasePath'] = ObjectSerializer::toHeaderValue($database_path);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($partner)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($partner));
            } else {
                $httpBody = $partner;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation partnersAddOrEditPartners
     *
     * Pridá viacero partnerov. Dáta partnerov sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost[] $partners Dáta partnerov. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Result[]
     */
    public function partnersAddOrEditPartners($database_path, $partners)
    {
        list($response) = $this->partnersAddOrEditPartnersWithHttpInfo($database_path, $partners);
        return $response;
    }

    /**
     * Operation partnersAddOrEditPartnersWithHttpInfo
     *
     * Pridá viacero partnerov. Dáta partnerov sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost[] $partners Dáta partnerov. (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Result[], HTTP status code, HTTP response headers (array of strings)
     */
    public function partnersAddOrEditPartnersWithHttpInfo($database_path, $partners)
    {
        $request = $this->partnersAddOrEditPartnersRequest($database_path, $partners);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\Result[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Result[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\Result[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\OpenAPI\Client\Model\Result[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation partnersAddOrEditPartnersAsync
     *
     * Pridá viacero partnerov. Dáta partnerov sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost[] $partners Dáta partnerov. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersAddOrEditPartnersAsync($database_path, $partners)
    {
        return $this->partnersAddOrEditPartnersAsyncWithHttpInfo($database_path, $partners)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation partnersAddOrEditPartnersAsyncWithHttpInfo
     *
     * Pridá viacero partnerov. Dáta partnerov sa nachádzajú v \&quot;body\&quot; requestu.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost[] $partners Dáta partnerov. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersAddOrEditPartnersAsyncWithHttpInfo($database_path, $partners)
    {
        $returnType = '\OpenAPI\Client\Model\Result[]';
        $request = $this->partnersAddOrEditPartnersRequest($database_path, $partners);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'partnersAddOrEditPartners'
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  \OpenAPI\Client\Model\DtoPartnersPost[] $partners Dáta partnerov. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function partnersAddOrEditPartnersRequest($database_path, $partners)
    {
        // verify the required parameter 'database_path' is set
        if ($database_path === null || (is_array($database_path) && count($database_path) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $database_path when calling partnersAddOrEditPartners'
            );
        }
        // verify the required parameter 'partners' is set
        if ($partners === null || (is_array($partners) && count($partners) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $partners when calling partnersAddOrEditPartners'
            );
        }

        $resourcePath = '/api/v1/partners/list';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($database_path !== null) {
            $headerParams['DatabasePath'] = ObjectSerializer::toHeaderValue($database_path);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
            );
        }

        // for model (json/xml)
        if (isset($partners)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($partners));
            } else {
                $httpBody = $partners;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
     * Operation partnersGetPartners
     *
     * Vracia zoznam všetkých partnerov.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  string[] $tables Zoznam podtabuliek partnera&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;ADDRESSES - adresy&lt;br&gt;BANKACCOUNTS - bankové účty&lt;br&gt;CONTACTS - kontakty (optional)
     * @param  string $select Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\DtoPartnersGet[]
     */
    public function partnersGetPartners($database_path, $tables = null, $select = null)
    {
        list($response) = $this->partnersGetPartnersWithHttpInfo($database_path, $tables, $select);
        return $response;
    }

    /**
     * Operation partnersGetPartnersWithHttpInfo
     *
     * Vracia zoznam všetkých partnerov.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  string[] $tables Zoznam podtabuliek partnera&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;ADDRESSES - adresy&lt;br&gt;BANKACCOUNTS - bankové účty&lt;br&gt;CONTACTS - kontakty (optional)
     * @param  string $select Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\DtoPartnersGet[], HTTP status code, HTTP response headers (array of strings)
     */
    public function partnersGetPartnersWithHttpInfo($database_path, $tables = null, $select = null)
    {
        $request = $this->partnersGetPartnersRequest($database_path, $tables, $select);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\DtoPartnersGet[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\DtoPartnersGet[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\DtoPartnersGet[]';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
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
                        '\OpenAPI\Client\Model\DtoPartnersGet[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation partnersGetPartnersAsync
     *
     * Vracia zoznam všetkých partnerov.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  string[] $tables Zoznam podtabuliek partnera&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;ADDRESSES - adresy&lt;br&gt;BANKACCOUNTS - bankové účty&lt;br&gt;CONTACTS - kontakty (optional)
     * @param  string $select Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersGetPartnersAsync($database_path, $tables = null, $select = null)
    {
        return $this->partnersGetPartnersAsyncWithHttpInfo($database_path, $tables, $select)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation partnersGetPartnersAsyncWithHttpInfo
     *
     * Vracia zoznam všetkých partnerov.
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  string[] $tables Zoznam podtabuliek partnera&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;ADDRESSES - adresy&lt;br&gt;BANKACCOUNTS - bankové účty&lt;br&gt;CONTACTS - kontakty (optional)
     * @param  string $select Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersGetPartnersAsyncWithHttpInfo($database_path, $tables = null, $select = null)
    {
        $returnType = '\OpenAPI\Client\Model\DtoPartnersGet[]';
        $request = $this->partnersGetPartnersRequest($database_path, $tables, $select);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'partnersGetPartners'
     *
     * @param  string $database_path Cesta ku zdrojovej ONIX databáze. (required)
     * @param  string[] $tables Zoznam podtabuliek partnera&lt;br&gt;ALL - všetky podtabuľky&lt;br&gt;ADDRESSES - adresy&lt;br&gt;BANKACCOUNTS - bankové účty&lt;br&gt;CONTACTS - kontakty (optional)
     * @param  string $select Definovanie polí, ktoré majú byť vo výsledku volania (JSON). Zadávajte ako názvy stĺpcov z modelu oddelené čiarkou. V prípade podzáznamov tabuľky zadávajte ako NazovPodtabulky.NazovPola. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function partnersGetPartnersRequest($database_path, $tables = null, $select = null)
    {
        // verify the required parameter 'database_path' is set
        if ($database_path === null || (is_array($database_path) && count($database_path) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $database_path when calling partnersGetPartners'
            );
        }

        $resourcePath = '/api/v1/partners';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($tables !== null) {
            if('form' === 'form' && is_array($tables)) {
                foreach($tables as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['tables'] = $tables;
            }
        }
        // query params
        if (is_array($select)) {
            $select = ObjectSerializer::serializeCollection($select, '', true);
        }
        if ($select !== null) {
            $queryParams['$select'] = $select;
        }

        // header params
        if ($database_path !== null) {
            $headerParams['DatabasePath'] = ObjectSerializer::toHeaderValue($database_path);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
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
