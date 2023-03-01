<?php
/**
 * RenderingTaskDto
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\RenderingService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * RenderingService API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\RenderingService\Model;

use \ArrayAccess;
use \Aurigma\RenderingService\ObjectSerializer;

/**
 * RenderingTaskDto Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\RenderingService
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RenderingTaskDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RenderingTaskDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'id' => 'string',
        'name' => 'string',
        'namespace' => 'string',
        'type' => 'string',
        'input_artifacts' => 'string[]',
        'parameters' => 'array<string,mixed>',
        'output_artifacts' => 'string[]',
        'final_artifacts' => 'string[]',
        'status' => '\Aurigma\RenderingService\Model\RenderingTaskStatus',
        'requested' => '\DateTime',
        'started' => '\DateTime',
        'finished' => '\DateTime',
        'processing_timeout' => 'int',
        'auto_retry_count' => 'int',
        'long_execution' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'id' => null,
        'name' => null,
        'namespace' => null,
        'type' => null,
        'input_artifacts' => null,
        'parameters' => null,
        'output_artifacts' => null,
        'final_artifacts' => null,
        'status' => null,
        'requested' => 'date-time',
        'started' => 'date-time',
        'finished' => 'date-time',
        'processing_timeout' => 'int32',
        'auto_retry_count' => 'int32',
        'long_execution' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'description' => 'description',
        'id' => 'id',
        'name' => 'name',
        'namespace' => 'namespace',
        'type' => 'type',
        'input_artifacts' => 'inputArtifacts',
        'parameters' => 'parameters',
        'output_artifacts' => 'outputArtifacts',
        'final_artifacts' => 'finalArtifacts',
        'status' => 'status',
        'requested' => 'requested',
        'started' => 'started',
        'finished' => 'finished',
        'processing_timeout' => 'processingTimeout',
        'auto_retry_count' => 'autoRetryCount',
        'long_execution' => 'longExecution'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'id' => 'setId',
        'name' => 'setName',
        'namespace' => 'setNamespace',
        'type' => 'setType',
        'input_artifacts' => 'setInputArtifacts',
        'parameters' => 'setParameters',
        'output_artifacts' => 'setOutputArtifacts',
        'final_artifacts' => 'setFinalArtifacts',
        'status' => 'setStatus',
        'requested' => 'setRequested',
        'started' => 'setStarted',
        'finished' => 'setFinished',
        'processing_timeout' => 'setProcessingTimeout',
        'auto_retry_count' => 'setAutoRetryCount',
        'long_execution' => 'setLongExecution'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'id' => 'getId',
        'name' => 'getName',
        'namespace' => 'getNamespace',
        'type' => 'getType',
        'input_artifacts' => 'getInputArtifacts',
        'parameters' => 'getParameters',
        'output_artifacts' => 'getOutputArtifacts',
        'final_artifacts' => 'getFinalArtifacts',
        'status' => 'getStatus',
        'requested' => 'getRequested',
        'started' => 'getStarted',
        'finished' => 'getFinished',
        'processing_timeout' => 'getProcessingTimeout',
        'auto_retry_count' => 'getAutoRetryCount',
        'long_execution' => 'getLongExecution'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['description'] = $data['description'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['namespace'] = $data['namespace'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
        $this->container['input_artifacts'] = $data['input_artifacts'] ?? null;
        $this->container['parameters'] = $data['parameters'] ?? null;
        $this->container['output_artifacts'] = $data['output_artifacts'] ?? null;
        $this->container['final_artifacts'] = $data['final_artifacts'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['requested'] = $data['requested'] ?? null;
        $this->container['started'] = $data['started'] ?? null;
        $this->container['finished'] = $data['finished'] ?? null;
        $this->container['processing_timeout'] = $data['processing_timeout'] ?? null;
        $this->container['auto_retry_count'] = $data['auto_retry_count'] ?? null;
        $this->container['long_execution'] = $data['long_execution'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Rendering task description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Rendering task identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Rendering task name. It should be unique within job task list.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets namespace
     *
     * @return string|null
     */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
     * Sets namespace
     *
     * @param string|null $namespace Rendering task namespace. It is used to find appropriate task processor.
     *
     * @return self
     */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Rendering task type. It is used to find appropriate task processor.  ///
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets input_artifacts
     *
     * @return string[]|null
     */
    public function getInputArtifacts()
    {
        return $this->container['input_artifacts'];
    }

    /**
     * Sets input_artifacts
     *
     * @param string[]|null $input_artifacts Input artifacts alias list. Defines task arguments which should be taken from artifacts storage.
     *
     * @return self
     */
    public function setInputArtifacts($input_artifacts)
    {
        $this->container['input_artifacts'] = $input_artifacts;

        return $this;
    }

    /**
     * Gets parameters
     *
     * @return array<string,mixed>|null
     */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
     * Sets parameters
     *
     * @param array<string,mixed>|null $parameters Rendering task processing parameters.
     *
     * @return self
     */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;

        return $this;
    }

    /**
     * Gets output_artifacts
     *
     * @return string[]|null
     */
    public function getOutputArtifacts()
    {
        return $this->container['output_artifacts'];
    }

    /**
     * Sets output_artifacts
     *
     * @param string[]|null $output_artifacts Output artifacts alias list. Defines task results which should be saved in artifacts storage.
     *
     * @return self
     */
    public function setOutputArtifacts($output_artifacts)
    {
        $this->container['output_artifacts'] = $output_artifacts;

        return $this;
    }

    /**
     * Gets final_artifacts
     *
     * @return string[]|null
     */
    public function getFinalArtifacts()
    {
        return $this->container['final_artifacts'];
    }

    /**
     * Sets final_artifacts
     *
     * @param string[]|null $final_artifacts Final artifacts alias list. Defines which task results should be included in job results.
     *
     * @return self
     */
    public function setFinalArtifacts($final_artifacts)
    {
        $this->container['final_artifacts'] = $final_artifacts;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Aurigma\RenderingService\Model\RenderingTaskStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Aurigma\RenderingService\Model\RenderingTaskStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets requested
     *
     * @return \DateTime|null
     */
    public function getRequested()
    {
        return $this->container['requested'];
    }

    /**
     * Sets requested
     *
     * @param \DateTime|null $requested Rendering task 'processing requested' timestamp.
     *
     * @return self
     */
    public function setRequested($requested)
    {
        $this->container['requested'] = $requested;

        return $this;
    }

    /**
     * Gets started
     *
     * @return \DateTime|null
     */
    public function getStarted()
    {
        return $this->container['started'];
    }

    /**
     * Sets started
     *
     * @param \DateTime|null $started Rendering task 'processing started' timestamp.
     *
     * @return self
     */
    public function setStarted($started)
    {
        $this->container['started'] = $started;

        return $this;
    }

    /**
     * Gets finished
     *
     * @return \DateTime|null
     */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
     * Sets finished
     *
     * @param \DateTime|null $finished Rendering task 'processing completed' timestamp.
     *
     * @return self
     */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;

        return $this;
    }

    /**
     * Gets processing_timeout
     *
     * @return int|null
     */
    public function getProcessingTimeout()
    {
        return $this->container['processing_timeout'];
    }

    /**
     * Sets processing_timeout
     *
     * @param int|null $processing_timeout Rendering task processing timeout.
     *
     * @return self
     */
    public function setProcessingTimeout($processing_timeout)
    {
        $this->container['processing_timeout'] = $processing_timeout;

        return $this;
    }

    /**
     * Gets auto_retry_count
     *
     * @return int|null
     */
    public function getAutoRetryCount()
    {
        return $this->container['auto_retry_count'];
    }

    /**
     * Sets auto_retry_count
     *
     * @param int|null $auto_retry_count Rendering task automatic retry count value.
     *
     * @return self
     */
    public function setAutoRetryCount($auto_retry_count)
    {
        $this->container['auto_retry_count'] = $auto_retry_count;

        return $this;
    }

    /**
     * Gets long_execution
     *
     * @return bool|null
     */
    public function getLongExecution()
    {
        return $this->container['long_execution'];
    }

    /**
     * Sets long_execution
     *
     * @param bool|null $long_execution Rendering task 'long execution' tag.
     *
     * @return self
     */
    public function setLongExecution($long_execution)
    {
        $this->container['long_execution'] = $long_execution;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


