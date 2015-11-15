<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileRollbackRequestMessage
 * This class stands for YMobileRollbackRequestMessage originally named RollbackRequestMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileRollbackRequestMessage extends YMobileWsdlClass
{
    /**
     * The RequestHeader
     * @var YMobileRequestHeader
     */
    public $RequestHeader;
    /**
     * The RollbackRequest
     * @var YMobileRollbackRequest
     */
    public $RollbackRequest;
    /**
     * Constructor method for RollbackRequestMessage
     * @see parent::__construct()
     * @param YMobileRequestHeader $_requestHeader
     * @param YMobileRollbackRequest $_rollbackRequest
     * @return YMobileRollbackRequestMessage
     */
    public function __construct($_requestHeader = NULL,$_rollbackRequest = NULL)
    {
        parent::__construct(array('RequestHeader'=>$_requestHeader,'RollbackRequest'=>$_rollbackRequest),false);
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
     * Get RollbackRequest value
     * @return YMobileRollbackRequest|null
     */
    public function getRollbackRequest()
    {
        return $this->RollbackRequest;
    }
    /**
     * Set RollbackRequest value
     * @param YMobileRollbackRequest $_rollbackRequest the RollbackRequest
     * @return YMobileRollbackRequest
     */
    public function setRollbackRequest($_rollbackRequest)
    {
        return ($this->RollbackRequest = $_rollbackRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileRollbackRequestMessage
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
