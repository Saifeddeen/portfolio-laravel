<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
           'name' => 'Software Engineering',
           'description' => 'Introducing all software engineering services needed for software projects.
                These services include <strong>Systems Analysis, UML Designs, Systems Implementation and Software Projects Documentation</strong>.',
           'logo_id' => '7'
        ]);

        Service::create([
            'name' => 'Web Design',
            'description' => 'Creating full responsive web designs using the modern development technologies which are:
                <strong>Html 5, CSS 3, JavaScript, Vue.js and Tailwind CSS</strong>.',
            'logo_id' => '8'
        ]);

        Service::create([
            'name' => 'Web Backend Development',
            'description' => 'Developing web applications using <strong>PHP language and PHP Laravel framework with MySQL</strong> for database queries.',
            'logo_id' => '14'
        ]);

        Service::create([
            'name' => 'UX UI Design',
            'description' => 'Producing pretty and modern designs for web and mobile with the correct analysis of your application.',
            'logo_id' => '18'
        ]);
    }
}
