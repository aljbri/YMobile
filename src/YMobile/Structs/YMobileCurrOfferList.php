<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileCurrOfferList
 * This class stands for YMobileCurrOfferList originally named CurrOfferList
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileCurrOfferList extends YMobileWsdlClass
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
     * The EffDate
     * Meta informations extracted from the WSDL
     * - maxLength : 14
     * - pattern : (([0-9][0-9][0-9][0-9])([0][1-9]|[1][0-2])([0][1-9]|[1-2][0-9]|[3][0-1])([0-1][0-9]|[2][0-3])([0-5][0-9])([0-5][0-9]))
     * @var string
     */
    public $EffDate;
    /**
     * The ExpDate
     * Meta informations extracted from the WSDL
     * - maxLength : 14
     * - pattern : (([0-9][0-9][0-9][0-9])([0][1-9]|[1][0-2])([0][1-9]|[1-2][0-9]|[3][0-1])([0-1][0-9]|[2][0-3])([0-5][0-9])([0-5][0-9]))
     * @var string
     */
    public $ExpDate;
    /**
     * Constructor method for CurrOfferList
     * @see parent::__construct()
     * @param string $_offerCode
     * @param string $_offerName
     * @param string $_offerDesc
     * @param string $_effDate
     * @param string $_expDate
     * @return YMobileCurrOfferList
     */
    public function __construct($_offerCode = NULL,$_offerName = NULL,$_offerDesc = NULL,$_effDate = NULL,$_expDate = NULL)
    {
        parent::__construct(array('OfferCode'=>$_offerCode,'OfferName'=>$_offerName,'OfferDesc'=>$_offerDesc,'EffDate'=>$_effDate,'ExpDate'=>$_expDate),false);
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
     * Get EffDate value
     * @return string|null
     */
    public function getEffDate()
    {
        return $this->EffDate;
    }
    /**
     * Set EffDate value
     * @param string $_effDate the EffDate
     * @return string
     */
    public function setEffDate($_effDate)
    {
        return ($this->EffDate = $_effDate);
    }
    /**
     * Get ExpDate value
     * @return string|null
     */
    public function getExpDate()
    {
        return $this->ExpDate;
    }
    /**
     * Set ExpDate value
     * @param string $_expDate the ExpDate
     * @return string
     */
    public function setExpDate($_expDate)
    {
        return ($this->ExpDate = $_expDate);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileCurrOfferList
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
