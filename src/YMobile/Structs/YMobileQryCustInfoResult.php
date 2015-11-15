<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileQryCustInfoResult
 * This class stands for YMobileQryCustInfoResult originally named QryCustInfoResult
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileQryCustInfoResult extends YMobileWsdlClass
{
    /**
     * The SubscriberNo
     * Meta informations extracted from the WSDL
     * - maxLength : 20
     * @var string
     */
    public $SubscriberNo;
    /**
     * The FirstName
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * @var string
     */
    public $FirstName;
    /**
     * The MiddleName
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * @var string
     */
    public $MiddleName;
    /**
     * The NickName
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * @var string
     */
    public $NickName;
    /**
     * The PaidFlag
     * Meta informations extracted from the WSDL
     * - from schema : {@link http://khedmatk.tk:90//BankInterface.xsd}
     * @var string
     */
    public $PaidFlag;
    /**
     * Constructor method for QryCustInfoResult
     * @see parent::__construct()
     * @param string $_subscriberNo
     * @param string $_firstName
     * @param string $_middleName
     * @param string $_nickName
     * @param string $_paidFlag
     * @return YMobileQryCustInfoResult
     */
    public function __construct($_subscriberNo = NULL,$_firstName = NULL,$_middleName = NULL,$_nickName = NULL,$_paidFlag = NULL)
    {
        parent::__construct(array('SubscriberNo'=>$_subscriberNo,'FirstName'=>$_firstName,'MiddleName'=>$_middleName,'NickName'=>$_nickName,'PaidFlag'=>$_paidFlag),false);
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
     * Get FirstName value
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
    /**
     * Set FirstName value
     * @param string $_firstName the FirstName
     * @return string
     */
    public function setFirstName($_firstName)
    {
        return ($this->FirstName = $_firstName);
    }
    /**
     * Get MiddleName value
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->MiddleName;
    }
    /**
     * Set MiddleName value
     * @param string $_middleName the MiddleName
     * @return string
     */
    public function setMiddleName($_middleName)
    {
        return ($this->MiddleName = $_middleName);
    }
    /**
     * Get NickName value
     * @return string|null
     */
    public function getNickName()
    {
        return $this->NickName;
    }
    /**
     * Set NickName value
     * @param string $_nickName the NickName
     * @return string
     */
    public function setNickName($_nickName)
    {
        return ($this->NickName = $_nickName);
    }
    /**
     * Get PaidFlag value
     * @return string|null
     */
    public function getPaidFlag()
    {
        return $this->PaidFlag;
    }
    /**
     * Set PaidFlag value
     * @param string $_paidFlag the PaidFlag
     * @return string
     */
    public function setPaidFlag($_paidFlag)
    {
        return ($this->PaidFlag = $_paidFlag);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileQryCustInfoResult
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
