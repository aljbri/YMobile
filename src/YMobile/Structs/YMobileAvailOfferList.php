<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileAvailOfferList
 * This class stands for YMobileAvailOfferList originally named AvailOfferList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 */
class YMobileAvailOfferList extends YMobileWsdlClass
{
    /**
     * The OfferCode
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $OfferCode;
    /**
     * The OfferName
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * - maxLength : 60
     * @var string
     */
    public $OfferName;
    /**
     * The OfferDesc
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * - maxLength : 256
     * @var string
     */
    public $OfferDesc;
    /**
     * The MonthlyFee
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * - maxLength : 8
     * @var string
     */
    public $MonthlyFee;
    /**
     * The BusiFee
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * - maxLength : 8
     * @var string
     */
    public $BusiFee;
    /**
     * Constructor method for AvailOfferList
     * @see parent::__construct()
     * @param string $_offerCode
     * @param string $_offerName
     * @param string $_offerDesc
     * @param string $_monthlyFee
     * @param string $_busiFee
     * @return YMobileAvailOfferList
     */
    public function __construct($_offerCode = NULL,$_offerName = NULL,$_offerDesc = NULL,$_monthlyFee = NULL,$_busiFee = NULL)
    {
        parent::__construct(array('OfferCode'=>$_offerCode,'OfferName'=>$_offerName,'OfferDesc'=>$_offerDesc,'MonthlyFee'=>$_monthlyFee,'BusiFee'=>$_busiFee),false);
    }
    /**
     * Get OfferCode value
     * @return string|null
     */
    public function getOfferCode()
    {
        return $this->OfferCode;
    }
    /**
     * Set OfferCode value
     * @param string $_offerCode the OfferCode
     * @return string
     */
    public function setOfferCode($_offerCode)
    {
        return ($this->OfferCode = $_offerCode);
    }
    /**
     * Get OfferName value
     * @return string|null
     */
    public function getOfferName()
    {
        return $this->OfferName;
    }
    /**
     * Set OfferName value
     * @param string $_offerName the OfferName
     * @return string
     */
    public function setOfferName($_offerName)
    {
        return ($this->OfferName = $_offerName);
    }
    /**
     * Get OfferDesc value
     * @return string|null
     */
    public function getOfferDesc()
    {
        return $this->OfferDesc;
    }
    /**
     * Set OfferDesc value
     * @param string $_offerDesc the OfferDesc
     * @return string
     */
    public function setOfferDesc($_offerDesc)
    {
        return ($this->OfferDesc = $_offerDesc);
    }
    /**
     * Get MonthlyFee value
     * @return string|null
     */
    public function getMonthlyFee()
    {
        return $this->MonthlyFee;
    }
    /**
     * Set MonthlyFee value
     * @param string $_monthlyFee the MonthlyFee
     * @return string
     */
    public function setMonthlyFee($_monthlyFee)
    {
        return ($this->MonthlyFee = $_monthlyFee);
    }
    /**
     * Get BusiFee value
     * @return string|null
     */
    public function getBusiFee()
    {
        return $this->BusiFee;
    }
    /**
     * Set BusiFee value
     * @param string $_busiFee the BusiFee
     * @return string
     */
    public function setBusiFee($_busiFee)
    {
        return ($this->BusiFee = $_busiFee);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileAvailOfferList
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
