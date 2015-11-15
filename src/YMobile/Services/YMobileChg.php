<?php namespace YMobile\Services;

use \YMobile\Structs\YMobileChgSupOfferRequestMessage;
use \YMobile\YMobileWsdlClass;

/**
 * File for class YMobileChg
 * This class stands for YMobileChg originally named Chg
 * @package YMobile
 * @subpackage Services
 */
class YMobileChg extends YMobileWsdlClass
{
    /**
     * Method to call the operation originally named ChgSupOffer
     * @uses YMobileWsdlClass::getSoapClient()
     * @uses YMobileWsdlClass::setResult()
     * @uses YMobileWsdlClass::saveLastError()
     * @param YMobileChgSupOfferRequestMessage $_YMobileChgSupOfferRequestMessage
     * @return YMobileChgSupOfferResultMessage
     */
    public function ChgSupOffer(YMobileChgSupOfferRequestMessage $_YMobileChgSupOfferRequestMessage)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->ChgSupOffer($_YMobileChgSupOfferRequestMessage));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see YMobileWsdlClass::getResult()
     * @return YMobileChgSupOfferResultMessage
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
