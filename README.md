# aiproductdataenhancer

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Gemini-Commerce/php-client-ai-product-data-enhancer.git"
    }
  ],
  "require": {
    "Gemini-Commerce/php-client-ai-product-data-enhancer": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/aiproductdataenhancer/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AiProductDataEnhancerApi* | [**aiProductDataEnhancerFillProductData**](docs/Api/AiProductDataEnhancerApi.md#aiproductdataenhancerfillproductdata) | **POST** /aiproductdataenhancer.AiProductDataEnhancer/FillProductData | 
*AiProductDataEnhancerApi* | [**aiProductDataEnhancerFillProductDataCheck**](docs/Api/AiProductDataEnhancerApi.md#aiproductdataenhancerfillproductdatacheck) | **POST** /aiproductdataenhancer.AiProductDataEnhancer/FillProductDataCheck | 
*AiProductDataEnhancerApi* | [**aiProductDataEnhancerTranslateData**](docs/Api/AiProductDataEnhancerApi.md#aiproductdataenhancertranslatedata) | **POST** /aiproductdataenhancer.AiProductDataEnhancer/TranslateData | 

## Models

- [AiproductdataenhancerDataToTranslate](docs/Model/AiproductdataenhancerDataToTranslate.md)
- [AiproductdataenhancerError](docs/Model/AiproductdataenhancerError.md)
- [AiproductdataenhancerFillProductDataCheckRequest](docs/Model/AiproductdataenhancerFillProductDataCheckRequest.md)
- [AiproductdataenhancerFillProductDataCheckResponse](docs/Model/AiproductdataenhancerFillProductDataCheckResponse.md)
- [AiproductdataenhancerFillProductDataRequest](docs/Model/AiproductdataenhancerFillProductDataRequest.md)
- [AiproductdataenhancerFillProductDataResponse](docs/Model/AiproductdataenhancerFillProductDataResponse.md)
- [AiproductdataenhancerJobStatus](docs/Model/AiproductdataenhancerJobStatus.md)
- [AiproductdataenhancerLanguageCode](docs/Model/AiproductdataenhancerLanguageCode.md)
- [AiproductdataenhancerProductDataToFill](docs/Model/AiproductdataenhancerProductDataToFill.md)
- [AiproductdataenhancerProductInformation](docs/Model/AiproductdataenhancerProductInformation.md)
- [AiproductdataenhancerTranslateDataRequest](docs/Model/AiproductdataenhancerTranslateDataRequest.md)
- [AiproductdataenhancerTranslateDataResponse](docs/Model/AiproductdataenhancerTranslateDataResponse.md)
- [ProtobufAny](docs/Model/ProtobufAny.md)
- [RpcStatus](docs/Model/RpcStatus.md)

## Authorization

Authentication schemes defined for the API:
### geminiAuthorization

- **Type**: API key
- **API key parameter name**: X-Gem-Token
- **Location**: HTTP header


### standardAuthorization

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `version not set`
    - Package version: `1.3.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
