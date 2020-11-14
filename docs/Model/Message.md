# # Message

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | unique id | [optional] 
**body** | **string** | text message for type \&quot;chat\&quot;, or link to download the file for \&quot;ptt\&quot;, \&quot;image\&quot;, \&quot;audio\&quot;, \&quot;video\&quot; and \&quot;document\&quot;, or latitude and longitude for \&quot;location\&quot;, or message \&quot;[Call]\&quot; for \&quot;call_log\&quot; | [optional] 
**type** | **string** | type of the message | [optional] 
**senderName** | **string** | Sender name | [optional] 
**fromMe** | **bool** | true - outgoing, false - incoming | [optional] 
**author** | **string** | Author ID of the message, useful for groups | [optional] 
**time** | **int** | send time, unix timestamp | [optional] 
**chatId** | **string** | chat ID | [optional] 
**messageNumber** | **int** | sequence number of the message in the database | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


