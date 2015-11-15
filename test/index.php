<?php

ini_set('memory_limit','512M');
ini_set('display_errors',true);
error_reporting(-1);

require_once dirname(__FILE__) . '/../src/autoload.php';

$ymobile =new YMobile\YMobileClient();

var_dump($ymobile->getQryCustInfo('774217742'));
var_dump($ymobile->getQryAcctAmt('777163816'));
var_dump($ymobile->getQryCurrSupOffer('777163816'));
var_dump($ymobile->getQryAvailSupOffer('777163816'));
