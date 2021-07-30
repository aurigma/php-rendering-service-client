# # RenderingJobDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**project** | [**\Aurigma\RenderingService\Model\ProjectInfo**](ProjectInfo.md) |  | [optional]
**tasks** | [**\Aurigma\RenderingService\Model\RenderingTask[]**](RenderingTask.md) | Rendering task list | [optional]
**status** | [**\Aurigma\RenderingService\Model\RenderingJobStatus**](RenderingJobStatus.md) |  | [optional]
**status_description** | **string** | Rendering job status description (error message if rendering job is in error state, otherwise empty) | [optional]
**created** | [**\DateTime**](\DateTime.md) | Rendering job creation timestamp | [optional]
**started** | [**\DateTime**](\DateTime.md) | Rendering job launch time stamp | [optional]
**finished** | [**\DateTime**](\DateTime.md) | Rendering job completion time stamp | [optional]
**tenant_id** | **int** | Entity tenant identifier | [optional]
**id** | **string** | Entity unique identifier | [optional]
**owner_id** | **string** | Entity owner identifier | [optional]
**last_modified** | [**\DateTime**](\DateTime.md) | Last entity modification date and time | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
