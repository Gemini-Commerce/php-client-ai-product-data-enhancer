# GeminiCommerce\AiProductDataEnhancer\AiProductDataEnhancerApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**aiProductDataEnhancerFillProductData()**](AiProductDataEnhancerApi.md#aiProductDataEnhancerFillProductData) | **POST** /aiproductdataenhancer.AiProductDataEnhancer/FillProductData |  |


## `aiProductDataEnhancerFillProductData()`

```php
aiProductDataEnhancerFillProductData($body): \GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerFillProductDataResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new GeminiCommerce\AiProductDataEnhancer\Api\AiProductDataEnhancerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerFillProductDataRequest(); // \GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerFillProductDataRequest

try {
    $result = $apiInstance->aiProductDataEnhancerFillProductData($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AiProductDataEnhancerApi->aiProductDataEnhancerFillProductData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerFillProductDataRequest**](../Model/AiproductdataenhancerFillProductDataRequest.md)|  | |

### Return type

[**\GeminiCommerce\AiProductDataEnhancer\Model\AiproductdataenhancerFillProductDataResponse**](../Model/AiproductdataenhancerFillProductDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
