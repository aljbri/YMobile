<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryAcctAmtResultMessage
 * This class stands for YMobileQryAcctAmtResultMessage originally named QryAcctAmtResultMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileQryAcctAmtResultMessage extends YMobileWsdlClass
{
    /**
     * The ResultHeader
     * @var YMobileResultHeader
     */
    public $ResultHeader;
    /**
     * The QryAcctAmtResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var YMobileQryAcctAmtResult
     */
    public $QryAcctAmtResult;
    /**
     * Constructor method for QryAcctAmtResultMessage
     * @see parent::__construct()
     * @param YMobileResultHeader $_resultHeader
     * @param YMobileQryAcctAmtResult $_qryAcctAmtResult
     * @return YMobileQryAcctAmtResultMessage
     */
    public function __construct($_resultHeader = NULL,$_qryAcctAmtResult = NULL)
    {
        parent::__construct(array('ResultHeader'=>$_resultHeader,'QryAcctAmtResult'=>$_qryAcctAmtResult),false);
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
     * Get QryAcctAmtResult value
     * @return YMobileQryAcctAmtResult|null
     */
    public function getQryAcctAmtResult()
    {
        return $this->QryAcctAmtResult;
    }
    /**
     * Set QryAcctAmtResult value
     * @param YMobileQryAcctAmtResult $_qryAcctAmtResult the QryAcctAmtResult
     * @return YMobileQryAcctAmtResult
     */
    public function setQryAcctAmtResult($_qryAcctAmtResult)
    {
        return ($this->QryAcctAmtResult = $_qryAcctAmtResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryAcctAmtResultMessage
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
