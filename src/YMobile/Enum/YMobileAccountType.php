<?php namespace YMobile\Enum;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileAccountType
 * This class stands for YMobileAccountType originally named AccountType
 * Meta informations extracted from the WSDL
 * - from schema : {@link BankInterface.xsd}
 * - length : 4
 * @package YMobile
 * @subpackage Enumerations
 */
class YMobileAccountType extends YMobileWsdlClass
{
    /**
     * Constant for value 2000
     * @return integer 2000
     */
    const VALUE_2000 = 2000;
    /**
     * Constant for value 3000
     * @return integer 3000
     */
    const VALUE_3000 = 3000;
    /**
     * Return true if value is allowed
     * @uses YMobileAccountType::VALUE_2000
     * @uses YMobileAccountType::VALUE_3000
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(YMobileAccountType::VALUE_2000,YMobileAccountType::VALUE_3000));
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
