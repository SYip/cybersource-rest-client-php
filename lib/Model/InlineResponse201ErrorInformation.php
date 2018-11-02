<?php
/**
 * InlineResponse201ErrorInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * InlineResponse201ErrorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse201ErrorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_errorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'reason' => 'string',
        'message' => 'string',
        'details' => '\CyberSource\Model\InlineResponse201ErrorInformationDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'reason' => null,
        'message' => null,
        'details' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'reason' => 'reason',
        'message' => 'message',
        'details' => 'details'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'reason' => 'setReason',
        'message' => 'setMessage',
        'details' => 'setDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'reason' => 'getReason',
        'message' => 'getMessage',
        'details' => 'getDetails'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const REASON_AVS_FAILED = 'AVS_FAILED';
    const REASON_CONTACT_PROCESSOR = 'CONTACT_PROCESSOR';
    const REASON_CV_FAILED = 'CV_FAILED';
    const REASON_EXPIRED_CARD = 'EXPIRED_CARD';
    const REASON_PROCESSOR_DECLINED = 'PROCESSOR_DECLINED';
    const REASON_INSUFFICIENT_FUND = 'INSUFFICIENT_FUND';
    const REASON_STOLEN_LOST_CARD = 'STOLEN_LOST_CARD';
    const REASON_ISSUER_UNAVAILABLE = 'ISSUER_UNAVAILABLE';
    const REASON_UNAUTHORIZED_CARD = 'UNAUTHORIZED_CARD';
    const REASON_CVN_NOT_MATCH = 'CVN_NOT_MATCH';
    const REASON_EXCEEDS_CREDIT_LIMIT = 'EXCEEDS_CREDIT_LIMIT';
    const REASON_INVALID_CVN = 'INVALID_CVN';
    const REASON_PAYMENT_REFUSED = 'PAYMENT_REFUSED';
    const REASON_INVALID_ACCOUNT = 'INVALID_ACCOUNT';
    const REASON_GENERAL_DECLINE = 'GENERAL_DECLINE';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_AVS_FAILED,
            self::REASON_CONTACT_PROCESSOR,
            self::REASON_CV_FAILED,
            self::REASON_EXPIRED_CARD,
            self::REASON_PROCESSOR_DECLINED,
            self::REASON_INSUFFICIENT_FUND,
            self::REASON_STOLEN_LOST_CARD,
            self::REASON_ISSUER_UNAVAILABLE,
            self::REASON_UNAUTHORIZED_CARD,
            self::REASON_CVN_NOT_MATCH,
            self::REASON_EXCEEDS_CREDIT_LIMIT,
            self::REASON_INVALID_CVN,
            self::REASON_PAYMENT_REFUSED,
            self::REASON_INVALID_ACCOUNT,
            self::REASON_GENERAL_DECLINE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getReasonAllowableValues();
        if (!in_array($this->container['reason'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getReasonAllowableValues();
        if (!in_array($this->container['reason'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets reason
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     * @param string $reason The reason of the status.
     * @return $this
     */
    public function setReason($reason)
    {
        $allowed_values = $this->getReasonAllowableValues();
        if (!is_null($reason) && !in_array($reason, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     * @param string $message The detail message related to the status and reason listed above.
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets details
     * @return \CyberSource\Model\InlineResponse201ErrorInformationDetails[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param \CyberSource\Model\InlineResponse201ErrorInformationDetails[] $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}

