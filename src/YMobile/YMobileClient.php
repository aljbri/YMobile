<?php namespace YMobile;


use YMobile\Services\YMobileQry;

use YMobile\Structs\YMobileQryAcctAmtRequest;
use YMobile\Structs\YMobileQryAcctAmtRequestMessage;

use YMobile\Structs\YMobileQryAvailSupOfferRequest;
use YMobile\Structs\YMobileQryAvailSupOfferRequestMessage;

use YMobile\Structs\YMobileQryCurrSupOfferRequest;
use YMobile\Structs\YMobileQryCurrSupOfferRequestMessage;

use YMobile\Structs\YMobileQryCustInfoRequest;
use YMobile\Structs\YMobileQryCustInfoRequestMessage;


use YMobile\Services\YMobileRollback;

use YMobile\Services\YMobileChg;
use YMobile\Structs\YMobileChgSupOfferRequest;
use YMobile\Structs\YMobileChgSupOfferRequestMessage;

use YMobile\Services\YMobilePayment;
use YMobile\Structs\YMobilePaymentRequest;
use YMobile\Structs\YMobilePaymentRequestMessage;
use YMobile\Structs\YMobileRollbackRequest;
use YMobile\Structs\YMobileRollbackRequestMessage;


/**
 * File for YMobileWsdlClass to communicate with SOAP service
 * YMobileWsdlClass to communicate with SOAP service
 * 
 * @package YMobile
 */
class YMobileClient
{
    private $vLocation 	= '';
    private $CAgentCode = '';
    private $CPassword 	= '';
    private $CRemoteAddress = '';

    private $_ReqHeader, $_YMobileQry, $_YMobilePayment, $_YMobileChg, $_YMobileRollback, $wsdlObject;


    public function __construct()
    {
        $SessionEntity = new Structs\YMobileSessionEntityType($this->CAgentCode,$this->CPassword,$this->CRemoteAddress);
        $this->_ReqHeader = new Structs\YMobileRequestHeader(null,1,null,1,'Event',$SessionEntity);

        //$wsdlObject = new YMobileWsdlClass($wsdl);

        $this->_YMobileQry = new YMobileQry();
        $this->_YMobileQry->setLocation($this->vLocation);
        $this->_YMobilePayment = new YMobilePayment();
        $this->_YMobilePayment->setLocation($this->vLocation);
        $this->_YMobileChg = new YMobileChg();
        $this->_YMobileChg->setLocation($this->vLocation);
        $this->_YMobileRollback = new YMobileRollback();
        $this->_YMobileRollback->setLocation($this->vLocation);
    }
    
    public function getQryCustInfo($_subscriberNo = null, $_transactionId = null){
        $QryHeader = $this->_ReqHeader;
        $QryHeader->setCommandId('QryCustInfo');
        $QryHeader->setTransactionId(is_null($_transactionId)? rand():$_transactionId);
        $Qry = $this->_YMobileQry;
		
		var_dump($Qry->getSoapClient());
        $QryRequest = new YMobileQryCustInfoRequest($_subscriberNo);
        if($Qry->QryCustInfo(new YMobileQryCustInfoRequestMessage($QryHeader,$QryRequest)))
            return ($Qry->getResult());
        else
            return ($Qry->getLastError());
    }

    public function getQryAcctAmt($_subscriberNo = null, $_transactionId = null){
        $QryHeader = $this->_ReqHeader;
        $QryHeader->setCommandId('QryAcctAmt');
        $QryHeader->setTransactionId(is_null($_transactionId)? rand():$_transactionId);
        $Qry = $this->_YMobileQry;
        
        $QryRequest = new YMobileQryAcctAmtRequest($_subscriberNo);
        if($Qry->QryAcctAmt(new YMobileQryAcctAmtRequestMessage($QryHeader,$QryRequest)))
            return ($Qry->getResult()->ResultHeader);
        else
            return ($Qry->getLastError()->ResultHeader);
        }
        
        public function getQryCurrSupOffer($_subscriberNo = null, $_transactionId = null){
        $QryHeader = $this->_ReqHeader;
        $QryHeader->setCommandId('QryCurrSupOffer');
        $QryHeader->setTransactionId(is_null($_transactionId)? rand():$_transactionId);
        $Qry = $this->_YMobileQry;
        
        $QryRequest = new YMobileQryCurrSupOfferRequest($_subscriberNo);
        if($Qry->QryCurrSupOffer(new YMobileQryCurrSupOfferRequestMessage($QryHeader,$QryRequest)))
            return ($Qry->getResult());
        else
            return ($Qry->getLastError());
    }

    public function getQryAvailSupOffer($_subscriberNo = null, $_transactionId = null){
        $QryHeader = $this->_ReqHeader;
        $QryHeader->setCommandId('QryAvailSupOffer');
        $QryHeader->setTransactionId(is_null($_transactionId)? rand():$_transactionId);
        $Qry = $this->_YMobileQry;
        
        $QryRequest = new YMobileQryAvailSupOfferRequest($_subscriberNo);
        if($Qry->QryAvailSupOffer(new YMobileQryAvailSupOfferRequestMessage($QryHeader,$QryRequest)))
            return ($Qry->getResult());
        else
            return ($Qry->getLastError());
    }

    public function Payment($_subscriberNo = null, $_paymentAmt = null,$_accountType = null, $_transactionId = null){
        $PayHeader = $this->_ReqHeader;
        $PayHeader->setCommandId('Payment');
        $PayHeader->setTransactionId(is_null($_transactionId)? rand():$_transactionId);
        $Payment = $this->_YMobilePayment;

        $PayRequst = new YMobilePaymentRequest($_subscriberNo,$_paymentAmt,$_accountType);

        if($Payment->Payment(new YMobilePaymentRequestMessage($PayHeader,$PayRequst)))
            return($Payment->getResult());
        else
            return($Payment->getLastError());
    }
    public function ChgSupOffer($_subscriberNo = NULL,$_oldOfferCode = NULL,$_newOfferCode = NULL, $_transactionId = null){
        $ChgHeader = $this->_ReqHeader;
        $ChgHeader->setCommandId('ChgSupOffer');
        $ChgHeader->setTransactionId(is_null($_transactionId)? rand():$_transactionId);
        $ChgOffer = $this->_YMobileChg;

        $ChgRequst = new YMobileChgSupOfferRequest($_subscriberNo,$_oldOfferCode,$_newOfferCode);

        if($ChgOffer->ChgSupOffer(new YMobileChgSupOfferRequestMessage($ChgHeader,$ChgRequst)))
            return ($ChgOffer->getResult());
        else
            return ($ChgOffer->getLastError());
    }

    public function Rollback($_subscriberNo = NULL,$_originalTranSerialNo = NULL,$_reasonCode = NULL,$_transactionId = null){
        $RbkHeader = $this->_ReqHeader;
        $RbkHeader->setCommandId('ChgSupOffer');
        $RbkHeader->setTransactionId(is_null($_transactionId)? rand():$_transactionId);
        $Rback = $this->_YMobileRollback;

        $RollbackRequst = new YMobileRollbackRequest($_subscriberNo,$_originalTranSerialNo,$_reasonCode);
        if($Rback->Rollback(new YMobileRollbackRequestMessage($RbkHeader,$RollbackRequst)))
            print_r($Rback->getResult());
        else
            print_r($Rback->getLastError());
    }
}
