<?php

namespace App\Http\Controllers;

use IPay88;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
	public function __construct()
	{
		$this->merchant_key = env("IPAY_MERCHANT_KEY");
		$this->merchant_code = env("IPAY_MERCHANT_CODE");
	}

    public function showPaymentForm()
    {
    	return view('pay');
    }

    public function redirectPaymentForm(Request $request)
    {
    	$paymentRequest = new \IPay88\Payment\Request($this->merchant_key);
    	$data = [
    		'MerchantCode' => $paymentRequest->setMerchantCode($this->merchant_code),
			'PaymentId' =>  $paymentRequest->setPaymentId($request->paymentID),
			'RefNo' => $paymentRequest->setRefNo('EXAMPLE000'.rand(1,1000)),
			'Amount' => $paymentRequest->setAmount('1.00'),
			'Currency' => $paymentRequest->setCurrency('MYR'),
			'ProdDesc' => $paymentRequest->setProdDesc('Testing'),
			'UserName' => $paymentRequest->setUserName($request->name),
			'UserEmail' => $paymentRequest->setUserEmail($request->email),
			'UserContact' => $paymentRequest->setUserContact($request->contact_no),
			'Remark' => $paymentRequest->setRemark('Some remarks here..'),
			'Lang' => $paymentRequest->setLang('UTF-8'),
			'Signature' => $paymentRequest->getSignature(),
			'SignatureType' => $paymentRequest->setSignatureType('SHA256'),
			'ResponseURL' => $paymentRequest->setResponseUrl(route('payment-response')),
			'BackendURL' => $paymentRequest->setBackendUrl(route('payment-callback'))
    	];

    	return $paymentRequest->make($this->merchant_key, $data);
    }

    public function response(Request $request)
    {
    	$response = (new \IPay88\Payment\Response)->init($this->merchant_code);
		return $response;
    }

    public function callback(Request $request)
    {
    	$orderLog = new Logger('payments');
		$orderLog->pushHandler(new StreamHandler(storage_path('logs/payments.log')), Logger::INFO);
		$orderLog->info('PaymentLog', $request->all());
    }
}
