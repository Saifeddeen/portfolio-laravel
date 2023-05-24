<?php

namespace App\Http\Controllers;

use App\Models\SocialAccount;
use Illuminate\Http\Request;

class SocialAccountController extends Controller
{
    function index() {
        $accounts = SocialAccount::all();
        $data = [];

        for($i=0; $i<$accounts->count(); $i++) {
            $data[$i] = [
                'account' => $accounts[$i],
                'logo' => $accounts[$i]->logo->logo
            ];
        }

        return $data;
    }
}
