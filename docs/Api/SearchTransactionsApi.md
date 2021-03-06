# CyberSource\SearchTransactionsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSearch**](SearchTransactionsApi.md#createSearch) | **POST** /tss/v2/searches | Create a search request
[**getSearch**](SearchTransactionsApi.md#getSearch) | **GET** /tss/v2/searches/{id} | Get Search results


# **createSearch**
> \CyberSource\Model\TssV2TransactionsPost201Response createSearch($createSearchRequest)

Create a search request

Create a search request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SearchTransactionsApi();
$createSearchRequest = new \CyberSource\Model\TssV2TransactionsPostResponse(); // \CyberSource\Model\TssV2TransactionsPostResponse | 

try {
    $result = $api_instance->createSearch($createSearchRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchTransactionsApi->createSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **createSearchRequest** | [**\CyberSource\Model\TssV2TransactionsPostResponse**](../Model/TssV2TransactionsPostResponse.md)|  |

### Return type

[**\CyberSource\Model\TssV2TransactionsPost201Response**](../Model/TssV2TransactionsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearch**
> \CyberSource\Model\TssV2TransactionsPost201Response getSearch($id)

Get Search results

Include the Search ID in the GET request to retrieve the search results.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\SearchTransactionsApi();
$id = "id_example"; // string | Search ID.

try {
    $result = $api_instance->getSearch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchTransactionsApi->getSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Search ID. |

### Return type

[**\CyberSource\Model\TssV2TransactionsPost201Response**](../Model/TssV2TransactionsPost201Response.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/json;charset=utf-8

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

