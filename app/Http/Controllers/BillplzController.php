<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

//start billplz
use Billplz\Client;
use Http\Client\Common\HttpMethodsClient;
use Http\Adapter\Guzzle6\Client as GuzzleHttpClient;
use Http\Message\MessageFactory\GuzzleMessageFactory;

class BillplzController extends Controller
{
 

public function __construct()
    {
        $this->middleware('auth');
    }

public function startpay(){
      	 $http = new HttpMethodsClient(
    	     	   new GuzzleHttpClient(), 
    		   new GuzzleMessageFactory()
	);
	$billplz->useSandbox();
	$billplz = new Client($http, '301a70d6-a453-4921-96e0-2ab9c1a7d271');
	$collection = $billplz->collection();
	$response = $collection->create('My First API Collection');

	var_dump($response->toArray());

    }
}
