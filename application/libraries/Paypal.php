<?php

class Paypal {

	public function load() {
		require_once(__DIR__."/vendor/autoload.php");

			$gateway = new Braintree\Gateway([
			    'environment' => 'sandbox',
			    'merchantId' => 'zntj8swtjb5vjwtj',
			    'publicKey' => 'ncjgqtn4f9ghqqkb',
			    'privateKey' => 'c780ef517850d9ac68b9d3bec47c31ff'
			]);
		
		return $gateway->ClientToken()->generate();
	}

	public function check($amount,$nonce){
		require_once(__DIR__."/vendor/autoload.php");

		$gateway = new Braintree\Gateway([
			    'environment' => 'sandbox',
			    'merchantId' => 'zntj8swtjb5vjwtj',
			    'publicKey' => 'ncjgqtn4f9ghqqkb',
			    'privateKey' => 'c780ef517850d9ac68b9d3bec47c31ff'
			]);

		$result = $gateway->transaction()->sale([
		    'amount' => $amount,
		    'paymentMethodNonce' => $nonce,
		    'options' => [
		        'submitForSettlement' => true
		    ]
		]);
		if ($result->success || !is_null($result->transaction)) {
		    $transaction = $result->transaction;
		    if (isset($transaction->id)) {
		        $transaction = $gateway->transaction()->find($transaction->id);

		        $transactionSuccessStatuses = [
		            Braintree\Transaction::AUTHORIZED,
		            Braintree\Transaction::AUTHORIZING,
		            Braintree\Transaction::SETTLED,
		            Braintree\Transaction::SETTLING,
		            Braintree\Transaction::SETTLEMENT_CONFIRMED,
		            Braintree\Transaction::SETTLEMENT_PENDING,
		            Braintree\Transaction::SUBMITTED_FOR_SETTLEMENT
		        ];

		        if (in_array($transaction->status, $transactionSuccessStatuses)) {
		        	$res['data']=$transaction;
		        	$res['succ']='true'; 
		            return $res;
		        } else {
		        	$res['data']=$transaction;
		        	$res['succ']='false';
		            return $res;
		        }
		    }
		} else {
			$errorString = '';
			foreach($result->errors->deepAll() as $error) {
		        $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
		    }

		    $res['succ']='false'; 
		    $res['err']=$errorString;
		    return $res;
		}

	}

}