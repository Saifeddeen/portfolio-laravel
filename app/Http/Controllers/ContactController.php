<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        $contacts = Contact::all();
        $data = [];

        for($i=0; $i<$contacts->count(); $i++) {
            $data[$i] = [
                'contact' => $contacts[$i],
                'logo' => $contacts[$i]->logo->logo
            ];
        }

        return $data;
    }
}
