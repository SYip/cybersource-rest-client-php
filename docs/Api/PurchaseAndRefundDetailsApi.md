# CyberSource\PurchaseAndRefundDetailsApi

All URIs are relative to *https://apitest.cybersource.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPurchaseAndRefundDetails**](PurchaseAndRefundDetailsApi.md#getPurchaseAndRefundDetails) | **GET** /reporting/v3/purchase-refund-details | Get Purchase and Refund details


# **getPurchaseAndRefundDetails**
> getPurchaseAndRefundDetails($startTime, $endTime, $organizationId, $paymentSubtype, $viewBy, $groupName, $offset, $limit)

Get Purchase and Refund details

Purchase And Refund Details Description

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CyberSource\Api\PurchaseAndRefundDetailsApi();
$startTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ssXXX
$endTime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd'T'HH:mm:ssXXX
$organizationId = "organizationId_example"; // string | Valid Cybersource Organization Id
$paymentSubtype = "ALL"; // string | Payment Subtypes.   - **ALL**:  All Payment Subtypes   - **VI** :  Visa   - **MC** :  Master Card   - **AX** :  American Express   - **DI** :  Discover   - **DP** :  Pinless Debit
$viewBy = "requestDate"; // string | View results by Request Date or Submission Date.   - **requestDate** : Request Date   - **submissionDate**: Submission Date
$groupName = "groupName_example"; // string | Valid CyberSource Group Name.User can define groups using CBAPI and Group Management Module in EBC2. Groups are collection of organizationIds
$offset = 56; // int | Offset of the Purchase and Refund Results.
$limit = 2000; // int | Results count per page. Range(1-2000)

try {
    $api_instance->getPurchaseAndRefundDetails($startTime, $endTime, $organizationId, $paymentSubtype, $viewBy, $groupName, $offset, $limit);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseAndRefundDetailsApi->getPurchaseAndRefundDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startTime** | **\DateTime**| Valid report Start Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX |
 **endTime** | **\DateTime**| Valid report End Time in **ISO 8601 format** Please refer the following link to know more about ISO 8601 format. - https://xml2rfc.tools.ietf.org/public/rfc/html/rfc3339.html#anchor14   **Example date format:**   - yyyy-MM-dd&#39;T&#39;HH:mm:ssXXX |
 **organizationId** | **string**| Valid Cybersource Organization Id | [optional]
 **paymentSubtype** | **string**| Payment Subtypes.   - **ALL**:  All Payment Subtypes   - **VI** :  Visa   - **MC** :  Master Card   - **AX** :  American Express   - **DI** :  Discover   - **DP** :  Pinless Debit | [optional] [default to ALL]
 **viewBy** | **string**| View results by Request Date or Submission Date.   - **requestDate** : Request Date   - **submissionDate**: Submission Date | [optional] [default to requestDate]
 **groupName** | **string**| Valid CyberSource Group Name.User can define groups using CBAPI and Group Management Module in EBC2. Groups are collection of organizationIds | [optional]
 **offset** | **int**| Offset of the Purchase and Refund Results. | [optional]
 **limit** | **int**| Results count per page. Range(1-2000) | [optional] [default to 2000]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json;charset=utf-8
 - **Accept**: application/hal+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

