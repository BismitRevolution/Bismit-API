<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ExampleController extends Controller
{
	public function index() {

	$client = new Client([
    	// Base URI is used with relative requests
    	'base_uri' => 'exhibisi-staging.herokuapp.com/'
	]);
	$response = $client->get('products');
	$posts = $response->getBody();

	return view('example_view')
			->with([
				'posts' => $posts
			]);
	}
	
}
