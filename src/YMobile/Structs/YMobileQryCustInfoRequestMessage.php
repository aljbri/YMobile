<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryCustInfoRequestMessage
 * This class stands for YMobileQryCustInfoRequestMessage originally named QryCustInfoRequestMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileQryCustInfoRequestMessage extends YMobileWsdlClass
{
    /**
     * The RequestHeader
     * @var YMobileRequestHeader
     */
    public $RequestHeader;
    /**
     * The QryCustInfoRequest
     * @var YMobileQryCustInfoRequest
     */
    public $QryCustInfoRequest;
    /**
     * Constructor method for QryCustInfoRequestMessage
     * @see parent::__construct()
     * @param YMobileRequestHeader $_requestHeader
     * @param YMobileQryCustInfoRequest $_qryCustInfoRequest
     * @return YMobileQryCustInfoRequestMessage
     */
    public function __construct($_requestHeader = NULL,$_qryCustInfoRequest = NULL)
    {
        parent::__construct(array('RequestHeader'=>$_requestHeader,'QryCustInfoRequest'=>$_qryCustInfoRequest),false);
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
     * Get QryCustInfoRequest value
     * @return YMobileQryCustInfoRequest|null
     */
    public function getQryCustInfoRequest()
    {
        return $this->QryCustInfoRequest;
    }
    /**
     * Set QryCustInfoRequest value
     * @param YMobileQryCustInfoRequest $_qryCustInfoRequest the QryCustInfoRequest
     * @return YMobileQryCustInfoRequest
     */
    public function setQryCustInfoRequest($_qryCustInfoRequest)
    {
        return ($this->QryCustInfoRequest = $_qryCustInfoRequest);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryCustInfoRequestMessage
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
