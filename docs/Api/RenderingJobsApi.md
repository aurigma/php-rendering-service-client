# Aurigma\RenderingService\RenderingJobsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**renderingJobsCreate()**](RenderingJobsApi.md#renderingJobsCreate) | **POST** /api/rendering/v1/jobs | Creates new rendering job and starts execution
[**renderingJobsDelete()**](RenderingJobsApi.md#renderingJobsDelete) | **DELETE** /api/rendering/v1/jobs/{id} | Deletes specified rendering job
[**renderingJobsDiscard()**](RenderingJobsApi.md#renderingJobsDiscard) | **POST** /api/rendering/v1/jobs/{id}/discard | Discards specified rendering job and prevents execution of a next task
[**renderingJobsGet()**](RenderingJobsApi.md#renderingJobsGet) | **GET** /api/rendering/v1/jobs/{id} | Gets rendering job by id
[**renderingJobsGetAll()**](RenderingJobsApi.md#renderingJobsGetAll) | **GET** /api/rendering/v1/jobs | Gets all entities relevant to specified query parameters
[**renderingJobsRecover()**](RenderingJobsApi.md#renderingJobsRecover) | **POST** /api/rendering/v1/jobs/{id}/recover | Recovers specified rendering job and continues execution


## `renderingJobsCreate()`

```php
renderingJobsCreate($tenant_id, $user_id, $create_rendering_job_dto): \Aurigma\RenderingService\Model\RenderingJobDto
```

Creates new rendering job and starts execution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\RenderingService\Api\RenderingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Rendering job owner
$create_rendering_job_dto = new \Aurigma\RenderingService\Model\CreateRenderingJobDto(); // \Aurigma\RenderingService\Model\CreateRenderingJobDto | Create operation parameters

try {
    $result = $apiInstance->renderingJobsCreate($tenant_id, $user_id, $create_rendering_job_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderingJobsApi->renderingJobsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Rendering job owner | [optional]
 **create_rendering_job_dto** | [**\Aurigma\RenderingService\Model\CreateRenderingJobDto**](../Model/CreateRenderingJobDto.md)| Create operation parameters | [optional]

### Return type

[**\Aurigma\RenderingService\Model\RenderingJobDto**](../Model/RenderingJobDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderingJobsDelete()`

```php
renderingJobsDelete($id, $tenant_id): \Aurigma\RenderingService\Model\RenderingJobDto
```

Deletes specified rendering job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\RenderingService\Api\RenderingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Rendering job unique identifier
$tenant_id = 56; // int | Tenant identifier

try {
    $result = $apiInstance->renderingJobsDelete($id, $tenant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderingJobsApi->renderingJobsDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Rendering job unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]

### Return type

[**\Aurigma\RenderingService\Model\RenderingJobDto**](../Model/RenderingJobDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderingJobsDiscard()`

```php
renderingJobsDiscard($id, $tenant_id, $user_id): bool
```

Discards specified rendering job and prevents execution of a next task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\RenderingService\Api\RenderingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Rendering job unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Rendering job owner

try {
    $result = $apiInstance->renderingJobsDiscard($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderingJobsApi->renderingJobsDiscard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Rendering job unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Rendering job owner | [optional]

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderingJobsGet()`

```php
renderingJobsGet($id, $tenant_id, $user_id): \Aurigma\RenderingService\Model\RenderingJobDto
```

Gets rendering job by id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\RenderingService\Api\RenderingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Rendering job unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Rendering job owner

try {
    $result = $apiInstance->renderingJobsGet($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderingJobsApi->renderingJobsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Rendering job unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Rendering job owner | [optional]

### Return type

[**\Aurigma\RenderingService\Model\RenderingJobDto**](../Model/RenderingJobDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderingJobsGetAll()`

```php
renderingJobsGetAll($status, $skip, $take, $sorting, $tenant_id, $user_id): \Aurigma\RenderingService\Model\PagedOfRenderingJobDto
```

Gets all entities relevant to specified query parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\RenderingService\Api\RenderingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = new \Aurigma\RenderingService\Model\\Aurigma\RenderingService\Model\RenderingJobStatus(); // \Aurigma\RenderingService\Model\RenderingJobStatus
$skip = 56; // int | Defines page start offset from beginning of sorted result list
$take = 56; // int | Defines page length (how much consequent items of sorted result list should be taken)
$sorting = 'sorting_example'; // string | Defines sorting order of result list e.g.: \"Title ASC, LastModified DESC\"
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Rendering job owner

try {
    $result = $apiInstance->renderingJobsGetAll($status, $skip, $take, $sorting, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderingJobsApi->renderingJobsGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**\Aurigma\RenderingService\Model\RenderingJobStatus**](../Model/.md)|  | [optional]
 **skip** | **int**| Defines page start offset from beginning of sorted result list | [optional]
 **take** | **int**| Defines page length (how much consequent items of sorted result list should be taken) | [optional]
 **sorting** | **string**| Defines sorting order of result list e.g.: \&quot;Title ASC, LastModified DESC\&quot; | [optional]
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Rendering job owner | [optional]

### Return type

[**\Aurigma\RenderingService\Model\PagedOfRenderingJobDto**](../Model/PagedOfRenderingJobDto.md)

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderingJobsRecover()`

```php
renderingJobsRecover($id, $tenant_id, $user_id): bool
```

Recovers specified rendering job and continues execution

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-Key', 'Bearer');

// Configure OAuth2 access token for authorization: oauth2
$config = Aurigma\RenderingService\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Aurigma\RenderingService\Api\RenderingJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Rendering job unique identifier
$tenant_id = 56; // int | Tenant identifier
$user_id = 'user_id_example'; // string | Rendering job owner

try {
    $result = $apiInstance->renderingJobsRecover($id, $tenant_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenderingJobsApi->renderingJobsRecover: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Rendering job unique identifier |
 **tenant_id** | **int**| Tenant identifier | [optional]
 **user_id** | **string**| Rendering job owner | [optional]

### Return type

**bool**

### Authorization

[apiKey](../../README.md#apiKey), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
