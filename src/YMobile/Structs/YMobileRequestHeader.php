<?php namespace YMobile\Structs;

use \YMobile\YMobileWsdlClass;
use \YMobile\Enum\YMobileRequestType;

/**
 * File for class YMobileRequestHeader
 * This class stands for YMobileRequestHeader originally named RequestHeader
 * Documentation : for user information use(add,modify,delete)
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileRequestHeader extends YMobileWsdlClass
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
     * The RequestType
     * @var YMobileEnumRequestType
     */
    public $RequestType;
    /**
     * The SessionEntity
     * Meta informations extracted from the WSDL
     * - documentation : For security use.The AgentCode, Password, and RemoteAddress parameters are included for determining whether to enable the security control function for Web Services requests.
     * @var YMobileSessionEntityType
     */
    public $SessionEntity;
    /**
     * The Remark
     * Meta informations extracted from the WSDL
     * - documentation : Operation remarks.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 255
     * @var string
     */
    public $Remark;
    /**
     * Constructor method for RequestHeader
     * @see parent::__construct()
     * @param string $_commandId
     * @param string $_version
     * @param string $_transactionId
     * @param string $_sequenceId
     * @param YMobileEnumRequestType $_requestType
     * @param YMobileSessionEntityType $_sessionEntity
     * @param string $_remark
     * @return YMobileRequestHeader
     */
    public function __construct($_commandId = NULL,$_version = NULL,$_transactionId = NULL,$_sequenceId = NULL,$_requestType = NULL,$_sessionEntity = NULL,$_remark = NULL)
    {
        parent::__construct(array('CommandId'=>$_commandId,'Version'=>$_version,'TransactionId'=>$_transactionId,'SequenceId'=>$_sequenceId,'RequestType'=>$_requestType,'SessionEntity'=>$_sessionEntity,'Remark'=>$_remark),false);
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
     * Get RequestType value
     * @return YMobileEnumRequestType|null
     */
    public function getRequestType()
    {
        return $this->RequestType;
    }
    /**
     * Set RequestType value
     * @uses YMobileEnumRequestType::valueIsValid()
     * @param YMobileEnumRequestType $_requestType the RequestType
     * @return YMobileEnumRequestType
     */
    public function setRequestType($_requestType)
    {
        if(!YMobileRequestType::valueIsValid($_requestType))
        {
            return false;
        }
        return ($this->RequestType = $_requestType);
    }
    /**
     * Get SessionEntity value
     * @return YMobileSessionEntityType|null
     */
    public function getSessionEntity()
    {
        return $this->SessionEntity;
    }
    /**
     * Set SessionEntity value
     * @param YMobileSessionEntityType $_sessionEntity the SessionEntity
     * @return YMobileSessionEntityType
     */
    public function setSessionEntity($_sessionEntity)
    {
        return ($this->SessionEntity = $_sessionEntity);
    }
    /**
     * Get Remark value
     * @return string|null
     */
    public function getRemark()
    {
        return $this->Remark;
    }
    /**
     * Set Remark value
     * @param string $_remark the Remark
     * @return string
     */
    public function setRemark($_remark)
    {
        return ($this->Remark = $_remark);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileRequestHeader
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
