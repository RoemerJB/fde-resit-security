<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faq')->insert([
            'question' => 'How can you book a project space in one of the wings?',
            'answer' => 'There are a total of 26 project group rooms that can be found on the 1st, 2nd and 3rd floor. The rooms are suitable for 6-8 people. These rooms can be reserved via the Self-service portal.',
            'link' => ''
        ]);
    }
}
