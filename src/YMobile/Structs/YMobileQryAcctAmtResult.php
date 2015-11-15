<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryAcctAmtResult
 * This class stands for YMobileQryAcctAmtResult originally named QryAcctAmtResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileQryAcctAmtResult extends YMobileWsdlClass
{
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The Balance
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $Balance;
    /**
     * The AvailCredit
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $AvailCredit;
    /**
     * The Arrear
     * Meta informations extracted from the WSDL
     * - minOccurs : 0
     * @var long
     */
    public $Arrear;
    /**
     * Constructor method for QryAcctAmtResult
     * @see parent::__construct()
     * @param string $_subscriberNo
     * @param long $_balance
     * @param long $_availCredit
     * @param long $_arrear
     * @return YMobileQryAcctAmtResult
     */
    public function __construct($_subscriberNo = NULL,$_balance = NULL,$_availCredit = NULL,$_arrear = NULL)
    {
        parent::__construct(array('SubscriberNo'=>$_subscriberNo,'Balance'=>$_balance,'AvailCredit'=>$_availCredit,'Arrear'=>$_arrear),false);
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
     * Get Balance value
     * @return long|null
     */
    public function getBalance()
    {
        return $this->Balance;
    }
    /**
     * Set Balance value
     * @param long $_balance the Balance
     * @return long
     */
    public function setBalance($_balance)
    {
        return ($this->Balance = $_balance);
    }
    /**
     * Get AvailCredit value
     * @return long|null
     */
    public function getAvailCredit()
    {
        return $this->AvailCredit;
    }
    /**
     * Set AvailCredit value
     * @param long $_availCredit the AvailCredit
     * @return long
     */
    public function setAvailCredit($_availCredit)
    {
        return ($this->AvailCredit = $_availCredit);
    }
    /**
     * Get Arrear value
     * @return long|null
     */
    public function getArrear()
    {
        return $this->Arrear;
    }
    /**
     * Set Arrear value
     * @param long $_arrear the Arrear
     * @return long
     */
    public function setArrear($_arrear)
    {
        return ($this->Arrear = $_arrear);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryAcctAmtResult
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
