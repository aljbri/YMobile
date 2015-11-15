<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileRollbackResultMessage
 * This class stands for YMobileRollbackResultMessage originally named RollbackResultMessage
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileRollbackResultMessage extends YMobileWsdlClass
{
    /**
     * The ResultHeader
     * @var YMobileResultHeader
     */
    public $ResultHeader;
    /**
     * The RollbackResult
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var YMobileRollbackResult
     */
    public $RollbackResult;
    /**
     * Constructor method for RollbackResultMessage
     * @see parent::__construct()
     * @param YMobileResultHeader $_resultHeader
     * @param YMobileRollbackResult $_rollbackResult
     * @return YMobileRollbackResultMessage
     */
    public function __construct($_resultHeader = NULL,$_rollbackResult = NULL)
    {
        parent::__construct(array('ResultHeader'=>$_resultHeader,'RollbackResult'=>$_rollbackResult),false);
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
     * Get RollbackResult value
     * @return YMobileRollbackResult|null
     */
    public function getRollbackResult()
    {
        return $this->RollbackResult;
    }
    /**
     * Set RollbackResult value
     * @param YMobileRollbackResult $_rollbackResult the RollbackResult
     * @return YMobileRollbackResult
     */
    public function setRollbackResult($_rollbackResult)
    {
        return ($this->RollbackResult = $_rollbackResult);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileRollbackResultMessage
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
