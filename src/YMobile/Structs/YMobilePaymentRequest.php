<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;
use Ymobile\Enum\YMobileAccountType;

/**
 * File for class YMobilePaymentRequest
 * This class stands for YMobilePaymentRequest originally named PaymentRequest
 * Meta informations extracted from the WSDL
 * - from schema : {@link BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobilePaymentRequest extends YMobileWsdlClass
{
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The PaymentAmt
     * Meta informations extracted from the WSDL
     * - from schema : {@link BankInterface.xsd}
     * @var long
     */
    public $PaymentAmt;
    /**
     * The AccountType
     * @var YMobileAccountType
     */
    public $AccountType;
    /**
     * Constructor method for PaymentRequest
     * @see parent::__construct()
     * @param string $_subscriberNo
     * @param long $_paymentAmt
     * @param YMobileAccountType $_accountType
     * @return YMobilePaymentRequest
     */
    public function __construct($_subscriberNo = NULL,$_paymentAmt = NULL,$_accountType = NULL)
    {
        parent::__construct(array('SubscriberNo'=>$_subscriberNo,'PaymentAmt'=>$_paymentAmt,'AccountType'=>$_accountType),false);
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
     * Get PaymentAmt value
     * @return long|null
     */
    public function getPaymentAmt()
    {
        return $this->PaymentAmt;
    }
    /**
     * Set PaymentAmt value
     * @param long $_paymentAmt the PaymentAmt
     * @return long
     */
    public function setPaymentAmt($_paymentAmt)
    {
        return ($this->PaymentAmt = $_paymentAmt);
    }
    /**
     * Get AccountType value
     * @return YMobileAccountType|null
     */
    public function getAccountType()
    {
        return $this->AccountType;
    }
    /**
     * Set AccountType value
     * @uses YMobileAccountType::valueIsValid()
     * @param YMobileAccountType $_accountType the AccountType
     * @return YMobileAccountType
     */
    public function setAccountType($_accountType)
    {
        if(!YMobileAccountType::valueIsValid($_accountType))
        {
            return false;
        }
        return ($this->AccountType = $_accountType);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobilePaymentRequest
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
