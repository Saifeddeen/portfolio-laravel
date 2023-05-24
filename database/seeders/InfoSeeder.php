<?php

namespace Database\Seeders;

use App\Models\Info;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Info::create([
            'name' => "Saif",
            'image' => "/storage/images/black-bg.jpg",
            'welcoming' => "I'm Saifeddeen",
            'job-title' => "Software Systems Engineer & Fullstack Web Developer",
            'description' => "I Analyse, Design, Implement and Document Software Projects.
            Also Build Full Responsive Web Applications Using The Modern Technologies."
        ]);
    }
}
