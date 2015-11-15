<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileChgSupOfferResultMessage
 * This class stands for YMobileChgSupOfferResultMessage originally named ChgSupOfferResultMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileChgSupOfferResultMessage extends YMobileWsdlClass
{
    /**
     * The ResultHeader
     * @var YMobileResultHeader
     */
    public $ResultHeader;
    /**
     * The ChgSupOfferResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var YMobileChgSupOfferResult
     */
    public $ChgSupOfferResult;
    /**
     * Constructor method for ChgSupOfferResultMessage
     * @see parent::__construct()
     * @param YMobileResultHeader $_resultHeader
     * @param YMobileChgSupOfferResult $_chgSupOfferResult
     * @return YMobileChgSupOfferResultMessage
     */
    public function __construct($_resultHeader = NULL,$_chgSupOfferResult = NULL)
    {
        parent::__construct(array('ResultHeader'=>$_resultHeader,'ChgSupOfferResult'=>$_chgSupOfferResult),false);
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
     * Get ChgSupOfferResult value
     * @return YMobileChgSupOfferResult|null
     */
    public function getChgSupOfferResult()
    {
        return $this->ChgSupOfferResult;
    }
    /**
     * Set ChgSupOfferResult value
     * @param YMobileChgSupOfferResult $_chgSupOfferResult the ChgSupOfferResult
     * @return YMobileChgSupOfferResult
     */
    public function setChgSupOfferResult($_chgSupOfferResult)
    {
        return ($this->ChgSupOfferResult = $_chgSupOfferResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileChgSupOfferResultMessage
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
