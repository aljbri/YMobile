<?php namespace YMobile\Enum;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileRequestType
 * This class stands for YMobileRequestType originally named RequestType
 * Documentation : This parameter is available to compound sessions. The value is fixed to Event.
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
 * - maxLength : 20
 * @package YMobile
 * @subpackage Enumerations
 */
class YMobileRequestType extends YMobileWsdlClass
{
    /**
     * Constant for value 'Event'
     * @return string 'Event'
     */
    const VALUE_EVENT = 'Event';
    /**
     * Return true if value is allowed
     * @uses YMobileRequestType::VALUE_EVENT
     * @param mixed $_value value
     * @return bool true|false
     */
    public static function valueIsValid($_value)
    {
        return in_array($_value,array(YMobileRequestType::VALUE_EVENT));
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
