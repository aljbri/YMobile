<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryCurrSupOfferResultMessage
 * This class stands for YMobileQryCurrSupOfferResultMessage originally named QryCurrSupOfferResultMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileQryCurrSupOfferResultMessage extends YMobileWsdlClass
{
    /**
     * The ResultHeader
     * @var YMobileResultHeader
     */
    public $ResultHeader;
    /**
     * The QryCurrSupOfferResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var YMobileQryCurrSupOfferResult
     */
    public $QryCurrSupOfferResult;
    /**
     * Constructor method for QryCurrSupOfferResultMessage
     * @see parent::__construct()
     * @param YMobileResultHeader $_resultHeader
     * @param YMobileQryCurrSupOfferResult $_qryCurrSupOfferResult
     * @return YMobileQryCurrSupOfferResultMessage
     */
    public function __construct($_resultHeader = NULL,$_qryCurrSupOfferResult = NULL)
    {
        parent::__construct(array('ResultHeader'=>$_resultHeader,'QryCurrSupOfferResult'=>$_qryCurrSupOfferResult),false);
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
     * Get QryCurrSupOfferResult value
     * @return YMobileQryCurrSupOfferResult|null
     */
    public function getQryCurrSupOfferResult()
    {
        return $this->QryCurrSupOfferResult;
    }
    /**
     * Set QryCurrSupOfferResult value
     * @param YMobileQryCurrSupOfferResult $_qryCurrSupOfferResult the QryCurrSupOfferResult
     * @return YMobileQryCurrSupOfferResult
     */
    public function setQryCurrSupOfferResult($_qryCurrSupOfferResult)
    {
        return ($this->QryCurrSupOfferResult = $_qryCurrSupOfferResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryCurrSupOfferResultMessage
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
