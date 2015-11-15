<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryAcctAmtRequestMessage
 * This class stands for YMobileQryAcctAmtRequestMessage originally named QryAcctAmtRequestMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileQryAcctAmtRequestMessage extends YMobileWsdlClass
{
    /**
     * The RequestHeader
     * @var YMobileRequestHeader
     */
    public $RequestHeader;
    /**
     * The QryAcctAmtRequest
     * @var YMobileQryAcctAmtRequest
     */
    public $QryAcctAmtRequest;
    /**
     * Constructor method for QryAcctAmtRequestMessage
     * @see parent::__construct()
     * @param YMobileRequestHeader $_requestHeader
     * @param YMobileQryAcctAmtRequest $_qryAcctAmtRequest
     * @return YMobileQryAcctAmtRequestMessage
     */
    public function __construct($_requestHeader = NULL,$_qryAcctAmtRequest = NULL)
    {
        parent::__construct(array('RequestHeader'=>$_requestHeader,'QryAcctAmtRequest'=>$_qryAcctAmtRequest),false);
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
     * Get QryAcctAmtRequest value
     * @return YMobileQryAcctAmtRequest|null
     */
    public function getQryAcctAmtRequest()
    {
        return $this->QryAcctAmtRequest;
    }
    /**
     * Set QryAcctAmtRequest value
     * @param YMobileQryAcctAmtRequest $_qryAcctAmtRequest the QryAcctAmtRequest
     * @return YMobileQryAcctAmtRequest
     */
    public function setQryAcctAmtRequest($_qryAcctAmtRequest)
    {
        return ($this->QryAcctAmtRequest = $_qryAcctAmtRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryAcctAmtRequestMessage
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
