<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileRollbackRequest
 * This class stands for YMobileRollbackRequest originally named RollbackRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileRollbackRequest extends YMobileWsdlClass
{
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The OriginalTranSerialNo
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * - maxLength : 24
     * @var string
     */
    public $OriginalTranSerialNo;
    /**
     * The ReasonCode
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * - maxLength : 12
     * @var string
     */
    public $ReasonCode;
    /**
     * Constructor method for RollbackRequest
     * @see parent::__construct()
     * @param string $_subscriberNo
     * @param string $_originalTranSerialNo
     * @param string $_reasonCode
     * @return YMobileRollbackRequest
     */
    public function __construct($_subscriberNo = NULL,$_originalTranSerialNo = NULL,$_reasonCode = NULL)
    {
        parent::__construct(array('SubscriberNo'=>$_subscriberNo,'OriginalTranSerialNo'=>$_originalTranSerialNo,'ReasonCode'=>$_reasonCode),false);
    }
    /**
     * Get SubscriberNo value
     * @return string|null
     */
    public function getSubscriberNo()
    {
        return $this->SubscriberNo;
    }
    /**
     * Set SubscriberNo value
     * @param string $_subscriberNo the SubscriberNo
     * @return string
     */
    public function setSubscriberNo($_subscriberNo)
    {
        return ($this->SubscriberNo = $_subscriberNo);
    }
    /**
     * Get OriginalTranSerialNo value
     * @return string|null
     */
    public function getOriginalTranSerialNo()
    {
        return $this->OriginalTranSerialNo;
    }
    /**
     * Set OriginalTranSerialNo value
     * @param string $_originalTranSerialNo the OriginalTranSerialNo
     * @return string
     */
    public function setOriginalTranSerialNo($_originalTranSerialNo)
    {
        return ($this->OriginalTranSerialNo = $_originalTranSerialNo);
    }
    /**
     * Get ReasonCode value
     * @return string|null
     */
    public function getReasonCode()
    {
        return $this->ReasonCode;
    }
    /**
     * Set ReasonCode value
     * @param string $_reasonCode the ReasonCode
     * @return string
     */
    public function setReasonCode($_reasonCode)
    {
        return ($this->ReasonCode = $_reasonCode);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileRollbackRequest
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
