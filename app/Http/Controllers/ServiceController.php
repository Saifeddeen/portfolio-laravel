<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function index() {
        $services = Service::all();
        $data = [];

        for($i=0; $i<$services->count(); $i++) {
            $service = $services[$i];
            $techs  = $service->technologies;
            $technologies = [];

            for($j=0; $j<$techs->count(); $j++) {
                $technologies[$j] = [
                    'technology' => $techs[$j],
                    'logo' => $techs[$j]->logo->logo
                ];
            }

            $data[$i] = [
                'service' => $service,
                'logo' => $service->logo,
                'technologies' => $technologies
            ];
        }

        return $data;
    }
}
