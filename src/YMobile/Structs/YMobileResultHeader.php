<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileResultHeader
 * This class stands for YMobileResultHeader originally named ResultHeader
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileResultHeader extends YMobileWsdlClass
{
    /**
     * The CommandId
     * Meta informations extracted from the WSDL
     * - documentation : Operation command ID. Request command ID.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 64
     * @var string
     */
    public $CommandId;
    /**
     * The Version
     * Meta informations extracted from the WSDL
     * - documentation : Version ID. The current version is fixed to 1. Request version ID.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 24
     * @var string
     */
    public $Version;
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - documentation : Transaction ID of external system. Unique value for each request. Request transaction ID.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 20
     * @var string
     */
    public $TransactionId;
    /**
     * The SequenceId
     * Meta informations extracted from the WSDL
     * - documentation : Sequence ID. This parameter is available to compound sessions. The default value is 1. Request sequence ID.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 20
     * @var string
     */
    public $SequenceId;
    /**
     * The ResultCode
     * Meta informations extracted from the WSDL
     * - documentation : Result code indicating success or failure.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 10
     * @var string
     */
    public $ResultCode;
    /**
     * The ResultDesc
     * Meta informations extracted from the WSDL
     * - documentation : Result description, successful information or failure reasons.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 1024
     * @var string
     */
    public $ResultDesc;
    /**
     * Constructor method for ResultHeader
     * @see parent::__construct()
     * @param string $_commandId
     * @param string $_version
     * @param string $_transactionId
     * @param string $_sequenceId
     * @param string $_resultCode
     * @param string $_resultDesc
     * @return YMobileResultHeader
     */
    public function __construct($_commandId = NULL,$_version = NULL,$_transactionId = NULL,$_sequenceId = NULL,$_resultCode = NULL,$_resultDesc = NULL)
    {
        parent::__construct(array('CommandId'=>$_commandId,'Version'=>$_version,'TransactionId'=>$_transactionId,'SequenceId'=>$_sequenceId,'ResultCode'=>$_resultCode,'ResultDesc'=>$_resultDesc),false);
    }
    /**
     * Get CommandId value
     * @return string|null
     */
    public function getCommandId()
    {
        return $this->CommandId;
    }
    /**
     * Set CommandId value
     * @param string $_commandId the CommandId
     * @return string
     */
    public function setCommandId($_commandId)
    {
        return ($this->CommandId = $_commandId);
    }
    /**
     * Get Version value
     * @return string|null
     */
    public function getVersion()
    {
        return $this->Version;
    }
    /**
     * Set Version value
     * @param string $_version the Version
     * @return string
     */
    public function setVersion($_version)
    {
        return ($this->Version = $_version);
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $_transactionId the TransactionId
     * @return string
     */
    public function setTransactionId($_transactionId)
    {
        return ($this->TransactionId = $_transactionId);
    }
    /**
     * Get SequenceId value
     * @return string|null
     */
    public function getSequenceId()
    {
        return $this->SequenceId;
    }
    /**
     * Set SequenceId value
     * @param string $_sequenceId the SequenceId
     * @return string
     */
    public function setSequenceId($_sequenceId)
    {
        return ($this->SequenceId = $_sequenceId);
    }
    /**
     * Get ResultCode value
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->ResultCode;
    }
    /**
     * Set ResultCode value
     * @param string $_resultCode the ResultCode
     * @return string
     */
    public function setResultCode($_resultCode)
    {
        return ($this->ResultCode = $_resultCode);
    }
    /**
     * Get ResultDesc value
     * @return string|null
     */
    public function getResultDesc()
    {
        return $this->ResultDesc;
    }
    /**
     * Set ResultDesc value
     * @param string $_resultDesc the ResultDesc
     * @return string
     */
    public function setResultDesc($_resultDesc)
    {
        return ($this->ResultDesc = $_resultDesc);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileResultHeader
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
