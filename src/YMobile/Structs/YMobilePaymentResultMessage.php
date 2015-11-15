<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobilePaymentResultMessage
 * This class stands for YMobilePaymentResultMessage originally named PaymentResultMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobilePaymentResultMessage extends YMobileWsdlClass
{
    /**
     * The ResultHeader
     * @var YMobileResultHeader
     */
    public $ResultHeader;
    /**
     * The PaymentResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var YMobilePaymentResult
     */
    public $PaymentResult;
    /**
     * Constructor method for PaymentResultMessage
     * @see parent::__construct()
     * @param YMobileResultHeader $_resultHeader
     * @param YMobilePaymentResult $_paymentResult
     * @return YMobilePaymentResultMessage
     */
    public function __construct($_resultHeader = NULL,$_paymentResult = NULL)
    {
        parent::__construct(array('ResultHeader'=>$_resultHeader,'PaymentResult'=>$_paymentResult),false);
    }
    /**
     * Get ResultHeader value
     * @return YMobileResultHeader|null
     */
    public function getResultHeader()
    {
        return $this->ResultHeader;
    }
    /**
     * Set ResultHeader value
     * @param YMobileResultHeader $_resultHeader the ResultHeader
     * @return YMobileResultHeader
     */
    public function setResultHeader($_resultHeader)
    {
        return ($this->ResultHeader = $_resultHeader);
    }
    /**
     * Get PaymentResult value
     * @return YMobilePaymentResult|null
     */
    public function getPaymentResult()
    {
        return $this->PaymentResult;
    }
    /**
     * Set PaymentResult value
     * @param YMobilePaymentResult $_paymentResult the PaymentResult
     * @return YMobilePaymentResult
     */
    public function setPaymentResult($_paymentResult)
    {
        return ($this->PaymentResult = $_paymentResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobilePaymentResultMessage
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
