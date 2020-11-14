# ChatApiWhatsApp\Class7TestingApi

All URIs are relative to *https://api.chat-api.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**instanceStatuses**](Class7TestingApi.md#instanceStatuses) | **GET** /instanceStatuses | Returns instance status changes history.
[**webhookStatuses**](Class7TestingApi.md#webhookStatuses) | **GET** /webhookStatus | Returns webhook status for message.



## instanceStatuses

> \ChatApiWhatsApp\Model\Statuses instanceStatuses($minTime, $maxTime)

Returns instance status changes history.

Requires enable \"instanceStatuses\" option for collecting data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new ChatApiWhatsApp\Api\Class7TestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$minTime = 946684800; // int | Filter statuses received after specified date. Example: 946684800.
$maxTime = 946684800; // int | Filter statuses received before specified date. Example: 946684800.

try {
    $result = $apiInstance->instanceStatuses($minTime, $maxTime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class7TestingApi->instanceStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **minTime** | **int**| Filter statuses received after specified date. Example: 946684800. | [optional]
 **maxTime** | **int**| Filter statuses received before specified date. Example: 946684800. | [optional]

### Return type

[**\ChatApiWhatsApp\Model\Statuses**](../Model/Statuses.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## webhookStatuses

> \ChatApiWhatsApp\Model\WebhookStatus webhookStatuses($msgId)

Returns webhook status for message.

Requires enable \"webhookStatuses\" option for collecting data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: instanceId
$config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKey('instanceId', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('instanceId', 'Bearer');

// Configure API key authorization: token
$config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = ChatApiWhatsApp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');


$apiInstance = new ChatApiWhatsApp\Api\Class7TestingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$msgId = false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F; // string | Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F.

try {
    $result = $apiInstance->webhookStatuses($msgId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class7TestingApi->webhookStatuses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **msgId** | **string**| Message ID. Example: false_17472822486@c.us_DF38E6A25B42CC8CCE57EC40F. |

### Return type

[**\ChatApiWhatsApp\Model\WebhookStatus**](../Model/WebhookStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

