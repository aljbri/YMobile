<?php namespace YMobile\Services;

use YMobile\Structs\YMobilePaymentRequestMessage;
use YMobile\YMobileWsdlClass;

/**
 * File for class YMobilePayment
 * This class stands for YMobilePayment originally named Payment
 * @package YMobile
 * @subpackage Services
 */
class YMobilePayment extends YMobileWsdlClass
{
    /**
     * Method to call the operation originally named Payment
     * @uses YMobileWsdlClass::getSoapClient()
     * @uses YMobileWsdlClass::setResult()
     * @uses YMobileWsdlClass::saveLastError()
     * @param YMobilePaymentRequestMessage $_YMobilePaymentRequestMessage
     * @return YMobilePaymentResultMessage
     */
    public function Payment(YMobilePaymentRequestMessage $_YMobilePaymentRequestMessage)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->Payment($_YMobilePaymentRequestMessage));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see YMobileWsdlClass::getResult()
     * @return YMobilePaymentResultMessage
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
