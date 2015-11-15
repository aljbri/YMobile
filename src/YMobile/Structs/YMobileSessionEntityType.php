<?php namespace YMobile\Structs;

use YMobile\YMobileWsdlClass;

/**
 * File for class YMobileSessionEntityType
 * This class stands for YMobileSessionEntityType originally named SessionEntityType
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
 * @package YMobile
 * @subpackage Structs
 * @author WsdlToPhp Team <contact@wsdltophp.com>
 * @version 20150429-01
 * @date 2015-11-10
 */
class YMobileSessionEntityType extends YMobileWsdlClass
{
    /**
     * The AgentCode
     * Meta informations extracted from the WSDL
     * - documentation : Agent Code for enabling the security control function for Web Services requests.For bank post office, input the agent code for the bank or post office. For example: IBY001
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 20
     * @var string
     */
    public $AgentCode;
    /**
     * The Password
     * Meta informations extracted from the WSDL
     * - documentation : Password for enabling the security control function for Web Services requests.For example: 123456
     * - maxLength : 67
     * @var string
     */
    public $Password;
    /**
     * The RemoteAddress
     * Meta informations extracted from the WSDL
     * - documentation : IP address of the remote host for enabling the security control function for Web Services requests.
     * - from schema : {@link http://khedmatk.tk:90//BankInterfaceCommon.xsd}
     * - maxLength : 23
     * @var string
     */
    public $RemoteAddress;
    /**
     * Constructor method for SessionEntityType
     * @see parent::__construct()
     * @param string $_agentCode
     * @param string $_password
     * @param string $_remoteAddress
     * @return YMobileSessionEntityType
     */
    public function __construct($_agentCode = NULL,$_password = NULL,$_remoteAddress = NULL)
    {
        parent::__construct(array('AgentCode'=>$_agentCode,'Password'=>$_password,'RemoteAddress'=>$_remoteAddress),false);
    }
    /**
     * Get AgentCode value
     * @return string|null
     */
    public function getAgentCode()
    {
        return $this->AgentCode;
    }
    /**
     * Set AgentCode value
     * @param string $_agentCode the AgentCode
     * @return string
     */
    public function setAgentCode($_agentCode)
    {
        return ($this->AgentCode = $_agentCode);
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $_password the Password
     * @return string
     */
    public function setPassword($_password)
    {
        return ($this->Password = $_password);
    }
    /**
     * Get RemoteAddress value
     * @return string|null
     */
    public function getRemoteAddress()
    {
        return $this->RemoteAddress;
    }
    /**
     * Set RemoteAddress value
     * @param string $_remoteAddress the RemoteAddress
     * @return string
     */
    public function setRemoteAddress($_remoteAddress)
    {
        return ($this->RemoteAddress = $_remoteAddress);
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see YMobileWsdlClass::__set_state()
     * @uses YMobileWsdlClass::__set_state()
     * @param array $_array the exported values
     * @return YMobileSessionEntityType
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
