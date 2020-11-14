# ChatApiWhatsApp\Class3ChatsApi

All URIs are relative to *https://api.chat-api.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addGroupParticipant**](Class3ChatsApi.md#addGroupParticipant) | **POST** /addGroupParticipant | Adding participant to a group
[**demoteGroupParticipant**](Class3ChatsApi.md#demoteGroupParticipant) | **POST** /demoteGroupParticipant | Demote group participant
[**getChats**](Class3ChatsApi.md#getChats) | **GET** /dialogs | Get the chat list.
[**group**](Class3ChatsApi.md#group) | **POST** /group | Creates a group and sends the message to the created group.
[**promoteGroupParticipant**](Class3ChatsApi.md#promoteGroupParticipant) | **POST** /promoteGroupParticipant | Make participant in the group an administrator
[**readChat**](Class3ChatsApi.md#readChat) | **POST** /readChat | Open chat for reading messages
[**removeGroupParticipant**](Class3ChatsApi.md#removeGroupParticipant) | **POST** /removeGroupParticipant | Remove participant from a group



## addGroupParticipant

> \ChatApiWhatsApp\Model\GroupParticipantStatus addGroupParticipant($groupParticipantAction)

Adding participant to a group

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


$apiInstance = new ChatApiWhatsApp\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \ChatApiWhatsApp\Model\GroupParticipantAction(); // \ChatApiWhatsApp\Model\GroupParticipantAction | 

try {
    $result = $apiInstance->addGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->addGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\ChatApiWhatsApp\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\ChatApiWhatsApp\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## demoteGroupParticipant

> \ChatApiWhatsApp\Model\GroupParticipantStatus demoteGroupParticipant($groupParticipantAction)

Demote group participant

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


$apiInstance = new ChatApiWhatsApp\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \ChatApiWhatsApp\Model\GroupParticipantAction(); // \ChatApiWhatsApp\Model\GroupParticipantAction | 

try {
    $result = $apiInstance->demoteGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->demoteGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\ChatApiWhatsApp\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\ChatApiWhatsApp\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getChats

> \ChatApiWhatsApp\Model\Chats getChats()

Get the chat list.

The chat list includes avatars.

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


$apiInstance = new ChatApiWhatsApp\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getChats();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->getChats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\ChatApiWhatsApp\Model\Chats**](../Model/Chats.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## group

> \ChatApiWhatsApp\Model\CreateGroupStatus group($createGroupAction)

Creates a group and sends the message to the created group.

The group will be added to the queue for sending and sooner or later it will be created, even if the phone is disconnected from the Internet or the authorization is not passed.   2 Oct 2018 update: chatId parameter will be returned if group was created on your phone within 20 second.

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


$apiInstance = new ChatApiWhatsApp\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createGroupAction = new \ChatApiWhatsApp\Model\CreateGroupAction(); // \ChatApiWhatsApp\Model\CreateGroupAction | 

try {
    $result = $apiInstance->group($createGroupAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->group: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createGroupAction** | [**\ChatApiWhatsApp\Model\CreateGroupAction**](../Model/CreateGroupAction.md)|  |

### Return type

[**\ChatApiWhatsApp\Model\CreateGroupStatus**](../Model/CreateGroupStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## promoteGroupParticipant

> \ChatApiWhatsApp\Model\GroupParticipantStatus promoteGroupParticipant($groupParticipantAction)

Make participant in the group an administrator

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


$apiInstance = new ChatApiWhatsApp\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \ChatApiWhatsApp\Model\GroupParticipantAction(); // \ChatApiWhatsApp\Model\GroupParticipantAction | 

try {
    $result = $apiInstance->promoteGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->promoteGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\ChatApiWhatsApp\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\ChatApiWhatsApp\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## readChat

> \ChatApiWhatsApp\Model\ReadChatStatus readChat($readChatAction)

Open chat for reading messages

Use this method to make users see their messages read.

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


$apiInstance = new ChatApiWhatsApp\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$readChatAction = new \ChatApiWhatsApp\Model\ReadChatAction(); // \ChatApiWhatsApp\Model\ReadChatAction | 

try {
    $result = $apiInstance->readChat($readChatAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->readChat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **readChatAction** | [**\ChatApiWhatsApp\Model\ReadChatAction**](../Model/ReadChatAction.md)|  |

### Return type

[**\ChatApiWhatsApp\Model\ReadChatStatus**](../Model/ReadChatStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## removeGroupParticipant

> \ChatApiWhatsApp\Model\GroupParticipantStatus removeGroupParticipant($groupParticipantAction)

Remove participant from a group

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


$apiInstance = new ChatApiWhatsApp\Api\Class3ChatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupParticipantAction = new \ChatApiWhatsApp\Model\GroupParticipantAction(); // \ChatApiWhatsApp\Model\GroupParticipantAction | 

try {
    $result = $apiInstance->removeGroupParticipant($groupParticipantAction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Class3ChatsApi->removeGroupParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **groupParticipantAction** | [**\ChatApiWhatsApp\Model\GroupParticipantAction**](../Model/GroupParticipantAction.md)|  |

### Return type

[**\ChatApiWhatsApp\Model\GroupParticipantStatus**](../Model/GroupParticipantStatus.md)

### Authorization

[instanceId](../../README.md#instanceId), [token](../../README.md#token)

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded, application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

