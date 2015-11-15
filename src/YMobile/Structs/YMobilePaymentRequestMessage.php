<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobilePaymentRequestMessage
 * This class stands for YMobilePaymentRequestMessage originally named PaymentRequestMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobilePaymentRequestMessage extends YMobileWsdlClass
{
    /**
     * The RequestHeader
     * @var YMobileRequestHeader
     */
    public $RequestHeader;
    /**
     * The PaymentRequest
     * @var YMobilePaymentRequest
     */
    public $PaymentRequest;
    /**
     * Constructor method for PaymentRequestMessage
     * @see parent::__construct()
     * @param YMobileRequestHeader $_requestHeader
     * @param YMobilePaymentRequest $_paymentRequest
     * @return YMobilePaymentRequestMessage
     */
    public function __construct($_requestHeader = NULL,$_paymentRequest = NULL)
    {
        parent::__construct(array('RequestHeader'=>$_requestHeader,'PaymentRequest'=>$_paymentRequest),false);
    }
    /**
     * Get RequestHeader value
     * @return YMobileRequestHeader|null
     */
    public function getRequestHeader()
    {
        return $this->RequestHeader;
    }
    /**
     * Set RequestHeader value
     * @param YMobileRequestHeader $_requestHeader the RequestHeader
     * @return YMobileRequestHeader
     */
    public function setRequestHeader($_requestHeader)
    {
        return ($this->RequestHeader = $_requestHeader);
    }
    /**
     * Get PaymentRequest value
     * @return YMobilePaymentRequest|null
     */
    public function getPaymentRequest()
    {
        return $this->PaymentRequest;
    }
    /**
     * Set PaymentRequest value
     * @param YMobilePaymentRequest $_paymentRequest the PaymentRequest
     * @return YMobilePaymentRequest
     */
    public function setPaymentRequest($_paymentRequest)
    {
        return ($this->PaymentRequest = $_paymentRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobilePaymentRequestMessage
     */
    public static function __set_state(array $_array,$_className = __CLASS__)
    {
        return parent::__set_state($_array,$_className);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
