<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileChgSupOfferRequestMessage
 * This class stands for YMobileChgSupOfferRequestMessage originally named ChgSupOfferRequestMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileChgSupOfferRequestMessage extends YMobileWsdlClass
{
    /**
     * The RequestHeader
     * @var YMobileRequestHeader
     */
    public $RequestHeader;
    /**
     * The ChgSupOfferRequest
     * @var YMobileChgSupOfferRequest
     */
    public $ChgSupOfferRequest;
    /**
     * Constructor method for ChgSupOfferRequestMessage
     * @see parent::__construct()
     * @param YMobileRequestHeader $_requestHeader
     * @param YMobileChgSupOfferRequest $_chgSupOfferRequest
     * @return YMobileChgSupOfferRequestMessage
     */
    public function __construct($_requestHeader = NULL,$_chgSupOfferRequest = NULL)
    {
        parent::__construct(array('RequestHeader'=>$_requestHeader,'ChgSupOfferRequest'=>$_chgSupOfferRequest),false);
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
     * Get ChgSupOfferRequest value
     * @return YMobileChgSupOfferRequest|null
     */
    public function getChgSupOfferRequest()
    {
        return $this->ChgSupOfferRequest;
    }
    /**
     * Set ChgSupOfferRequest value
     * @param YMobileChgSupOfferRequest $_chgSupOfferRequest the ChgSupOfferRequest
     * @return YMobileChgSupOfferRequest
     */
    public function setChgSupOfferRequest($_chgSupOfferRequest)
    {
        return ($this->ChgSupOfferRequest = $_chgSupOfferRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileChgSupOfferRequestMessage
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
