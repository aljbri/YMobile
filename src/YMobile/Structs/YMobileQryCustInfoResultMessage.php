<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryCustInfoResultMessage
 * This class stands for YMobileQryCustInfoResultMessage originally named QryCustInfoResultMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileQryCustInfoResultMessage extends YMobileWsdlClass
{
    /**
     * The ResultHeader
     * @var YMobileResultHeader
     */
    public $ResultHeader;
    /**
     * The QryCustInfoResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var YMobileQryCustInfoResult
     */
    public $QryCustInfoResult;
    /**
     * Constructor method for QryCustInfoResultMessage
     * @see parent::__construct()
     * @param YMobileResultHeader $_resultHeader
     * @param YMobileQryCustInfoResult $_qryCustInfoResult
     * @return YMobileQryCustInfoResultMessage
     */
    public function __construct($_resultHeader = NULL,$_qryCustInfoResult = NULL)
    {
        parent::__construct(array('ResultHeader'=>$_resultHeader,'QryCustInfoResult'=>$_qryCustInfoResult),false);
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
     * Get QryCustInfoResult value
     * @return YMobileQryCustInfoResult|null
     */
    public function getQryCustInfoResult()
    {
        return $this->QryCustInfoResult;
    }
    /**
     * Set QryCustInfoResult value
     * @param YMobileQryCustInfoResult $_qryCustInfoResult the QryCustInfoResult
     * @return YMobileQryCustInfoResult
     */
    public function setQryCustInfoResult($_qryCustInfoResult)
    {
        return ($this->QryCustInfoResult = $_qryCustInfoResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryCustInfoResultMessage
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
