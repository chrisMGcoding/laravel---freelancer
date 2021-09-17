<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('descriptions')->insert([
            [
                'description' => 'Graphic Artist - Web Designer - Illustrator',
                'titre_id' => '1'
            ],
            [
                'description' => 'Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.',
                'titre_id' => '3'
            ],
            [
                'description' => 'You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!',
                'titre_id' => '4'
            ],
            [
                'description' => '2215 John Daniel Drive Clark, MO 65243',
                'titre_id' => '5'
            ],
            [
                'description' => 'Freelance is a free to use, MIT licensed Bootstrap theme created by Start Bootstrap .',
                'titre_id' => '7'
            ]
        ]);
    }
}
