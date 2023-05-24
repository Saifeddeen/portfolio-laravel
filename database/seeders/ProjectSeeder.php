<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name' => 'Accountant App',
            'description' => "Full analysis of an accountant program for <strong>Ma'reb Chips Factory</strong>, with
                the design of the expected user interfaces.",
            'image' => '/storage/images/accountant program analysis logo.jpg'
        ]);

        Project::create([
            'name' => 'EnGuider Web App',
            'description' => '<strong>Analysing, UML Designing, and Project Documentation</strong> for th EnGuider web app.',
            'image' => '/storage/images/enguider-logo.jpg',
            'url' => 'https://github.com/Saifeddeen/Software-Engineering/blob/main/EnGuider%20Web%20App%20-%20Project%20Document.pdf'
        ]);

        Project::create([
            'name' => 'A Portfolio',
            'description' => 'Design a <strong>responsive</strong> portfolio website using <strong>pure HTML and CSS</strong>',
            'image' => '/storage/images/portfolio logo.jpg',
            'url' => 'https://saifeddeen.github.io/HTML-CSS-Portfolio/',
        ]);

        Project::create([
            'name' => 'Snake Game',
            'description' => 'Design and implement the <strong>snake game</strong> using <strong>pure HTML, CSS and JavaScript</strong>',
            'image' => '/storage/images/snake game logo.jpg',
            'url' => 'https://saifeddeen.github.io/JS/',
        ]);

        Project::create([
            'name' => '60 Seconds',
            'description' => 'A ready designed <strong>Landing Page</strong> deployed to <strong>Laravel</strong>
                application with an <strong>Admin Dashboard</strong> to control the content of the application.',
            'image' => '/storage/images/60seconds logo.jpg'
        ]);

        Project::create([
            'name' => 'EvenTo',
            'description' => 'Adding an <strong>Admin Dashboard</strong> to the <strong>EvenTo App</strong> and applying the
                <strong>API</strong> concept all in a <strong>Laravel</strong> application.',
            'image' => '/storage/images/evento logo.png'
        ]);

        Project::create([
            'name' => 'Rafcart',
            'description' => 'Deploying a ready web design for the <strong>RafCart</strong> fornture store to <strong>Vue JS</strong>
                application, with the implementation of <strong>authentication</strong> and <strong>Axios</strong> library for <strong>API</strong>.',
            'image' => '/storage/images/rafcart logo.jpg',
            'url' => 'https://vue-js-tau.vercel.app/',
        ]);

        Project::create([
            'name' => 'Products App',
            'description' => 'Creating a web design from scratch and applying it to a <strong>Vue JS</strong> application.
                The application work is <strong>adding and deleting</strong> productds after <strong>signing in</strong>
                to the website.',
            'image' => '/storage/images/vue products logo.jpg'
        ]);

        Project::create([
            'name' => 'Landing Page',
            'description' => 'Designing a full <strong>respnsive</strong> landing page using HTML, CSS and
                <strong>Tailwind CSS</strong>.',
            'image' => '/storage/images/tailwind home logo.jpg'
        ]);
    }
}
