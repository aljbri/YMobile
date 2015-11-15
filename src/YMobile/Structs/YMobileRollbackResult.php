<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileRollbackResult
 * This class stands for YMobileRollbackResult originally named RollbackResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileRollbackResult extends YMobileWsdlClass
{
    /**
     * The TranSerialNo
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * - maxLength : 24
     * @var string
     */
    public $TranSerialNo;
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The AcctAmt
     * @var long
     */
    public $AcctAmt;
    /**
     * Constructor method for RollbackResult
     * @see parent::__construct()
     * @param string $_tranSerialNo
     * @param string $_subscriberNo
     * @param long $_acctAmt
     * @return YMobileRollbackResult
     */
    public function __construct($_tranSerialNo = NULL,$_subscriberNo = NULL,$_acctAmt = NULL)
    {
        parent::__construct(array('TranSerialNo'=>$_tranSerialNo,'SubscriberNo'=>$_subscriberNo,'AcctAmt'=>$_acctAmt),false);
    }
    /**
     * Get TranSerialNo value
     * @return string|null
     */
    public function getTranSerialNo()
    {
        return $this->TranSerialNo;
    }
    /**
     * Set TranSerialNo value
     * @param string $_tranSerialNo the TranSerialNo
     * @return string
     */
    public function setTranSerialNo($_tranSerialNo)
    {
        return ($this->TranSerialNo = $_tranSerialNo);
    }
    /**
     * Get SubscriberNo value
     * @return string|null
     */
    public function getSubscriberNo()
    {
        return $this->SubscriberNo;
    }
    /**
     * Set SubscriberNo value
     * @param string $_subscriberNo the SubscriberNo
     * @return string
     */
    public function setSubscriberNo($_subscriberNo)
    {
        return ($this->SubscriberNo = $_subscriberNo);
    }
    /**
     * Get AcctAmt value
     * @return long|null
     */
    public function getAcctAmt()
    {
        return $this->AcctAmt;
    }
    /**
     * Set AcctAmt value
     * @param long $_acctAmt the AcctAmt
     * @return long
     */
    public function setAcctAmt($_acctAmt)
    {
        return ($this->AcctAmt = $_acctAmt);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileRollbackResult
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
