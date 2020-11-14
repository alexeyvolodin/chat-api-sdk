<?php
/**
 * Class7TestingApi
 * PHP version 5
 *
 * @category Class
 * @package  ChatApiWhatsApp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Chat API SDK
 *
 * The SDK allows you to receive and send messages through your WhatsApp account. [Sign up now](https://app.chat-api.com/)  The Chat API is based on the WhatsApp WEB protocol and excludes the ban both when using libraries from mgp25 and the like. Despite this, your account can be banned by anti-spam system WhatsApp after several clicking the \"block\" button.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: sale@chat-api.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChatApiWhatsApp\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChatApiWhatsApp\ApiException;
use ChatApiWhatsApp\Configuration;
use ChatApiWhatsApp\HeaderSelector;
use ChatApiWhatsApp\ObjectSerializer;

/**
 * Class7TestingApi Class Doc Comment
 *
 * @category Class
 * @package  ChatApiWhatsApp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Class7TestingApi
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
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation instanceStatuses
     *
     * Returns instance status changes history.
     *
     * @param  int $minTime Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $maxTime Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \ChatApiWhatsApp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChatApiWhatsApp\Model\Statuses
     */
    public function instanceStatuses($minTime = null, $maxTime = null)
    {
        list($response) = $this->instanceStatusesWithHttpInfo($minTime, $maxTime);
        return $response;
    }

    /**
     * Operation instanceStatusesWithHttpInfo
     *
     * Returns instance status changes history.
     *
     * @param  int $minTime Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $maxTime Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \ChatApiWhatsApp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChatApiWhatsApp\Model\Statuses, HTTP status code, HTTP response headers (array of strings)
     */
    public function instanceStatusesWithHttpInfo($minTime = null, $maxTime = null)
    {
        $request = $this->instanceStatusesRequest($minTime, $maxTime);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\ChatApiWhatsApp\Model\Statuses' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChatApiWhatsApp\Model\Statuses', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChatApiWhatsApp\Model\Statuses';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\ChatApiWhatsApp\Model\Statuses',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation instanceStatusesAsync
     *
     * Returns instance status changes history.
     *
     * @param  int $minTime Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $maxTime Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function instanceStatusesAsync($minTime = null, $maxTime = null)
    {
        return $this->instanceStatusesAsyncWithHttpInfo($minTime, $maxTime)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation instanceStatusesAsyncWithHttpInfo
     *
     * Returns instance status changes history.
     *
     * @param  int $minTime Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $maxTime Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function instanceStatusesAsyncWithHttpInfo($minTime = null, $maxTime = null)
    {
        $returnType = '\ChatApiWhatsApp\Model\Statuses';
        $request = $this->instanceStatusesRequest($minTime, $maxTime);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'instanceStatuses'
     *
     * @param  int $minTime Filter statuses received after specified date. Example: 946684800. (optional)
     * @param  int $maxTime Filter statuses received before specified date. Example: 946684800. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function instanceStatusesRequest($minTime = null, $maxTime = null)
    {

        $resourcePath = '/instanceStatuses';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($minTime !== null) {
            $queryParams['min_time'] = ObjectSerializer::toQueryValue($minTime);
        }
        // query params
        if ($maxTime !== null) {
            $queryParams['max_time'] = ObjectSerializer::toQueryValue($maxTime);
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('instanceId');
        if ($apiKey !== null) {
            $queryParams['instanceId'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $queryParams['token'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation webhookStatuses
     *
     * Returns webhook status for message.
     *
     * @param  string $msgId Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \ChatApiWhatsApp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChatApiWhatsApp\Model\WebhookStatus
     */
    public function webhookStatuses($msgId)
    {
        list($response) = $this->webhookStatusesWithHttpInfo($msgId);
        return $response;
    }

    /**
     * Operation webhookStatusesWithHttpInfo
     *
     * Returns webhook status for message.
     *
     * @param  string $msgId Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \ChatApiWhatsApp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChatApiWhatsApp\Model\WebhookStatus, HTTP status code, HTTP response headers (array of strings)
     */
    public function webhookStatusesWithHttpInfo($msgId)
    {
        $request = $this->webhookStatusesRequest($msgId);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\ChatApiWhatsApp\Model\WebhookStatus' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChatApiWhatsApp\Model\WebhookStatus', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChatApiWhatsApp\Model\WebhookStatus';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\ChatApiWhatsApp\Model\WebhookStatus',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation webhookStatusesAsync
     *
     * Returns webhook status for message.
     *
     * @param  string $msgId Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookStatusesAsync($msgId)
    {
        return $this->webhookStatusesAsyncWithHttpInfo($msgId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation webhookStatusesAsyncWithHttpInfo
     *
     * Returns webhook status for message.
     *
     * @param  string $msgId Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function webhookStatusesAsyncWithHttpInfo($msgId)
    {
        $returnType = '\ChatApiWhatsApp\Model\WebhookStatus';
        $request = $this->webhookStatusesRequest($msgId);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'webhookStatuses'
     *
     * @param  string $msgId Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function webhookStatusesRequest($msgId)
    {
        // verify the required parameter 'msgId' is set
        if ($msgId === null || (is_array($msgId) && count($msgId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $msgId when calling webhookStatuses'
            );
        }

        $resourcePath = '/webhookStatus';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($msgId !== null) {
            $queryParams['msgId'] = ObjectSerializer::toQueryValue($msgId);
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
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
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
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('instanceId');
        if ($apiKey !== null) {
            $queryParams['instanceId'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('token');
        if ($apiKey !== null) {
            $queryParams['token'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
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
