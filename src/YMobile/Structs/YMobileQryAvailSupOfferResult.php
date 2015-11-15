<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryAvailSupOfferResult
 * This class stands for YMobileQryAvailSupOfferResult originally named QryAvailSupOfferResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileQryAvailSupOfferResult extends YMobileWsdlClass
{
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The AvailOfferList
     * @var YMobileAvailOfferList
     */
    public $AvailOfferList;
    /**
     * Constructor method for QryAvailSupOfferResult
     * @see parent::__construct()
     * @param string $_subscriberNo
     * @param YMobileAvailOfferList $_availOfferList
     * @return YMobileQryAvailSupOfferResult
     */
    public function __construct($_subscriberNo = NULL,$_availOfferList = NULL)
    {
        parent::__construct(array('SubscriberNo'=>$_subscriberNo,'AvailOfferList'=>$_availOfferList),false);
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
     * Get AvailOfferList value
     * @return YMobileAvailOfferList|null
     */
    public function getAvailOfferList()
    {
        return $this->AvailOfferList;
    }
    /**
     * Set AvailOfferList value
     * @param YMobileAvailOfferList $_availOfferList the AvailOfferList
     * @return YMobileAvailOfferList
     */
    public function setAvailOfferList($_availOfferList)
    {
        return ($this->AvailOfferList = $_availOfferList);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryAvailSupOfferResult
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
