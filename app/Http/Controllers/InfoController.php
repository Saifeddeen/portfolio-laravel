<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    function index() {
        $infos = Info::all();

        return $infos[0];
    }
}
