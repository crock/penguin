<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class ParseController extends Controller
{
    use MakeURL;

    public $client;
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->client = new Client(); // GuzzleHttp\Client
    }

    public function parse(Request $request = null, $service = null, $word = null) {
        echo $this->makeUrl($service, $word);
    }


}
