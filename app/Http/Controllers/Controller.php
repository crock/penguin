<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

trait MakeURL {

    /**
     * @param $service - id number of service
     * @param $word
     * @return string
     */
    public function makeUrl($service, $word) {
        $url = "";
        switch ($service) {
            case 5:
                $url = "https://steamcommunity.com/id/" . $word;
                break;
            case 6:
                $url = "https://steamcommunity.com/groups/" . $word;
                break;
        }

        return $url;
    }
}