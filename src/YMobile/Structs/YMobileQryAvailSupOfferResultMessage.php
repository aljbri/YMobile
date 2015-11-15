<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryAvailSupOfferResultMessage
 * This class stands for YMobileQryAvailSupOfferResultMessage originally named QryAvailSupOfferResultMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileQryAvailSupOfferResultMessage extends YMobileWsdlClass
{
    /**
     * The ResultHeader
     * @var YMobileResultHeader
     */
    public $ResultHeader;
    /**
     * The QryAvailSupOfferResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var YMobileQryAvailSupOfferResult
     */
    public $QryAvailSupOfferResult;
    /**
     * Constructor method for QryAvailSupOfferResultMessage
     * @see parent::__construct()
     * @param YMobileResultHeader $_resultHeader
     * @param YMobileQryAvailSupOfferResult $_qryAvailSupOfferResult
     * @return YMobileQryAvailSupOfferResultMessage
     */
    public function __construct($_resultHeader = NULL,$_qryAvailSupOfferResult = NULL)
    {
        parent::__construct(array('ResultHeader'=>$_resultHeader,'QryAvailSupOfferResult'=>$_qryAvailSupOfferResult),false);
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
     * Get QryAvailSupOfferResult value
     * @return YMobileQryAvailSupOfferResult|null
     */
    public function getQryAvailSupOfferResult()
    {
        return $this->QryAvailSupOfferResult;
    }
    /**
     * Set QryAvailSupOfferResult value
     * @param YMobileQryAvailSupOfferResult $_qryAvailSupOfferResult the QryAvailSupOfferResult
     * @return YMobileQryAvailSupOfferResult
     */
    public function setQryAvailSupOfferResult($_qryAvailSupOfferResult)
    {
        return ($this->QryAvailSupOfferResult = $_qryAvailSupOfferResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryAvailSupOfferResultMessage
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
