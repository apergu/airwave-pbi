<?php

namespace App\Http\Controllers;

use App\Services\OAuth1Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PowerBIController extends Controller
{
    //

    protected $oauthService;

    public function __construct(OAuth1Service $oauthService)
    {
        $this->oauthService = $oauthService;
    }

    public function fetchData(Request $request)
    {
        $data = $this->oauthService->get(1360, 1, $request->id, $request->name); // Replace with your API endpoint

        $fetchData = env('BASE_URI_AIRWAVE') . $data['file']['url'];

        $res = Http::get($fetchData);
        return $res->body();
    }
}
