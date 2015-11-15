<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryCurrSupOfferResult
 * This class stands for YMobileQryCurrSupOfferResult originally named QryCurrSupOfferResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileQryCurrSupOfferResult extends YMobileWsdlClass
{
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The CurrOfferList
     * @var YMobileCurrOfferList
     */
    public $CurrOfferList;
    /**
     * Constructor method for QryCurrSupOfferResult
     * @see parent::__construct()
     * @param string $_subscriberNo
     * @param YMobileCurrOfferList $_currOfferList
     * @return YMobileQryCurrSupOfferResult
     */
    public function __construct($_subscriberNo = NULL,$_currOfferList = NULL)
    {
        parent::__construct(array('SubscriberNo'=>$_subscriberNo,'CurrOfferList'=>$_currOfferList),false);
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
     * Get CurrOfferList value
     * @return YMobileCurrOfferList|null
     */
    public function getCurrOfferList()
    {
        return $this->CurrOfferList;
    }
    /**
     * Set CurrOfferList value
     * @param YMobileCurrOfferList $_currOfferList the CurrOfferList
     * @return YMobileCurrOfferList
     */
    public function setCurrOfferList($_currOfferList)
    {
        return ($this->CurrOfferList = $_currOfferList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryCurrSupOfferResult
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
