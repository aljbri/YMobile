<?php namespace YMobile\Services;

use YMobile\Structs\YMobileRollbackRequestMessage;
use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileRollback
 * This class stands for YMobileRollback originally named Rollback
 * @package YMobile
 * @subpackage Services
 */
class YMobileRollback extends YMobileWsdlClass
{
    /**
     * Method to call the operation originally named Rollback
     * @uses YMobileWsdlClass::getSoapClient()
     * @uses YMobileWsdlClass::setResult()
     * @uses YMobileWsdlClass::saveLastError()
     * @param YMobileRollbackRequestMessage $_YMobileRollbackRequestMessage
     * @return YMobileRollbackResultMessage
     */
    public function Rollback(YMobileRollbackRequestMessage $_YMobileRollbackRequestMessage)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Rollback($_YMobileRollbackRequestMessage));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see YMobileWsdlClass::getResult()
     * @return YMobileRollbackResultMessage
     */
    public function getResult()
    {
        return parent::getResult();
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
