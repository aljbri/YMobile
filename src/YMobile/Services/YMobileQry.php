<?php namespace YMobile\Services;


use YMobile\Structs;
use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQry
 * This class stands for YMobileQry originally named Qry
 * @package YMobile
 * @subpackage Services
 */
class YMobileQry extends YMobileWsdlClass
{
    /**
     * Method to call the operation originally named QryAcctAmt
     * @uses YMobileWsdlClass::getSoapClient()
     * @uses YMobileWsdlClass::setResult()
     * @uses YMobileWsdlClass::saveLastError()
     * @param YMobileQryAcctAmtRequestMessage $_YMobileQryAcctAmtRequestMessage
     * @return YMobileQryAcctAmtResultMessage
     */
    public function QryAcctAmt(Structs\YMobileQryAcctAmtRequestMessage $_YMobileQryAcctAmtRequestMessage)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->QryAcctAmt($_YMobileQryAcctAmtRequestMessage));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named QryCurrSupOffer
     * @uses YMobileWsdlClass::getSoapClient()
     * @uses YMobileWsdlClass::setResult()
     * @uses YMobileWsdlClass::saveLastError()
     * @param YMobileQryCurrSupOfferRequestMessage $_YMobileQryCurrSupOfferRequestMessage
     * @return YMobileQryCurrSupOfferResultMessage
     */
    public function QryCurrSupOffer(Structs\YMobileQryCurrSupOfferRequestMessage $_YMobileQryCurrSupOfferRequestMessage)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->QryCurrSupOffer($_YMobileQryCurrSupOfferRequestMessage));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named QryAvailSupOffer
     * @uses YMobileWsdlClass::getSoapClient()
     * @uses YMobileWsdlClass::setResult()
     * @uses YMobileWsdlClass::saveLastError()
     * @param YMobileQryAvailSupOfferRequestMessage $_YMobileQryAvailSupOfferRequestMessage
     * @return YMobileQryAvailSupOfferResultMessage
     */
    public function QryAvailSupOffer(Structs\YMobileQryAvailSupOfferRequestMessage $_YMobileQryAvailSupOfferRequestMessage)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->QryAvailSupOffer($_YMobileQryAvailSupOfferRequestMessage));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Method to call the operation originally named QryCustInfo
     * @uses YMobileWsdlClass::getSoapClient()
     * @uses YMobileWsdlClass::setResult()
     * @uses YMobileWsdlClass::saveLastError()
     * @param YMobileQryCustInfoRequestMessage $_YMobileQryCustInfoRequestMessage
     * @return YMobileQryCustInfoResultMessage
     */
    public function QryCustInfo(Structs\YMobileQryCustInfoRequestMessage $_YMobileQryCustInfoRequestMessage)
    {
        try
        {
            return $this->setResult(self::getSoapClient()->QryCustInfo($_YMobileQryCustInfoRequestMessage));
        }
        catch(SoapFault $soapFault)
        {
            return !$this->saveLastError(__METHOD__,$soapFault);
        }
    }
    /**
     * Returns the result
     * @see YMobileWsdlClass::getResult()
     * @return YMobileQryAcctAmtResultMessage|YMobileQryAvailSupOfferResultMessage|YMobileQryCurrSupOfferResultMessage|YMobileQryCustInfoResultMessage
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
