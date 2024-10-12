<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            "name" => "email",
            "value" => "eng.saifeddin@outlook.com",
            "logo_id" => 21
        ]);

        Contact::create([
            "name" => "phone",
            "value" => "00201142672042",
            "logo_id" => 20
        ]);

        Contact::create([
            "name" => "WhatsApp",
            "value" => "00970566761267",
            "logo_id" => 22
        ]);

        Contact::create([
            "name" => "Telegram",
            "value" => "00970592761267",
            "logo_id" => 23
        ]);
    }
}
