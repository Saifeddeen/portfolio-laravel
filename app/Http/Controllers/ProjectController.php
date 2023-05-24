<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function index() {
        $projects = Project::all();
        $data = [];

        for($i=0; $i<$projects->count(); $i++) {
            $project = $projects[$i];
            $techs  = $project->technologies;
            $technologies = [];

            for($j=0; $j<$techs->count(); $j++) {
                $technologies[$j] = [
                    'technology' => $techs[$j],
                    'logo' => $techs[$j]->logo->logo
                ];
            }

            $servs  = $project->services;
            $services = [];

            for($j=0; $j<$servs->count(); $j++) {
                $services[$j] = [
                    'service' => $servs[$j],
                    'logo' => $servs[$j]->logo->logo
                ];
            }

            $data[$i] = [
                'project' => $project,
                'services' => $services,
                'technologies' => $technologies
            ];
        }
//        Response::download('/storage/images/accountant program analysis logo.jpg')
        return $data;
    }
}
