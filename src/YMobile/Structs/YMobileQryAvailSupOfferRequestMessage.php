<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryAvailSupOfferRequestMessage
 * This class stands for YMobileQryAvailSupOfferRequestMessage originally named QryAvailSupOfferRequestMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileQryAvailSupOfferRequestMessage extends YMobileWsdlClass
{
    /**
     * The RequestHeader
     * @var YMobileRequestHeader
     */
    public $RequestHeader;
    /**
     * The QryAvailSupOfferRequest
     * @var YMobileQryAvailSupOfferRequest
     */
    public $QryAvailSupOfferRequest;
    /**
     * Constructor method for QryAvailSupOfferRequestMessage
     * @see parent::__construct()
     * @param YMobileRequestHeader $_requestHeader
     * @param YMobileQryAvailSupOfferRequest $_qryAvailSupOfferRequest
     * @return YMobileQryAvailSupOfferRequestMessage
     */
    public function __construct($_requestHeader = NULL,$_qryAvailSupOfferRequest = NULL)
    {
        parent::__construct(array('RequestHeader'=>$_requestHeader,'QryAvailSupOfferRequest'=>$_qryAvailSupOfferRequest),false);
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
     * Get QryAvailSupOfferRequest value
     * @return YMobileQryAvailSupOfferRequest|null
     */
    public function getQryAvailSupOfferRequest()
    {
        return $this->QryAvailSupOfferRequest;
    }
    /**
     * Set QryAvailSupOfferRequest value
     * @param YMobileQryAvailSupOfferRequest $_qryAvailSupOfferRequest the QryAvailSupOfferRequest
     * @return YMobileQryAvailSupOfferRequest
     */
    public function setQryAvailSupOfferRequest($_qryAvailSupOfferRequest)
    {
        return ($this->QryAvailSupOfferRequest = $_qryAvailSupOfferRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryAvailSupOfferRequestMessage
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
