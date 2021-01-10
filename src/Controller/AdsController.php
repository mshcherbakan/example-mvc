<?php

namespace App\Controller;

class AdsController
{
    public function index()
    {
        $data = [
            'title' => 'Ads list'
        ];
        return view('ads.ads_list', $data);
    }
}