<?php

namespace Jornada\Http\Controllers\Site;

use Illuminate\Http\Request;
use Jornada\Http\Controllers\Controller;
class SiteController extends Controller
{
    public function apresentacao(){
        return view('site.apresentacao');
    }
}
