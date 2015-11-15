<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryCurrSupOfferRequestMessage
 * This class stands for YMobileQryCurrSupOfferRequestMessage originally named QryCurrSupOfferRequestMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileQryCurrSupOfferRequestMessage extends YMobileWsdlClass
{
    /**
     * The RequestHeader
     * @var YMobileRequestHeader
     */
    public $RequestHeader;
    /**
     * The QryCurrSupOfferRequest
     * @var YMobileQryCurrSupOfferRequest
     */
    public $QryCurrSupOfferRequest;
    /**
     * Constructor method for QryCurrSupOfferRequestMessage
     * @see parent::__construct()
     * @param YMobileRequestHeader $_requestHeader
     * @param YMobileQryCurrSupOfferRequest $_qryCurrSupOfferRequest
     * @return YMobileQryCurrSupOfferRequestMessage
     */
    public function __construct($_requestHeader = NULL,$_qryCurrSupOfferRequest = NULL)
    {
        parent::__construct(array('RequestHeader'=>$_requestHeader,'QryCurrSupOfferRequest'=>$_qryCurrSupOfferRequest),false);
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
     * Get QryCurrSupOfferRequest value
     * @return YMobileQryCurrSupOfferRequest|null
     */
    public function getQryCurrSupOfferRequest()
    {
        return $this->QryCurrSupOfferRequest;
    }
    /**
     * Set QryCurrSupOfferRequest value
     * @param YMobileQryCurrSupOfferRequest $_qryCurrSupOfferRequest the QryCurrSupOfferRequest
     * @return YMobileQryCurrSupOfferRequest
     */
    public function setQryCurrSupOfferRequest($_qryCurrSupOfferRequest)
    {
        return ($this->QryCurrSupOfferRequest = $_qryCurrSupOfferRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryCurrSupOfferRequestMessage
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
