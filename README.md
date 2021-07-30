# Aurigma Customer's Canvas SDK - Rendering Service Client
======================================================

This module is an Angular API client for Rendering service which is a part of [**Customer's Canvas**](https://customerscanvas.com) web-to-print system. It is supposed that you are familiar with its services and understand how to use its APIs. To learn more about Customer's Canvas and its services, refer the [Getting Started section of its documentation](https://customerscanvas.com/dev/getting-started/intro.html).

## Pre-requisites

To be able to use this package, you need to meet the following requirements: 

* You must have an account at Customer's Canvas.
* You need to use it in Angular applications **only**. 

For other platforms, see the [Backend services](https://customerscanvas.com/dev/getting-started/about-backend-services.html) article in Customer's Canvas documentation. 

## Installation

```
composer require aurigma/php-rendering-service-client
```

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/aurigma/php-rendering-service-client.git"
    }
  ],
  "require": {
    "aurigma/php-rendering-service-client": "*@dev"
  }
}
```

Then run `composer install`

## Getting Started

Please follow the [installation procedure](#installation).

Receive an access token through your backend as explained in the [documentation](https://customerscanvas.com/dev/getting-started/about-backend-services.html#authorization) and deliver it to your app. 

Then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new OpenAPI\Client\Api\BuildInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->buildInfoGetInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BuildInfoApi->buildInfoGetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BuildInfoApi* | [**buildInfoGetInfo**](docs/Api/BuildInfoApi.md#buildinfogetinfo) | **GET** /api/rendering/v1/info | Gets assembly build info
*BuildInfoApi* | [**buildInfoHeadInfo**](docs/Api/BuildInfoApi.md#buildinfoheadinfo) | **HEAD** /api/rendering/v1/info | Gets assembly build info
*RenderingJobsApi* | [**renderingJobsCreate**](docs/Api/RenderingJobsApi.md#renderingjobscreate) | **POST** /api/rendering/v1/jobs | Creates new rendering job and starts execution
*RenderingJobsApi* | [**renderingJobsDelete**](docs/Api/RenderingJobsApi.md#renderingjobsdelete) | **DELETE** /api/rendering/v1/jobs/{id} | Deletes specified rendering job
*RenderingJobsApi* | [**renderingJobsDiscard**](docs/Api/RenderingJobsApi.md#renderingjobsdiscard) | **POST** /api/rendering/v1/jobs/{id}/discard | Discards specified rendering job and prevents execution of a next task
*RenderingJobsApi* | [**renderingJobsGet**](docs/Api/RenderingJobsApi.md#renderingjobsget) | **GET** /api/rendering/v1/jobs/{id} | Gets rendering job by id
*RenderingJobsApi* | [**renderingJobsGetAll**](docs/Api/RenderingJobsApi.md#renderingjobsgetall) | **GET** /api/rendering/v1/jobs | Gets all entities relevant to specified query parameters
*RenderingJobsApi* | [**renderingJobsRecover**](docs/Api/RenderingJobsApi.md#renderingjobsrecover) | **POST** /api/rendering/v1/jobs/{id}/recover | Recovers specified rendering job and continues execution

## Models

- [BuildInfoModel](docs/Model/BuildInfoModel.md)
- [CreateRenderingJobDto](docs/Model/CreateRenderingJobDto.md)
- [CreateRenderingTaskDto](docs/Model/CreateRenderingTaskDto.md)
- [PagedOfRenderingJobDto](docs/Model/PagedOfRenderingJobDto.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ProductSpecifiationInfo](docs/Model/ProductSpecifiationInfo.md)
- [ProjectInfo](docs/Model/ProjectInfo.md)
- [ProjectItemInfo](docs/Model/ProjectItemInfo.md)
- [RenderingJobDto](docs/Model/RenderingJobDto.md)
- [RenderingJobStatus](docs/Model/RenderingJobStatus.md)
- [RenderingTask](docs/Model/RenderingTask.md)
- [RenderingTaskStatus](docs/Model/RenderingTaskStatus.md)
